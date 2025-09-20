@extends('admin.layouts.app')

@section('title', 'Edit Konten Sosial')
@section('page-title', 'Edit Konten Sosial')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-primary">
        <i class="bi bi-pencil me-2"></i>
        Edit Konten Sosial
    </h4>
    <a href="{{ route('admin.social-contents.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left me-2"></i>
        Kembali
    </a>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0">Form Edit Konten Sosial</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.social-contents.update', $socialContent) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul <span class="text-danger">*</span></label>
                        <input type="text" 
                               class="form-control @error('title') is-invalid @enderror" 
                               id="title" 
                               name="title" 
                               value="{{ old('title', $socialContent->title) }}" 
                               required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipe Konten <span class="text-danger">*</span></label>
                        <select class="form-select @error('type') is-invalid @enderror" 
                                id="type" 
                                name="type" 
                                required>
                            <option value="">Pilih Tipe Konten</option>
                            <option value="news" {{ old('type', $socialContent->type) === 'news' ? 'selected' : '' }}>Berita</option>
                            <option value="announcement" {{ old('type', $socialContent->type) === 'announcement' ? 'selected' : '' }}>Pengumuman</option>
                            <option value="activity" {{ old('type', $socialContent->type) === 'activity' ? 'selected' : '' }}>Aktivitas</option>
                        </select>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Singkat <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" 
                                  name="description" 
                                  rows="3" 
                                  required>{{ old('description', $socialContent->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Deskripsi singkat yang akan ditampilkan di daftar konten</div>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Konten <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                  id="content" 
                                  name="content" 
                                  rows="10" 
                                  required>{{ old('content', $socialContent->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Konten lengkap dengan detail informasi</div>
                    </div>

                    <div class="mb-3">
                        <label for="published_at" class="form-label">Tanggal Publish</label>
                        <input type="datetime-local" 
                               class="form-control @error('published_at') is-invalid @enderror" 
                               id="published_at" 
                               name="published_at" 
                               value="{{ old('published_at', $socialContent->published_at ? $socialContent->published_at->format('Y-m-d\TH:i') : '') }}">
                        @error('published_at')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Kosongkan untuk publish sekarang</div>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" 
                               class="form-control @error('image') is-invalid @enderror" 
                               id="image" 
                               name="image" 
                               accept="image/*">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Format: JPEG, PNG, JPG, GIF. Maksimal 2MB</div>
                        
                        @if($socialContent->image_path)
                            <div class="mt-2">
                                <small class="text-muted">Gambar saat ini:</small><br>
                                <img src="{{ $socialContent->image_url }}" 
                                     alt="Current image" 
                                     class="img-thumbnail mt-1" 
                                     style="max-width: 200px;">
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   id="is_featured" 
                                   name="is_featured" 
                                   value="1"
                                   {{ old('is_featured', $socialContent->is_featured) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_featured">
                                Konten Unggulan
                            </label>
                        </div>
                        <div class="form-text">Konten unggulan akan ditampilkan lebih menonjol</div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   id="is_active" 
                                   name="is_active" 
                                   value="1"
                                   {{ old('is_active', $socialContent->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                Konten Aktif
                            </label>
                        </div>
                        <div class="form-text">Konten tidak aktif tidak akan ditampilkan di website</div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle me-2"></i>
                            Update Konten
                        </button>
                        <a href="{{ route('admin.social-contents.index') }}" class="btn btn-secondary">
                            <i class="bi bi-x-circle me-2"></i>
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0">Tips</h6>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Pilih tipe konten yang sesuai untuk kategorisasi</small>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Gunakan gambar yang relevan dengan konten</small>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Atur tanggal publish untuk konten terjadwal</small>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Aktifkan "Konten Unggulan" untuk konten penting</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection