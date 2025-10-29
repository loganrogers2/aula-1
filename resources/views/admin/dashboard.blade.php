@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Cabeçalho -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Dashboard</h1>
    </div>

    <!-- Cards de Estatísticas -->
    <div class="row g-4 mb-4">
        <div class="col-md-6 col-lg-3">
            <div class="card stats-card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-calendar-check fs-2 text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="card-title mb-0">Total Agendamentos</h6>
                        </div>
                    </div>
                    <h2 class="mb-0">{{ $stats['total_appointments'] }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card stats-card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-clock-history fs-2 text-warning"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="card-title mb-0">Aguardando Confirmação</h6>
                        </div>
                    </div>
                    <h2 class="mb-0">{{ $stats['pending_appointments'] }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card stats-card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-scissors fs-2 text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="card-title mb-0">Total Serviços</h6>
                        </div>
                    </div>
                    <h2 class="mb-0">{{ $stats['total_services'] }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="card stats-card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <i class="bi bi-people fs-2 text-info"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="card-title mb-0">Total Profissionais</h6>
                        </div>
                    </div>
                    <h2 class="mb-0">{{ $stats['total_professionals'] }}</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Lista de Agendamentos Recentes -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <h5 class="card-title mb-0">Agendamentos Recentes</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Cliente</th>
                            <th>Profissional</th>
                            <th>Data/Hora</th>
                            <th>Serviços</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recent_appointments as $appointment)
                            <tr onclick="window.location='{{ route('admin.appointments.show', $appointment->id) }}'">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="mb-0">{{ $appointment->client_name }}</h6>
                                            <small class="text-muted">{{ $appointment->email }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $appointment->professional->name }}</td>
                                <td>
                                    {{ \Carbon\Carbon::parse($appointment->date)->format('d/m/Y') }}<br>
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($appointment->time)->format('H:i') }}</small>
                                </td>
                                <td>
                                    @foreach($appointment->services as $service)
                                        <span class="badge bg-light text-dark">{{ $service->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <span class="appointment-status status-{{ $appointment->status }}">
                                        {{ ucfirst($appointment->status) }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection