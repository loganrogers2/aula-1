<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    /**
     * Array com os serviços disponíveis
     */
    private $services = [
        ['id' => 1, 'name' => 'Corte Masculino', 'price' => '35,00', 'description' => 'Cortes modernos ou tradicionais, adequados ao seu estilo. Inclui lavagem e finalização.'],
        ['id' => 2, 'name' => 'Barba', 'price' => '25,00', 'description' => 'Modelagem completa com toalha quente, óleo de barba e finalização perfeita.'],
        ['id' => 3, 'name' => 'Combo Completo', 'price' => '55,00', 'description' => 'Corte + barba com tratamento completo. Inclui massagem relaxante.'],
        ['id' => 4, 'name' => 'Hidratação Capilar', 'price' => '45,00', 'description' => 'Tratamento profundo com produtos premium para revitalizar seus cabelos.'],
    ];

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
        return view('shop', ['products' => $this->services]);
    }

    /**
     * Mostrar a página de serviços
     * 
     * @return \Illuminate\View\View
     */
    public function services()
    {
        return view('services', ['services' => $this->services]);
    }

    /**
     * Mostrar formulário de agendamento
     */
    public function createAppointment()
    {
        return view('appointments.create', ['services' => $this->services]);
    }

    /**
     * Salvar novo agendamento
     */
    public function storeAppointment(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|integer|exists:services,id',
            'client_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required|date_format:H:i',
            'notes' => 'nullable|string|max:1000'
        ]);

        $appointment = new Appointment($validated);
        $appointment->status = 'pending';
        $appointment->save();

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
        $service = collect($this->services)->firstWhere('id', (int) $id);
        
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
}
