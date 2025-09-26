<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> @yield ('title', 'Festival Gastronômico 2025')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @stack('head')
 
</head>   

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('evento.festa')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
  <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
</svg>  Mestre Churrasqueiro 2025</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('evento.festa')}}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#programacao">Programação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ingressos">Ingressos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.login.form') }}">Área Administrativa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <!-- Conteudo Principal -->
    <main style="margin-top: 56px;">
        @yield('content')
    </main>
 

    <!-- Footer -->
    @hasSection('footer')
    @yield('footer')
    @else
    <footer id="contato" class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Contato</h5>
                    <p><i class="fas fa-envelope me-2"></i>contato@musicfest2024.com</p>
                    <p><i class="fas fa-phone me-2"></i>(11) 9999-8888</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i>Parque Ibirapuera - São Paulo, SP</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h5>Siga-nos</h5>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube fa-2x"></i></a>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2024 MusicFest. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
@endif

     
</body>
</html>
