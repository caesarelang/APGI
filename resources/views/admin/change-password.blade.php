@extends('admin.layouts.app')

@section('title', 'Ganti Password')
@section('page-title', 'Ganti Password')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow">
            <div class="card-header py-3">
                <div class="d-flex align-items-center">
                    <i class="bi bi-key text-warning me-2" style="font-size: 1.5rem;"></i>
                    <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
                </div>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <!-- Password Requirements Info -->
                <div class="alert alert-info">
                    <i class="bi bi-info-circle me-2"></i>
                    <strong>Persyaratan Password:</strong>
                    <ul class="mb-0 mt-2">
                        <li>Minimal 8 karakter</li>
                        <li>Mengandung huruf besar dan kecil</li>
                        <li>Mengandung angka</li>
                    </ul>
                </div>

                <form method="POST" action="{{ route('admin.change-password.post') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="current_password">
                            <i class="bi bi-lock me-1"></i>Password Saat Ini
                        </label>
                        <div class="input-group">
                            <input type="password" 
                                   class="form-control @error('current_password') is-invalid @enderror" 
                                   id="current_password" 
                                   name="current_password" 
                                   required
                                   placeholder="Masukkan password saat ini">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('current_password')">
                                    <i class="bi bi-eye" id="current_password_icon"></i>
                                </button>
                            </div>
                        </div>
                        @error('current_password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">
                            <i class="bi bi-shield-lock me-1"></i>Password Baru
                        </label>
                        <div class="input-group">
                            <input type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   id="password" 
                                   name="password" 
                                   required
                                   placeholder="Masukkan password baru">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('password')">
                                    <i class="bi bi-eye" id="password_icon"></i>
                                </button>
                            </div>
                        </div>
                        @error('password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        
                        <!-- Password Strength Indicator -->
                        <div class="mt-2">
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" id="password-strength-bar" role="progressbar" style="width: 0%"></div>
                            </div>
                            <small id="password-strength-text" class="text-muted">Kekuatan password</small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">
                            <i class="bi bi-shield-check me-1"></i>Konfirmasi Password Baru
                        </label>
                        <div class="input-group">
                            <input type="password" 
                                   class="form-control" 
                                   id="password_confirmation" 
                                   name="password_confirmation" 
                                   required
                                   placeholder="Ulangi password baru">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('password_confirmation')">
                                    <i class="bi bi-eye" id="password_confirmation_icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.profile') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-1"></i>Kembali
                        </a>
                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-key me-1"></i>Ganti Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const icon = document.getElementById(fieldId + '_icon');
    
    if (field.type === 'password') {
        field.type = 'text';
        icon.className = 'bi bi-eye-slash';
    } else {
        field.type = 'password';
        icon.className = 'bi bi-eye';
    }
}

// Password strength checker
document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    const strengthBar = document.getElementById('password-strength-bar');
    const strengthText = document.getElementById('password-strength-text');
    
    let strength = 0;
    let strengthLabel = '';
    let barColor = '';
    
    // Check password criteria
    if (password.length >= 8) strength += 30;
    if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength += 30;
    if (/\d/.test(password)) strength += 40;
    
    // Set strength label and color
    if (strength === 0) {
        strengthLabel = 'Sangat Lemah';
        barColor = 'bg-danger';
    } else if (strength <= 30) {
        strengthLabel = 'Lemah';
        barColor = 'bg-danger';
    } else if (strength <= 60) {
        strengthLabel = 'Cukup';
        barColor = 'bg-warning';
    } else if (strength <= 90) {
        strengthLabel = 'Kuat';
        barColor = 'bg-info';
    } else {
        strengthLabel = 'Sangat Kuat';
        barColor = 'bg-success';
    }
    
    // Update UI
    strengthBar.style.width = strength + '%';
    strengthBar.className = 'progress-bar ' + barColor;
    strengthText.textContent = strengthLabel;
    strengthText.className = strength <= 60 ? 'text-danger' : 'text-success';
});
</script>
@endsection