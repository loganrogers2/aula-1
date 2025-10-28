@extends('layouts.app')

@section('title', 'Serviços')

@section('content')
<div class="container py-5">
    <h1 class="shop-title display-5 mb-4 text-center">Nossos Serviços</h1>
    <p class="lead text-muted text-center mb-4">Conheça os serviços exclusivos da nossa barbearia</p>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
        <div class="col d-flex">
            <div class="card w-100 border-0 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <div class="text-center mb-4">
                        <div class="service-icon mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-scissors text-primary" viewBox="0 0 16 16">
                                <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0m7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                            </svg>
                        </div>
                        <h3 class="card-title h4 mb-3">Corte Masculino</h3>
                        <div class="service-price text-center mb-3">
                            <span class="service-price-currency">R$</span> 
                            35,00
                        </div>
                    </div>
                    <p class="card-text text-muted mb-4 flex-grow-1">Cortes modernos ou tradicionais, adequados ao seu estilo. Inclui lavagem e finalização.</p>
                    <div class="mt-auto">
                        <a href="/shop" class="btn btn-success btn-lg w-100">
                            <i class="bi bi-calendar-check me-2"></i>
                            Agendar Horário
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col d-flex">
            <div class="card w-100 border-0 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <div class="text-center mb-4">
                        <div class="service-icon mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-cup-hot text-primary" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6zM13 12.5a2.01 2.01 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5M2.64 13.825 1.123 7h11.754l-1.517 6.825A1.5 1.5 0 0 1 9.896 15H4.104a1.5 1.5 0 0 1-1.464-1.175Z"/>
                                <path d="m4.4.8-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 3.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8m3 0-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 6.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8m3 0-.003.004-.014.019a4.077 4.077 0 0 0-.204.31 2.337 2.337 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.198 3.198 0 0 1-.202.388 5.385 5.385 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 9.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8"/>
                            </svg>
                        </div>
                        <h3 class="card-title h4 mb-3">Barba</h3>
                        <div class="service-price text-center mb-3">
                            <span class="service-price-currency">R$</span> 
                            25,00
                        </div>
                    </div>
                    <p class="card-text text-muted mb-4 flex-grow-1">Modelagem completa com toalha quente, óleo de barba e finalização perfeita.</p>
                    <div class="mt-auto">
                        <a href="/shop" class="btn btn-success btn-lg w-100">
                            <i class="bi bi-calendar-check me-2"></i>
                            Agendar Horário
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col d-flex">
            <div class="card w-100 border-0 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <div class="text-center mb-4">
                        <div class="service-icon mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-star text-primary" viewBox="0 0 16 16">
                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                            </svg>
                        </div>
                        <h3 class="card-title h4 mb-3">Combo Completo</h3>
                        <div class="service-price text-center mb-3">
                            <span class="service-price-currency">R$</span> 
                            55,00
                        </div>
                    </div>
                    <p class="card-text text-muted mb-4 flex-grow-1">Corte + barba com tratamento completo. Inclui massagem relaxante.</p>
                    <div class="mt-auto">
                        <a href="/shop" class="btn btn-success btn-lg w-100">
                            <i class="bi bi-calendar-check me-2"></i>
                            Agendar Horário
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col d-flex">
            <div class="card w-100 border-0 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <div class="text-center mb-4">
                        <div class="service-icon mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-droplet text-primary" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                            </svg>
                        </div>
                        <h3 class="card-title h4 mb-3">Hidratação Capilar</h3>
                        <div class="service-price text-center mb-3">
                            <span class="service-price-currency">R$</span> 
                            45,00
                        </div>
                    </div>
                    <p class="card-text text-muted mb-4 flex-grow-1">Tratamento profundo com produtos premium para revitalizar seus cabelos.</p>
                    <div class="mt-auto">
                        <a href="/shop" class="btn btn-success btn-lg w-100">
                            <i class="bi bi-calendar-check me-2"></i>
                            Agendar Horário
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animação inicial dos cards
        const cards = document.querySelectorAll('.card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            setTimeout(() => {
                requestAnimationFrame(() => {
                    card.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                });
            }, 100 * index);
        });
    });
</script>
@endpush