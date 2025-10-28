@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden">
    <div class="container py-5">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6 py-5">
                <h1 class="display-4 fw-bold mb-4 animate-up">
                    Estilo & Tradição em
                    <span class="text-gradient">Cada Corte</span>
                </h1>
                <p class="lead mb-4 text-muted animate-up-delay">
                    Expertise em barbearia moderna combinada com o melhor do atendimento tradicional. 
                    Transforme seu visual com quem entende do assunto.
                </p>
                <div class="d-flex gap-3 animate-up-delay-2">
                    <a href="{{ route('appointments.create') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-calendar-check me-2"></i>
                        Agende Agora
                    </a>
                    <a href="{{ url('services') }}" class="btn btn-outline-dark btn-lg">
                        <i class="bi bi-arrow-right me-2"></i>
                        Conheça Mais
                    </a>
                </div>

                <div class="mt-5 pt-4 animate-up-delay-3">
                    <div class="d-flex align-items-center gap-4">
                        <div class="stats-item">
                            <h3 class="h2 fw-bold mb-1">4.9<span class="text-warning">★</span></h3>
                            <p class="text-muted mb-0">Avaliação Média</p>
                        </div>
                        <div class="stats-item">
                            <h3 class="h2 fw-bold mb-1">5k+</h3>
                            <p class="text-muted mb-0">Clientes Satisfeitos</p>
                        </div>
                        <div class="stats-item">
                            <h3 class="h2 fw-bold mb-1">10+</h3>
                            <p class="text-muted mb-0">Anos de Experiência</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 position-relative animate-up">
                <div class="hero-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&q=80&w=600" 
                         alt="Barbearia" 
                         class="img-fluid rounded-4 shadow-lg">
                    <div class="floating-card bg-white p-3 rounded-3 shadow-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="bi bi-calendar-check text-primary fs-4"></i>
                            </div>
                            <div>
                                <p class="fw-bold mb-1">Horários Flexíveis</p>
                                <p class="text-muted small mb-0">Agenda online 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section py-5 bg-light">
    <div class="container py-4">
        <div class="row g-4">
            <div class="col-md-4 animate-up">
                <div class="feature-card bg-white p-4 rounded-4 shadow-sm h-100">
                    <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-scissors text-primary fs-4"></i>
                    </div>
                    <h3 class="h5 mb-3">Profissionais Especializados</h3>
                    <p class="text-muted mb-0">Nossa equipe é formada por barbeiros experientes e constantemente atualizados com as últimas tendências.</p>
                </div>
            </div>
            <div class="col-md-4 animate-up-delay">
                <div class="feature-card bg-white p-4 rounded-4 shadow-sm h-100">
                    <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-shield-check text-primary fs-4"></i>
                    </div>
                    <h3 class="h5 mb-3">Ambiente Higienizado</h3>
                    <p class="text-muted mb-0">Mantemos os mais altos padrões de limpeza e esterilização em nossos equipamentos e ambiente.</p>
                </div>
            </div>
            <div class="col-md-4 animate-up-delay-2">
                <div class="feature-card bg-white p-4 rounded-4 shadow-sm h-100">
                    <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-stars text-primary fs-4"></i>
                    </div>
                    <h3 class="h5 mb-3">Produtos Premium</h3>
                    <p class="text-muted mb-0">Utilizamos apenas produtos de alta qualidade para garantir os melhores resultados para nossos clientes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="cta-card bg-dark text-white p-5 rounded-4 text-center position-relative overflow-hidden">
                    <div class="position-relative z-1">
                        <h2 class="display-6 fw-bold mb-4">Pronto para Transformar seu Visual?</h2>
                        <p class="lead mb-4">Agende seu horário agora e experimente o melhor em serviços de barbearia.</p>
                        <a href="{{ route('appointments.create') }}" class="btn btn-light btn-lg">
                            Marcar Horário
                        </a>
                    </div>
                    <div class="decoration-line"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .hero-section {
        background: linear-gradient(to right, #f8f9fa, #ffffff);
    }

    .text-gradient {
        background: linear-gradient(45deg, #2ecc71, #27ae60);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .min-vh-75 {
        min-height: 75vh;
    }

    .hero-image-wrapper {
        position: relative;
        z-index: 1;
    }

    .hero-image-wrapper img {
        position: relative;
        z-index: 1;
    }

    .floating-card {
        position: absolute;
        bottom: 30px;
        right: -20px;
        z-index: 2;
    }

    .stats-item {
        padding-right: 2rem;
        border-right: 2px solid #e9ecef;
    }

    .stats-item:last-child {
        border-right: none;
        padding-right: 0;
    }

    .feature-card {
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
    }

    .cta-card {
        background: linear-gradient(45deg, #2c3e50, #3498db);
    }

    .decoration-line {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background: repeating-linear-gradient(
            45deg,
            rgba(255,255,255,0.1),
            rgba(255,255,255,0.1) 10px,
            transparent 10px,
            transparent 20px
        );
    }

    /* Animações */
    .animate-up {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s ease forwards;
    }

    .animate-up-delay {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s ease forwards;
        animation-delay: 0.2s;
    }

    .animate-up-delay-2 {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s ease forwards;
        animation-delay: 0.4s;
    }

    .animate-up-delay-3 {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s ease forwards;
        animation-delay: 0.6s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsividade */
    @media (max-width: 991.98px) {
        .floating-card {
            position: relative;
            bottom: auto;
            right: auto;
            margin-top: 1rem;
        }

        .stats-item {
            padding-right: 1rem;
        }

        .hero-image-wrapper {
            margin-top: 2rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.animate-up, .animate-up-delay, .animate-up-delay-2, .animate-up-delay-3').forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });
    });
</script>
@endpush