@extends('layouts.app')

@section('title', 'Agendar Horário')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title mb-0">Agendar Horário</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('appointments.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        
                        <div class="mb-3">
                            <label for="service_id" class="form-label">Serviço *</label>
                            <select name="service_id" id="service_id" class="form-select" required>
                                <option value="">Selecione um serviço</option>
                                @foreach($services as $service)
                                    <option value="{{ $service['id'] }}">
                                        {{ $service['name'] }} - R$ {{ $service['price'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="client_name" class="form-label">Nome Completo *</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" required value="{{ old('client_name') }}">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Telefone *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required value="{{ old('phone') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="date" class="form-label">Data *</label>
                                <input type="date" class="form-control" id="date" name="date" required 
                                       min="{{ date('Y-m-d') }}" value="{{ old('date') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="time" class="form-label">Horário *</label>
                                <select name="time" id="time" class="form-select" required>
                                    <option value="">Selecione um horário</option>
                                    @for($hour = 9; $hour <= 19; $hour++)
                                        @foreach(['00', '30'] as $minute)
                                            @if(!($hour == 19 && $minute == '30'))
                                                <option value="{{ sprintf('%02d:%s', $hour, $minute) }}"
                                                    {{ old('time') == sprintf('%02d:%s', $hour, $minute) ? 'selected' : '' }}>
                                                    {{ sprintf('%02d:%s', $hour, $minute) }}
                                                </option>
                                            @endif
                                        @endforeach
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="notes" class="form-label">Observações</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3">{{ old('notes') }}</textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Agendar Horário</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Validação do formulário
    const form = document.querySelector('.needs-validation');
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });

    // Máscara para telefone
    const phone = document.getElementById('phone');
    phone.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 11) value = value.slice(0, 11);
        if (value.length > 2) value = '(' + value.slice(0,2) + ') ' + value.slice(2);
        if (value.length > 9) value = value.slice(0,9) + '-' + value.slice(9);
        e.target.value = value;
    });
});
</script>
@endpush