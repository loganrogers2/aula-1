@extends('layouts.app')

@section('title', 'Loja')

@section('content')
<div class="container py-5">
    <h1 class="shop-title display-4 mb-5 text-center">Nossos Serviços</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($products as $p)
            <div class="col d-flex">
                <div class="card w-100 border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center mb-3">{{ $p['name'] }}</h5>
                        <div class="service-price text-center mb-3">
                            <span class="service-price-currency">R$</span> 
                            {{ $p['price'] }}
                        </div>
                        <p class="card-text text-muted mb-4 flex-grow-1">
                            {{ Str::limit($p['description'] ?? 'Descrição não disponível.', 100) }}
                        </p>
                        <div class="mt-auto">
                            <form action="{{ route('cart.add', $p['id']) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success btn-lg w-100 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus me-2" viewBox="0 0 16 16">
                                        <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                    </svg>
                                    Adicionar ao Carrinho
                                </button>
                            </form>
                            <button type="button" class="btn btn-outline-secondary w-100" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#detailsModal{{ $p['id'] }}">
                                <i class="bi bi-info-circle me-2"></i>
                                Ver Detalhes
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal de Detalhes -->
            <div class="modal fade" id="detailsModal{{ $p['id'] }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h5 class="modal-title fw-bold">{{ $p['name'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center mb-4">
                                <span class="service-price-currency fs-4">R$</span>
                                <span class="service-price display-4">{{ $p['price'] }}</span>
                            </div>
                            <p class="lead text-muted">{{ $p['description'] ?? 'Descrição não disponível.' }}</p>
                            <hr class="my-4">
                            <div class="d-grid gap-2">
                                <form action="{{ route('cart.add', $p['id']) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-lg w-100">
                                        <i class="bi bi-cart-plus me-2"></i>
                                        Adicionar ao Carrinho
                                    </button>
                                </form>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    Nenhum produto disponível no momento.
                </div>
            </div>
        @endforelse
    </div>
@endsection