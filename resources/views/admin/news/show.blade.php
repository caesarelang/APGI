@extends('admin.layouts.app')

@section('title', 'Detail Berita')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Detail Berita</h2>
    <div>
        <a href="{{ route('admin.news.edit', $news) }}" class="btn btn-warning">
            <i class="fas fa-edit"></i> Edit
        </a>
        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0">Informasi Berita</h6>
            </div>
            <div class="card-body">
                <h3 class="mb-3">{{ $news->title }}</h3>
                
                @if($news->excerpt)
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Excerpt:</strong></div>
                    <div class="col-sm-9">{{ $news->excerpt }}</div>
                </div>
                @endif
                
                @if($news->author)
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Author:</strong></div>
                    <div class="col-sm-9">{{ $news->author }}</div>
                </div>
                @endif
                
                @if($news->published_at)
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Tanggal Publish:</strong></div>
                    <div class="col-sm-9">
                        <i class="fas fa-calendar"></i>
                        {{ $news->published_at->format('d M Y H:i') }}
                    </div>
                </div>
                @endif
                
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Status:</strong></div>
                    <div class="col-sm-9">
                        @if($news->is_active)
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-secondary">Nonaktif</span>
                        @endif
                        
                        @if($news->is_featured)
                            <span class="badge bg-warning">Unggulan</span>
                        @endif
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Slug:</strong></div>
                    <div class="col-sm-9"><code>{{ $news->slug }}</code></div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Dibuat:</strong></div>
                    <div class="col-sm-9">{{ $news->created_at->format('d M Y H:i') }}</div>
                </div>
                
                @if($news->meta_title || $news->meta_description)
                <hr>
                <h5>SEO Meta</h5>
                @if($news->meta_title)
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Meta Title:</strong></div>
                    <div class="col-sm-9">{{ $news->meta_title }}</div>
                </div>
                @endif
                @if($news->meta_description)
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Meta Description:</strong></div>
                    <div class="col-sm-9">{{ $news->meta_description }}</div>
                </div>
                @endif
                @endif
                
                <hr>
                
                <h5>Konten Berita</h5>
                <div class="content-preview">
                    {!! nl2br(e($news->content)) !!}
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        @if($news->image_path)
        <div class="card">
            <div class="card-header">
                <h6 class="m-0">Gambar Featured</h6>
            </div>
            <div class="card-body text-center">
                <img src="{{ asset('storage/' . $news->image_path) }}" 
                     alt="{{ $news->title }}" 
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
                    <a href="{{ route('admin.news.edit', $news) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Edit Berita
                    </a>
                    
                    <form action="{{ route('admin.news.destroy', $news) }}" 
                          method="POST" 
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash"></i> Hapus Berita
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection