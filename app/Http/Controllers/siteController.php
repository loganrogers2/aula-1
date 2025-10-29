<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Professional;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    /**
     * Retorna os serviços disponíveis do banco de dados
     */
    private function getServices()
    {
        return Service::where('active', true)->get();
    }

    /**
     * Mostrar a página inicial do site.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retorna a view resources/views/index.blade.php
        return view('index');
    }

    /**
     * Mostrar a área de vendas com uma lista de serviços/produtos.
     *
     * @return \Illuminate\View\View
     */
    public function shop()
    {
        return view('shop', ['products' => $this->getServices()]);
    }

    /**
     * Mostrar a página de serviços
     * 
     * @return \Illuminate\View\View
     */
    public function services()
    {
        return view('services', ['services' => $this->getServices()]);
    }

    /**
     * Mostrar formulário de agendamento
     */
    public function createAppointment()
    {
        $services = $this->getServices();
        $professionals = Professional::where('active', true)->get();
        return view('appointments.create', [
            'services' => $services,
            'professionals' => $professionals
        ]);
    }

    /**
     * Salvar novo agendamento
     */
    public function storeAppointment(Request $request)
    {
        $validated = $request->validate([
            'service_ids' => 'required|array|min:1',
            'service_ids.*' => 'required|integer|exists:services,id',
            'professional_id' => 'required|integer|exists:professionals,id',
            'client_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
            'notes' => 'nullable|string|max:1000'
        ]);

        // Remove service_ids do array validated para criar o appointment
        $service_ids = $validated['service_ids'];
        unset($validated['service_ids']);
        
        $appointment = new Appointment($validated);
        $appointment->status = 'pending';
        $appointment->save();
        
        // Adiciona os serviços selecionados com seus preços atuais
        $services = Service::whereIn('id', $service_ids)->get();
        foreach ($services as $service) {
            $appointment->services()->attach($service->id, [
                'price_at_time' => $service->price
            ]);
        }

        // Limpa o carrinho após criar o agendamento
        Session::forget('cart');

        return redirect()
            ->route('appointments.create')
            ->with('success', 'Agendamento realizado com sucesso! Em breve entraremos em contato para confirmar.');
    }

    /**
     * Mostra o carrinho de compras
     */
    public function cart()
    {
        return view('cart');
    }

    /**
     * Adiciona um item ao carrinho
     */
    public function addToCart($id)
    {
        $service = Service::find($id);
        
        if (!$service) {
            return redirect()->back()->with('error', 'Serviço não encontrado.');
        }

        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $service['name'],
                'quantity' => 1,
                'price' => $service['price'],
            ];
        }

        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Serviço adicionado ao carrinho!');
    }

    /**
     * Remove um item do carrinho
     */
    public function removeFromCart($id)
    {
        $cart = Session::get('cart', []);
        
        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item removido do carrinho!');
    }

    /**
     * Atualiza a quantidade de um item no carrinho
     */
    public function updateCart(Request $request, $id)
    {
        $cart = Session::get('cart', []);
        
        if (isset($cart[$id])) {
            if ($request->action === 'increase') {
                $cart[$id]['quantity']++;
            } else if ($request->action === 'decrease' && $cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity']--;
            }
            Session::put('cart', $cart);
        }

        return redirect()->back();
    }

    /**
     * Limpa o carrinho
     */
    public function clearCart()
    {
        Session::forget('cart');
        return redirect()->back()->with('success', 'Carrinho esvaziado!');
    }

    /**
     * Mostrar a página da equipe
     * 
     * @return \Illuminate\View\View
     */
    public function equipe()
    {
        return view('equipe');
    }
}
