@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Cabeçalho da Seção -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Nossa Equipe</h1>
        <p class="lead text-muted">Conheça os profissionais que fazem a diferença</p>
        <div class="divider my-4">
            <span class="divider-line bg-primary"></span>
        </div>
    </div>

    <!-- Grid de Membros da Equipe -->
    <div class="row g-4">
        <!-- Membro 1 -->
        <div class="col-lg-3 col-md-6">
            <div class="team-member card border-0 shadow-sm h-100">
                <div class="position-relative">
                    <img src="https://via.placeholder.com/300x400" class="card-img-top" alt="João Silva">
                    <div class="social-links">
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">João Silva</h5>
                    <p class="text-muted mb-3">Barbeiro Master</p>
                    <p class="card-text small">Especialista em cortes clássicos e modernos, com mais de 10 anos de experiência.</p>
                </div>
            </div>
        </div>

        <!-- Membro 2 -->
        <div class="col-lg-3 col-md-6">
            <div class="team-member card border-0 shadow-sm h-100">
                <div class="position-relative">
                    <img src="https://via.placeholder.com/300x400" class="card-img-top" alt="Maria Santos">
                    <div class="social-links">
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">Maria Santos</h5>
                    <p class="text-muted mb-3">Especialista em Barba</p>
                    <p class="card-text small">Expert em barbas estilizadas e tratamentos capilares masculinos.</p>
                </div>
            </div>
        </div>

        <!-- Membro 3 -->
        <div class="col-lg-3 col-md-6">
            <div class="team-member card border-0 shadow-sm h-100">
                <div class="position-relative">
                    <img src="https://via.placeholder.com/300x400" class="card-img-top" alt="Pedro Oliveira">
                    <div class="social-links">
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">Pedro Oliveira</h5>
                    <p class="text-muted mb-3">Colorista</p>
                    <p class="card-text small">Especializado em coloração e tratamentos modernos para cabelo.</p>
                </div>
            </div>
        </div>

        <!-- Membro 4 -->
        <div class="col-lg-3 col-md-6">
            <div class="team-member card border-0 shadow-sm h-100">
                <div class="position-relative">
                    <img src="https://via.placeholder.com/300x400" class="card-img-top" alt="Ana Costa">
                    <div class="social-links">
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">Ana Costa</h5>
                    <p class="text-muted mb-3">Designer de Cortes</p>
                    <p class="card-text small">Especialista em cortes modernos e tendências atuais.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção de Estatísticas -->
    <div class="row mt-5 g-4 text-center">
        <div class="col-lg-3 col-md-6">
            <div class="stat-item p-4 rounded bg-light">
                <h2 class="display-4 fw-bold text-primary">10+</h2>
                <p class="mb-0">Anos de Experiência</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stat-item p-4 rounded bg-light">
                <h2 class="display-4 fw-bold text-primary">5k+</h2>
                <p class="mb-0">Clientes Satisfeitos</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stat-item p-4 rounded bg-light">
                <h2 class="display-4 fw-bold text-primary">4</h2>
                <p class="mb-0">Profissionais Experts</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stat-item p-4 rounded bg-light">
                <h2 class="display-4 fw-bold text-primary">15+</h2>
                <p class="mb-0">Prêmios Conquistados</p>
            </div>
        </div>
    </div>
</div>

<style>
.team-member {
    transition: transform 0.3s ease;
}

.team-member:hover {
    transform: translateY(-10px);
}

.social-links {
    position: absolute;
    bottom: 20px;
    left: 0;
    right: 0;
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.team-member:hover .social-links {
    opacity: 1;
}

.divider {
    position: relative;
    text-align: center;
}

.divider-line {
    display: inline-block;
    width: 60px;
    height: 4px;
    border-radius: 2px;
}

.stat-item {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
}
</style>
@endsection