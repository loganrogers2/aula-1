<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Barbearia') - Barbearia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .shop-title {
            color: #2c3e50;
            font-weight: 700;
            position: relative;
            display: inline-block;
            padding-bottom: 0.5rem;
        }

        .shop-title::after {
            content: '';
            position: absolute;
            width: 60%;
            height: 4px;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(to right, #2ecc71, #27ae60);
            border-radius: 2px;
        }

        .card {
            border: none;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border-radius: 12px;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
            background: #fff;
            will-change: transform;
        }

        .card::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border-radius: 12px;
            opacity: 0;
            box-shadow: 0 15px 25px rgba(0,0,0,0.15);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            z-index: -1;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card:hover::after {
            opacity: 1;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            height: 100%;
            padding: 1.25rem;
        }

        @media (min-width: 992px) {
            .row-cols-lg-4 .card {
                height: calc(100% - 1rem);
            }
            .row-cols-lg-4 .card-title {
                font-size: 1.1rem;
            }
            .row-cols-lg-4 .card-text {
                font-size: 0.9rem;
            }
            .row-cols-lg-4 .service-icon svg {
                width: 36px;
                height: 36px;
            }
            .row-cols-lg-4 .btn {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
        }

        .service-price {
            color: #2ecc71;
            font-weight: 600;
            transition: transform 0.3s ease;
        }

        .service-price-currency {
            color: #95a5a6;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .card:hover .service-icon svg {
            transform: scale(1.1) rotate(5deg);
            color: #2ecc71 !important;
        }

        .card:hover .service-price {
            transform: scale(1.05);
        }

        .card:hover .service-price-currency {
            color: #2ecc71;
        }

        .card:hover .btn-success {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.3);
        }

        .btn {
            border-radius: 8px;
            font-weight: 500;
            padding: 0.8rem 1.5rem;
            transition: all 0.2s ease;
        }

        .btn-success {
            background: linear-gradient(45deg, #2ecc71, #27ae60);
            border: none;
        }

        .btn-success:hover {
            background: linear-gradient(45deg, #27ae60, #219a52);
            transform: translateY(-1px);
        }

        .modal-content {
            border-radius: 16px;
        }

        .bi {
            transition: transform 0.2s ease;
        }

        .btn:hover .bi {
            transform: scale(1.1);
        }
    </style>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fs-4 fw-bold" href="/index">Barbearia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link me-3 {{ request()->is('index') ? 'active' : '' }}" href="/index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3 {{ request()->is('shop') ? 'active' : '' }}" href="/shop">Vendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3 {{ request()->is('services') ? 'active' : '' }}" href="/services">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="#">Equipe</a>
                    </li>
                </ul>

                <!-- Grupo alinhado à direita -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a href="{{ route('cart.index') }}" class="nav-link position-relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                            </svg>
                            @if(session('cart') && count(session('cart')) > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ count(session('cart')) }}
                                </span>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-success me-3" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="container text-center">
        <p>&copy; {{ date('Y') }} L.Roges . Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    @stack('scripts')
</body>
</html>