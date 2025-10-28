@extends('layouts.app')

@section('title', 'Carrinho')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-white">
                    <h4 class="mb-0">Meu Carrinho</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('cart') && count(session('cart')) > 0)
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>Serviço</th>
                                        <th class="text-center">Quantidade</th>
                                        <th class="text-end">Preço</th>
                                        <th class="text-end">Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0 @endphp
                                    @foreach(session('cart') as $id => $details)
                                        @php 
                                            $subtotal = str_replace(',', '.', $details['price']) * $details['quantity'];
                                            $total += $subtotal;
                                        @endphp
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">{{ $details['name'] }}</h6>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <form action="{{ route('cart.update', $id) }}" method="POST" class="d-flex align-items-center">
                                                        @csrf
                                                        <button type="submit" name="action" value="decrease" class="btn btn-sm btn-outline-secondary">-</button>
                                                        <span class="mx-2">{{ $details['quantity'] }}</span>
                                                        <button type="submit" name="action" value="increase" class="btn btn-sm btn-outline-secondary">+</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="text-end">R$ {{ $details['price'] }}</td>
                                            <td class="text-end">R$ {{ number_format($subtotal, 2, ',', '.') }}</td>
                                            <td class="text-end">
                                                <form action="{{ route('cart.remove', $id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="text-end"><strong>Total:</strong></td>
                                        <td class="text-end"><strong>R$ {{ number_format($total, 2, ',', '.') }}</strong></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Limpar Carrinho</button>
                            </form>
                            <a href="{{ route('appointments.create') }}" class="btn btn-primary">
                                Finalizar Agendamento
                            </a>
                        </div>
                    @else
                        <div class="text-center py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-cart text-muted mb-3" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                            </svg>
                            <p class="text-muted">Seu carrinho está vazio</p>
                            <a href="{{ url('services') }}" class="btn btn-primary">Ver Serviços</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Resumo</h5>
                </div>
                <div class="card-body">
                    <p class="mb-2">Total de itens: {{ session('cart') ? count(session('cart')) : 0 }}</p>
                    <h4 class="mb-3">Total: R$ {{ isset($total) ? number_format($total, 2, ',', '.') : '0,00' }}</h4>
                    @if(session('cart') && count(session('cart')) > 0)
                        <div class="d-grid">
                            <a href="{{ route('appointments.create') }}" class="btn btn-primary">
                                Finalizar Agendamento
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection