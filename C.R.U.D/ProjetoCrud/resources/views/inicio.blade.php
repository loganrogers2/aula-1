@extends('layout')

@section('title', 'Festival de Música 2025')

@section('content')

 <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center">
                            <h3>Cadastre-se para receber novidades</h3>
                        </div>
                        <div class="card-body">
                            <form action="/musica" method="POST">
                                 @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="login" class="form-label">login</label>
                                        <input type="text" class="form-control" id="login" name="login" required>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="senha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senha" name="senha" required>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" >
                                        <i class="fas fa-paper-plane me-2"></i>Entrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection