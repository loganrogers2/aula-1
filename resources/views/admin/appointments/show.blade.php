@extends('admin.layouts.app')

@section('title', 'Detalhes do Agendamento')

@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <a href="{{ route('admin.appointments') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="card-title mb-0">Informações do Agendamento</h5>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h6 class="text-muted mb-1">Cliente</h6>
                            <p class="h5 mb-0">{{ $appointment->client_name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted mb-1">Profissional</h6>
                            <p class="h5 mb-0">{{ $appointment->professional->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted mb-1">Data</h6>
                            <p class="h5 mb-0">{{ \Carbon\Carbon::parse($appointment->date)->format('d/m/Y') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted mb-1">Horário</h6>
                            <p class="h5 mb-0">{{ \Carbon\Carbon::parse($appointment->time)->format('H:i') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted mb-1">E-mail</h6>
                            <p class="h5 mb-0">{{ $appointment->email ?: 'Não informado' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted mb-1">Telefone</h6>
                            <p class="h5 mb-0">{{ $appointment->phone }}</p>
                        </div>
                        @if($appointment->notes)
                            <div class="col-12">
                                <h6 class="text-muted mb-1">Observações</h6>
                                <p class="mb-0">{{ $appointment->notes }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3">
                    <h5 class="card-title mb-0">Serviços Solicitados</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Serviço</th>
                                    <th>Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointment->services as $service)
                                    <tr>
                                        <td>{{ $service->name }}</td>
                                        <td>R$ {{ number_format($service->pivot->price_at_time, 2, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th>R$ {{ number_format($appointment->services->sum('pivot.price_at_time'), 2, ',', '.') }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="card-title mb-0">Status do Agendamento</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.appointments.update-status', $appointment->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        
                        <div class="mb-3">
                            <label class="form-label">Status Atual</label>
                            <select name="status" class="form-select" onchange="this.form.submit()">
                                <option value="pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>
                                    Pendente
                                </option>
                                <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>
                                    Confirmado
                                </option>
                                <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>
                                    Cancelado
                                </option>
                            </select>
                        </div>
                    </form>

                    <div class="alert alert-secondary mb-0">
                        <small>
                            <strong>Criado em:</strong><br>
                            {{ $appointment->created_at->format('d/m/Y H:i') }}
                        </small>
                        @if($appointment->updated_at != $appointment->created_at)
                            <br>
                            <small>
                                <strong>Última atualização:</strong><br>
                                {{ $appointment->updated_at->format('d/m/Y H:i') }}
                            </small>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection