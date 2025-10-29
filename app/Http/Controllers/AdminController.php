<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Professional;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_appointments' => Appointment::count(),
            'pending_appointments' => Appointment::where('status', 'pending')->count(),
            'total_services' => Service::count(),
            'total_professionals' => Professional::count(),
        ];

        $recent_appointments = Appointment::with(['professional', 'services'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recent_appointments'));
    }

    public function appointments()
    {
        $appointments = Appointment::with(['professional', 'services'])
            ->orderBy('date', 'desc')
            ->orderBy('time', 'desc')
            ->paginate(10);

        return view('admin.appointments.index', compact('appointments'));
    }

    public function appointmentShow($id)
    {
        $appointment = Appointment::with(['professional', 'services'])->findOrFail($id);
        return view('admin.appointments.show', compact('appointment'));
    }

    public function appointmentUpdateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled'
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->status = $validated['status'];
        $appointment->save();

        return redirect()
            ->route('admin.appointments.show', $id)
            ->with('success', 'Status atualizado com sucesso!');
    }

    public function clients()
    {
        $clients = Appointment::select('client_name', 'email', 'phone')
            ->selectRaw('COUNT(*) as total_appointments')
            ->selectRaw('MAX(created_at) as last_appointment')
            ->groupBy('client_name', 'email', 'phone')
            ->orderBy('total_appointments', 'desc')
            ->paginate(10);

        return view('admin.clients.index', compact('clients'));
    }

    public function clientDetails($email)
    {
        $appointments = Appointment::with(['professional', 'services'])
            ->where('email', $email)
            ->orderBy('date', 'desc')
            ->orderBy('time', 'desc')
            ->get();

        $client = $appointments->first();

        return view('admin.clients.show', compact('client', 'appointments'));
    }
}