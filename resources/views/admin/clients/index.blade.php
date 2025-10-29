@extends('admin.layouts.app')

@section('title', 'Clientes')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Clientes</h1>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Cliente</th>
                            <th>Contato</th>
                            <th>Total Agendamentos</th>
                            <th>Último Agendamento</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>
                                    <h6 class="mb-0">{{ $client->client_name }}</h6>
                                </td>
                                <td>
                                    @if($client->email)
                                        <div>{{ $client->email }}</div>
                                    @endif
                                    <div>{{ $client->phone }}</div>
                                </td>
                                <td>
                                    <span class="badge bg-primary">
                                        {{ $client->total_appointments }} agendamento(s)
                                    </span>
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($client->last_appointment)->format('d/m/Y') }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.clients.show', $client->email) }}" 
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
        {{ $clients->links() }}
    </div>
</div>
@endsection