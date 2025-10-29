@extends('admin.layouts.app')

@section('title', 'Agendamentos')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Agendamentos</h1>
        <div class="d-flex gap-2">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="bi bi-funnel"></i> Filtrar
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('admin.appointments', ['status' => 'pending']) }}">Pendentes</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.appointments', ['status' => 'confirmed']) }}">Confirmados</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.appointments', ['status' => 'cancelled']) }}">Cancelados</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('admin.appointments') }}">Todos</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
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
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($appointments as $appointment)
                            <tr>
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
                                <td>
                                    <a href="{{ route('admin.appointments.show', $appointment->id) }}" 
                                       class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4">
        {{ $appointments->links() }}
    </div>
</div>
@endsection