<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            max-width: 400px;
            width: 90%;
            border-radius: 12px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .login-header {
            background: #212529;
            padding: 2rem;
            text-align: center;
            color: white;
        }

        .login-body {
            padding: 2rem;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #212529;
        }

        .btn-dark {
            background: #212529;
            border: none;
            padding: 0.8rem;
        }

        .btn-dark:hover {
            background: #343a40;
        }
    </style>
</head>
<body>
    <div class="login-card bg-white">
        <div class="login-header">
            <h4 class="mb-0">Área Administrativa</h4>
            <small class="text-white-50">Faça login para continuar</small>
        </div>
        
        <div class="login-body">
            @if($errors->any())
                <div class="alert alert-danger mb-4">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" 
                           value="{{ old('email') }}" required autofocus>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-dark">
                        Entrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>