@extends('layout')

@section('title', 'Festival de Música 2025')

@section('content')

    <!-- Hero Section -->
    <section id="inicio" class="bg-primary text-white text-center py-5" style="margin-top: 56px; background: linear-gradient(135deg, #f51a0bff 0%, #f88501ff 100%);">
        <div class="container">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-3 fw-bold mb-4">Festival de Churrasco 2025</h1>
                    <p class="lead mb-4"> Os Melhores Estão Aqui !</p>
                    <div class="row text-center mb-4">
                        <div class="col-md-4">
                            <h3><i class="fas fa-calendar-alt"></i></h3>
                            <p>Dias 10, 11 e 12 de Outubro</p>
                        </div>
                        <div class="col-md-4">
                            <h3><i class="fas fa-map-marker-alt"></i></h3>
                            <p> Marco Zero - Recife </p>
                        </div>
                        <div class="col-md-4">
                            <h3><i class="fas fa-users"></i></h3>
                            <p> Os Melhores Chefs</p>
                        </div>
                    </div>
                    <a href="#ingressos" class="btn btn-warning btn-lg me-3">
                        <i class="fas fa-ticket-alt me-2"></i>Comprar Ingressos
                    </a>
                    <a href="#programacao" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-music me-2"></i>Ver Programação
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Programação -->
    <section id="programacao" class="py-5"  style= "background: linear-gradient(135deg, #2e2828ff 0%, #695959ff 100%);">
        <div class="container">
            <h2 class="text-center mb-5">Programação</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-danger">
                        <div class="card-header bg-danger text-white text-center">
                            <h4>Sexta-feira - 10/10</h4>
                        </div>
                        <div class="card-body">
                            <div class="timeline">
                                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                    <strong>18:00</strong>
                                    <span>José Almiro</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                    <strong>19:00</strong>
                                    <span>Kelvin Lopo</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                    <strong>20:00</strong>
                                    <span> Fabrício Lemos</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <strong>21:00</strong>
                                    <span>Letícia Massula</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-success">
                        <div class="card-header bg-success text-white text-center">
                            <h4>Sábado - 11/10</h4>
                        </div>
                        <div class="card-body">
                            <div class="timeline">
                                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                    <strong>16:00</strong>
                                    <span>Carol Armênio</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                    <strong>17:00</strong>
                                    <span>Santi Roig</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                    <strong>18:00</strong>
                                    <span>Roberto Ravioli</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <strong>19:00</strong>
                                    <span> Paula Labaki</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-warning">
                        <div class="card-header bg-warning text-dark text-center">
                            <h4> Domingo - 12/10 </h4>
                        </div>
                        <div class="card-body">
                            <div class="timeline">
                                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                    <strong>15:00</strong>
                                    <span>José Mateus</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                    <strong>16:00</strong>
                                    <span>Netão BomBeef</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom pb-2 mb-2">
                                    <strong>17:00</strong>
                                    <span>Alder Lopes </span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <strong>18:00</strong>
                                    <span> Renzo Garibaldi </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ingressos -->
    <section id="ingressos" class="py-5 bg-light" style= "background: linear-gradient(135deg, #f88501ff 0%, #f51a0bff 100%);">
        <div class="container">
            <h2 class="text-center mb-5">Ingressos</h2>
            <div class="row">
                <div class="col-lg-4 mb-4 " >
                    <div class="card text-center h-100">
                        <div class="card-body" style="card:hover {transform:translateY(-10px); box-shadow:0 10px 20px rgba(0,0,0,0.2); transition:all 0.3s ease-in-out;}">
                            <h4 class="card-title">Pista</h4>
                            <h2 class="text-primary">R$ 120</h2>
                            <p class="card-text">Acesso à área da pista</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>3 dias de evento</li>
                                <li><i class="fas fa-check text-success me-2"></i>Área de alimentação</li>
                                <li><i class="fas fa-check text-success me-2"></i>Banheiros</li>
                            </ul>
                            <button class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card text-center h-100 border-warning">
                        <div class="card-header bg-warning">
                            <span class="badge bg-dark">Mais Popular</span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">VIP</h4>
                            <h2 class="text-warning">R$ 250</h2>
                            <p class="card-text">Experiência premium</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Área VIP exclusiva</li>
                                <li><i class="fas fa-check text-success me-2"></i>Bar premium</li>
                                <li><i class="fas fa-check text-success me-2"></i>Banheiros VIP</li>
                                <li><i class="fas fa-check text-success me-2"></i>Vista privilegiada</li>
                            </ul>
                            <button class="btn btn-warning">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <h4 class="card-title">Camarote</h4>
                            <h2 class="text-success">R$ 450</h2>
                            <p class="card-text">Máximo conforto</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Camarote climatizado</li>
                                <li><i class="fas fa-check text-success me-2"></i>Open bar</li>
                                <li><i class="fas fa-check text-success me-2"></i>Buffet incluído</li>
                                <li><i class="fas fa-check text-success me-2"></i>Estacionamento</li>
                            </ul>
                            <button class="btn btn-success">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Inscrição -->
    <section class="py-5"   style= "background: linear-gradient(135deg, #2e2828ff 0%, #695959ff 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center">
                            <h3>Cadastre-se para receber novidades</h3>
                        </div>
                        <div class="card-body" >
                            <form action="/musica" method="POST">
                                 @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nome" class="form-label">Nome Completo</label>
                                        <input type="text" class="form-control" id="nome" name="nome" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="tel" class="form-control" id="telefone" name="telefone" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="idade" class="form-label">Idade</label>
                                        <select class="form-select" id="idade" name="idade">
                                            <option value="">Selecione...</option>
                                            <option value="18-25">18-25 anos</option>
                                            <option value="26-35">26-35 anos</option>
                                            <option value="36-45">36-45 anos</option>
                                            <option value="46+">46+ anos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Estilos musicais preferidos:</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="rock" name="estilos[]" value="rock">
                                                <label class="form-check-label" for="rock">Rock</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pop" name="estilos[]" value="pop">
                                                <label class="form-check-label" for="pop">Pop</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="eletronico" name="estilos[]" value="eletronico">
                                                <label class="form-check-label" for="eletronico">Eletrônico</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="mpb" name="estilos[]" value="mpb">
                                                <label class="form-check-label" for="mpb">MPB</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="newsletter" name="novidades" value="true" required>
                                    <label class="form-check-label" for="newsletter">
                                        Aceito receber informações sobre eventos futuros
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" >
                                        <i class="fas fa-paper-plane me-2"></i>Cadastrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeria -->
    <section id="galeria" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Galeria do Evento Anterior</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/images (1).jpg') }}" class="img-fluid rounded shadow" alt="Foto 1">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/download (2).jpg') }}" class="img-fluid rounded shadow" alt="Foto 2">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/download (3).jpg') }}" class="img-fluid rounded shadow" alt="Foto 3">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/download (4).jpg') }}" class="img-fluid rounded shadow" alt="Foto 4">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/images (2).jpg') }}" class="img-fluid rounded shadow" alt="Foto 5">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/images.jpg') }}" class="img-fluid rounded shadow" alt="Foto 6">
                </div>
            </div>
        </div>
    </section>
    @endsection
 