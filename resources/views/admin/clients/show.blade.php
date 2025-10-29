@extends('admin.layouts.app')

@section('title', 'Detalhes do Cliente')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <a href="{{ route('admin.clients') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="card-title mb-0">Informações do Cliente</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="text-muted mb-1">Nome</h6>
                        <p class="h5 mb-0">{{ $client->client_name }}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-1">E-mail</h6>
                        <p class="h5 mb-0">{{ $client->email ?: 'Não informado' }}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-1">Telefone</h6>
                        <p class="h5 mb-0">{{ $client->phone }}</p>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total de Agendamentos</h6>
                        <p class="h5 mb-0">{{ $appointments->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3">
                    <h5 class="card-title mb-0">Histórico de Agendamentos</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Data/Hora</th>
                                    <th>Profissional</th>
                                    <th>Serviços</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <td>
                                            {{ \Carbon\Carbon::parse($appointment->date)->format('d/m/Y') }}<br>
                                            <small class="text-muted">{{ \Carbon\Carbon::parse($appointment->time)->format('H:i') }}</small>
                                        </td>
                                        <td>{{ $appointment->professional->name }}</td>
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
        </div>
    </div>
</div>
@endsection