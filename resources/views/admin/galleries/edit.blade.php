@extends('admin.layouts.app')

@section('title', 'Edit Galeri')
@section('page-title', 'Edit Galeri')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-primary">
        <i class="bi bi-pencil me-2"></i>
        Edit Galeri
    </h4>
    <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left me-2"></i>
        Kembali
    </a>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0">Form Edit Galeri</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul <span class="text-danger">*</span></label>
                        <input type="text" 
                               class="form-control @error('title') is-invalid @enderror" 
                               id="title" 
                               name="title" 
                               value="{{ old('title', $gallery->title) }}" 
                               required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori <span class="text-danger">*</span></label>
                        <select class="form-select @error('category') is-invalid @enderror" 
                                id="category" 
                                name="category" 
                                required>
                            <option value="">Pilih Kategori</option>
                            <option value="rapat" {{ old('category', $gallery->category) == 'rapat' ? 'selected' : '' }}>Rapat</option>
                            <option value="seminar" {{ old('category', $gallery->category) == 'seminar' ? 'selected' : '' }}>Seminar</option>
                            <option value="pelatihan" {{ old('category', $gallery->category) == 'pelatihan' ? 'selected' : '' }}>Pelatihan</option>
                            <option value="lainnya" {{ old('category', $gallery->category) == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" 
                                  name="description" 
                                  rows="3">{{ old('description', $gallery->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Deskripsi singkat tentang gambar</div>
                    </div>

                    <div class="mb-3">
                        <label for="alt_text" class="form-label">Alt Text</label>
                        <input type="text" 
                               class="form-control @error('alt_text') is-invalid @enderror" 
                               id="alt_text" 
                               name="alt_text" 
                               value="{{ old('alt_text', $gallery->alt_text) }}">
                        @error('alt_text')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Teks alternatif untuk SEO dan aksesibilitas</div>
                    </div>

                    <div class="mb-3">
                        <label for="sort_order" class="form-label">Urutan</label>
                        <input type="number" 
                               class="form-control @error('sort_order') is-invalid @enderror" 
                               id="sort_order" 
                               name="sort_order" 
                               value="{{ old('sort_order', $gallery->sort_order) }}" 
                               min="0">
                        @error('sort_order')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Urutan tampil gambar (angka kecil tampil lebih dulu)</div>
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
                        <div class="form-text">Format: JPEG, PNG, JPG, GIF. Maksimal 2MB. Kosongkan jika tidak ingin mengubah gambar.</div>
                        
                        <div class="mt-2">
                            <small class="text-muted">Gambar saat ini:</small><br>
                            <img src="{{ $gallery->image_url }}" 
                                 alt="{{ $gallery->alt_text ?: $gallery->title }}" 
                                 class="img-thumbnail mt-1" 
                                 style="max-width: 200px;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   id="is_active" 
                                   name="is_active" 
                                   value="1"
                                   {{ old('is_active', $gallery->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                Galeri Aktif
                            </label>
                        </div>
                        <div class="form-text">Galeri tidak aktif tidak akan ditampilkan di website</div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle me-2"></i>
                            Update Galeri
                        </button>
                        <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">
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
                <h6 class="m-0">Preview Gambar</h6>
            </div>
            <div class="card-body text-center">
                <img src="{{ $gallery->image_url }}" 
                     alt="{{ $gallery->alt_text ?: $gallery->title }}" 
                     class="img-fluid rounded"
                     style="max-height: 300px;">
            </div>
        </div>
        
        <div class="card mt-3">
            <div class="card-header">
                <h6 class="m-0">Tips</h6>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Gunakan gambar berkualitas tinggi untuk hasil terbaik</small>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Alt text membantu SEO dan aksesibilitas</small>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Atur urutan untuk mengontrol tampilan galeri</small>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Nonaktifkan gambar yang tidak ingin ditampilkan</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection