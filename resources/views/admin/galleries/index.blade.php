@extends('admin.layouts.app')

@section('title', 'Galeri')
@section('page-title', 'Manajemen Galeri')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-primary">
        <i class="bi bi-images me-2"></i>
        Galeri
    </h4>
    <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle me-2"></i>
        Tambah Galeri
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h6 class="m-0">Daftar Galeri</h6>
    </div>
    <div class="card-body">
        @if($galleries->count() > 0)
            <div class="row">
                @foreach($galleries as $gallery)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card h-100">
                            <div class="position-relative">
                                <img src="{{ $gallery->image_url }}" 
                                     class="card-img-top" 
                                     alt="{{ $gallery->alt_text }}"
                                     style="height: 200px; object-fit: cover;">
                                
                                <!-- Status Badge -->
                                <div class="position-absolute top-0 end-0 m-2">
                                    @if($gallery->is_active)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary">Nonaktif</span>
                                    @endif
                                </div>
                                
                                <!-- Category Badge -->
                                <div class="position-absolute top-0 start-0 m-2">
                                    <span class="badge bg-primary">{{ $gallery->category_label }}</span>
                                </div>
                            </div>
                            
                            <div class="card-body d-flex flex-column">
                                <h6 class="card-title">{{ $gallery->title }}</h6>
                                @if($gallery->description)
                                    <p class="card-text text-muted small flex-grow-1">
                                        {{ Str::limit($gallery->description, 80) }}
                                    </p>
                                @endif
                                
                                <div class="text-muted small mb-2">
                                    <i class="bi bi-sort-numeric-down me-1"></i>
                                    Urutan: {{ $gallery->sort_order }}
                                </div>
                                
                                <div class="mt-auto">
                                    <div class="btn-group w-100" role="group">
                                        <a href="{{ route('admin.galleries.show', $gallery) }}" 
                                           class="btn btn-outline-info btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.galleries.edit', $gallery) }}" 
                                           class="btn btn-outline-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.galleries.destroy', $gallery) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $galleries->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="bi bi-images text-muted" style="font-size: 4rem;"></i>
                <h5 class="text-muted mt-3">Belum ada galeri</h5>
                <p class="text-muted">Mulai dengan menambahkan galeri pertama Anda.</p>
                <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle me-2"></i>
                    Tambah Galeri
                </a>
            </div>
        @endif
    </div>
</div>
@endsection