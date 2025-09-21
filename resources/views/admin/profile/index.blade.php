@extends('admin.layouts.app')

@section('title', 'Profil Admin')
@section('page-title', 'Profil Admin')

@section('content')
<div class="row">
    <div class="col-lg-4">
        <!-- Profile Picture Card -->
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <div class="mb-3">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($admin->name) }}&background=28a745&color=fff&size=150" 
                         class="rounded-circle" alt="Profile Picture" width="150" height="150">
                </div>
                <h5 class="card-title">{{ $admin->name }}</h5>
                <p class="text-muted">{{ ucfirst(str_replace('_', ' ', $admin->role)) }}</p>
                <span class="badge badge-success">
                    <i class="bi bi-check-circle me-1"></i>Aktif
                </span>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Aksi Cepat</h6>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.change-password') }}" class="btn btn-warning btn-sm mb-2 w-100">
                    <i class="bi bi-key me-2"></i>Ganti Password
                </a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary btn-sm w-100">
                    <i class="bi bi-speedometer2 me-2"></i>Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <!-- Profile Information -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Informasi Profil</h6>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                    <i class="bi bi-pencil me-1"></i>Edit Profil
                </button>
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

                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $admin->name }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $admin->email }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Role</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <span class="badge badge-primary">{{ ucfirst(str_replace('_', ' ', $admin->role)) }}</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Bergabung Sejak</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $admin->created_at->format('d M Y, H:i') }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Terakhir Diupdate</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $admin->updated_at->format('d M Y, H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ route('admin.profile.update') }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">
                        <i class="bi bi-person-gear me-2"></i>Edit Profil
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" name="name" value="{{ old('name', $admin->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" value="{{ old('email', $admin->email) }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg me-1"></i>Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Show modal if there are validation errors
@if($errors->any())
    document.addEventListener('DOMContentLoaded', function() {
        var editModal = new bootstrap.Modal(document.getElementById('editProfileModal'));
        editModal.show();
    });
@endif
</script>
@endsection