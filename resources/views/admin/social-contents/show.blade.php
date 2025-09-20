@extends('admin.layouts.app')

@section('title', 'Detail Konten Sosial')
@section('page-title', 'Detail Konten Sosial')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-primary">
        <i class="bi bi-chat-square-text me-2"></i>
        Detail Konten Sosial
    </h4>
    <div>
        <a href="{{ route('admin.social-contents.edit', $socialContent) }}" class="btn btn-warning">
            <i class="bi bi-pencil me-2"></i>
            Edit
        </a>
        <a href="{{ route('admin.social-contents.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left me-2"></i>
            Kembali
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0">Informasi Konten</h6>
            </div>
            <div class="card-body">
                <h3 class="mb-3">{{ $socialContent->title }}</h3>
                
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Deskripsi:</strong></div>
                    <div class="col-sm-9">{{ $socialContent->description }}</div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Tipe:</strong></div>
                    <div class="col-sm-9">
                        @if($socialContent->type === 'news')
                            <span class="badge bg-info">Berita</span>
                        @elseif($socialContent->type === 'announcement')
                            <span class="badge bg-warning">Pengumuman</span>
                        @else
                            <span class="badge bg-success">Aktivitas</span>
                        @endif
                    </div>
                </div>
                
                @if($socialContent->published_at)
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Tanggal Publish:</strong></div>
                    <div class="col-sm-9">
                        <i class="bi bi-calendar me-1"></i>
                        {{ $socialContent->published_at->format('d M Y H:i') }}
                    </div>
                </div>
                @endif
                
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Status:</strong></div>
                    <div class="col-sm-9">
                        @if($socialContent->is_active)
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-secondary">Nonaktif</span>
                        @endif
                        
                        @if($socialContent->is_featured)
                            <span class="badge bg-warning">Unggulan</span>
                        @endif
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Dibuat:</strong></div>
                    <div class="col-sm-9">{{ $socialContent->created_at->format('d M Y H:i') }}</div>
                </div>
                
                <hr>
                
                <h5>Konten</h5>
                <div class="content-preview">
                    {!! nl2br(e($socialContent->content)) !!}
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        @if($socialContent->image_path)
        <div class="card">
            <div class="card-header">
                <h6 class="m-0">Gambar</h6>
            </div>
            <div class="card-body text-center">
                <img src="{{ $socialContent->image_url }}" 
                     alt="{{ $socialContent->title }}" 
                     class="img-fluid rounded"
                     style="max-height: 300px;">
            </div>
        </div>
        @endif
        
        <div class="card mt-3">
            <div class="card-header">
                <h6 class="m-0">Aksi</h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.social-contents.edit', $socialContent) }}" class="btn btn-warning">
                        <i class="bi bi-pencil me-2"></i>
                        Edit Konten
                    </a>
                    
                    <form action="{{ route('admin.social-contents.destroy', $socialContent) }}" 
                          method="POST" 
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus konten ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="bi bi-trash me-2"></i>
                            Hapus Konten
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection