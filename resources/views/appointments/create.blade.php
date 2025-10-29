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
                            <label class="form-label">Serviços *</label>
                            <div class="row g-3">
                                @foreach($services as $service)
                                    <div class="col-md-6">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="form-check">
                                                    <input class="form-check-input service-checkbox" type="checkbox" 
                                                           name="service_ids[]" value="{{ $service->id }}" 
                                                           id="service_{{ $service->id }}"
                                                           {{ (is_array(old('service_ids')) && in_array($service->id, old('service_ids'))) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="service_{{ $service->id }}">
                                                        <h6 class="mb-1">{{ $service->name }}</h6>
                                                        <p class="text-muted small mb-0">R$ {{ number_format($service->price, 2, ',', '.') }}</p>
                                                    </label>
                                                </div>
                                                <p class="small text-muted mt-2 mb-0">{{ $service->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-3">
                                <p class="mb-0">Total: <strong id="total-price">R$ 0,00</strong></p>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Profissional *</label>
                            <div class="row g-3">
                                @foreach($professionals as $professional)
                                    <div class="col-md-6">
                                        <div class="card h-100 professional-card">
                                            <div class="card-body">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" 
                                                           name="professional_id" value="{{ $professional->id }}" 
                                                           id="professional_{{ $professional->id }}"
                                                           {{ old('professional_id') == $professional->id ? 'checked' : '' }}
                                                           required>
                                                    <label class="form-check-label w-100" for="professional_{{ $professional->id }}">
                                                        <div class="d-flex align-items-center mb-2">
                                                            @if($professional->photo_url)
                                                                <img src="{{ $professional->photo_url }}" alt="{{ $professional->name }}" 
                                                                     class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                                            @else
                                                                <div class="rounded-circle bg-secondary me-2 d-flex align-items-center justify-content-center" 
                                                                     style="width: 40px; height: 40px;">
                                                                    <i class="fas fa-user text-white"></i>
                                                                </div>
                                                            @endif
                                                            <div>
                                                                <h6 class="mb-0">{{ $professional->name }}</h6>
                                                                <small class="text-muted">{{ $professional->role }}</small>
                                                            </div>
                                                        </div>
                                                        <p class="small text-muted mb-0">{{ $professional->bio }}</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
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

@push('styles')
<style>
.professional-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    cursor: pointer;
}

.professional-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

.professional-card .form-check-input {
    position: absolute;
    top: 1rem;
    right: 1rem;
}

.professional-card .form-check-label {
    cursor: pointer;
}

.professional-card:has(.form-check-input:checked) {
    border-color: var(--bs-primary);
    box-shadow: 0 0 0 1px var(--bs-primary);
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Validação do formulário
    const form = document.querySelector('.needs-validation');
    form.addEventListener('submit', function(event) {
        // Verifica se pelo menos um serviço foi selecionado
        const serviceCheckboxes = document.querySelectorAll('.service-checkbox:checked');
        if (serviceCheckboxes.length === 0) {
            event.preventDefault();
            alert('Por favor, selecione pelo menos um serviço.');
            return;
        }

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
ago
    // Cálculo do preço total
    const serviceCheckboxes = document.querySelectorAll('.service-checkbox');
    const servicePrices = {
        @foreach($services as $service)
            {{ $service->id }}: {{ $service->price }},
        @endforeach
    };

    function updateTotal() {
        let total = 0;
        serviceCheckboxes.forEach(checkbox => {
            if (checkbox.checked) {
                total += servicePrices[checkbox.value];
            }
        });
        document.getElementById('total-price').textContent = 
            'R$ ' + total.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
    }

    serviceCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateTotal);
    });

    // Calcula o total inicial (para checkboxes marcados por validação)
    updateTotal();

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