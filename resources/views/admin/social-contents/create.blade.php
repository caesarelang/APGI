@extends('admin.layouts.app')

@section('title', 'Tambah Konten Sosial')
@section('page-title', 'Tambah Konten Sosial')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0">
                    <i class="bi bi-plus-circle me-2"></i>
                    Tambah Konten Sosial Baru
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.social-contents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul <span class="text-danger">*</span></label>
                                <input type="text" 
                                       class="form-control @error('title') is-invalid @enderror" 
                                       id="title" 
                                       name="title" 
                                       value="{{ old('title') }}" 
                                       required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi Singkat <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          id="description" 
                                          name="description" 
                                          rows="3" 
                                          required>{{ old('description') }}</textarea>
                                <div class="form-text">Deskripsi singkat yang akan ditampilkan di list konten</div>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Konten Lengkap <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('content') is-invalid @enderror" 
                                          id="content" 
                                          name="content" 
                                          rows="10" 
                                          required>{{ old('content') }}</textarea>
                                <div class="form-text">Konten detail yang akan ditampilkan di halaman detail</div>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label>
                                <input type="file" 
                                       class="form-control @error('image') is-invalid @enderror" 
                                       id="image" 
                                       name="image" 
                                       accept="image/*">
                                <div class="form-text">Format: JPG, PNG, GIF. Maksimal 2MB.</div>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="type" class="form-label">Tipe Konten <span class="text-danger">*</span></label>
                                <select class="form-select @error('type') is-invalid @enderror" 
                                        id="type" 
                                        name="type" 
                                        required>
                                    <option value="">Pilih Tipe</option>
                                    <option value="news" {{ old('type') == 'news' ? 'selected' : '' }}>Berita</option>
                                    <option value="announcement" {{ old('type') == 'announcement' ? 'selected' : '' }}>Pengumuman</option>
                                    <option value="activity" {{ old('type') == 'activity' ? 'selected' : '' }}>Kegiatan</option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="published_at" class="form-label">Tanggal Publish</label>
                                <input type="date" 
                                       class="form-control @error('published_at') is-invalid @enderror" 
                                       id="published_at" 
                                       name="published_at" 
                                       value="{{ old('published_at', date('Y-m-d')) }}">
                                <div class="form-text">Kosongkan jika belum ingin dipublish</div>
                                @error('published_at')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Pengaturan</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" 
                                           type="checkbox" 
                                           id="is_featured" 
                                           name="is_featured" 
                                           value="1" 
                                           {{ old('is_featured') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_featured">
                                        Konten Unggulan
                                    </label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" 
                                           type="checkbox" 
                                           id="is_active" 
                                           name="is_active" 
                                           value="1" 
                                           {{ old('is_active', true) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">
                                        Aktif
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.social-contents.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-2"></i>
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save me-2"></i>
                            Simpan Konten
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Preview image before upload
    document.getElementById('image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                let preview = document.getElementById('image-preview');
                if (!preview) {
                    preview = document.createElement('img');
                    preview.id = 'image-preview';
                    preview.className = 'img-thumbnail mt-2';
                    preview.style.maxHeight = '200px';
                    preview.style.width = '100%';
                    preview.style.objectFit = 'cover';
                    document.getElementById('image').parentNode.appendChild(preview);
                }
                preview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    // Auto-generate title for description if empty
    document.getElementById('title').addEventListener('blur', function() {
        const descField = document.getElementById('description');
        if (!descField.value.trim() && this.value.trim()) {
            descField.value = 'Informasi terkait ' + this.value.toLowerCase();
        }
    });
</script>
@endpush