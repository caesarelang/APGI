@extends('admin.layouts.app')

@section('title', 'Kelola News')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Kelola News</h2>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Tambah News
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="card">
    <div class="card-body">
        @if($news->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 80px;">Gambar</th>
                            <th style="width: 40%;">Judul</th>
                            <th style="width: 15%;">Author</th>
                            <th style="width: 15%;">Publish</th>
                            <th style="width: 12%;">Status</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $article)
                        <tr>
                            <td>
                                @if($article->image_path)
                                    <img src="{{ asset('storage/app/public/' . $article->image_path) }}" 
                                         alt="{{ $article->title }}" 
                                         class="img-thumbnail" 
                                         style="width: 60px; height: 60px; object-fit: cover;">
                                @else
                                    <div class="bg-light d-flex align-items-center justify-content-center" 
                                         style="width: 60px; height: 60px;">
                                        <i class="fas fa-image text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <strong>{{ Str::limit($article->title, 60) }}</strong>
                                <br>
                                <small class="text-muted">{{ Str::limit($article->excerpt, 80) }}</small>
                            </td>
                            <td>{{ $article->author ?? '-' }}</td>
                            <td>
                                @if($article->published_at)
                                    <small>{{ $article->formatted_published_date }}</small>
                                    <br><small class="text-muted">{{ $article->published_at->format('H:i') }}</small>
                                @else
                                    <span class="text-muted">Draft</span>
                                @endif
                            </td>
                            <td>
                                @if($article->is_active)
                                    <span class="badge bg-success mb-1">Aktif</span>
                                @else
                                    <span class="badge bg-secondary mb-1">Nonaktif</span>
                                @endif
                                
                                @if($article->is_featured)
                                    <br><span class="badge bg-warning">Featured</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex flex-column gap-1">
                                    <a href="{{ route('admin.news.show', $article) }}" 
                                       class="btn btn-sm btn-outline-info"
                                       title="Lihat">
                                        <i class="fas fa-eye"></i> Lihat
                                    </a>
                                    <a href="{{ route('admin.news.edit', $article) }}" 
                                       class="btn btn-sm btn-outline-warning"
                                       title="Edit">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.news.destroy', $article) }}" 
                                          method="POST" 
                                          onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-sm btn-outline-danger"
                                                title="Hapus">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            {{ $news->links() }}
        @else
            <div class="text-center py-5">
                <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">Belum ada berita</h5>
                <p class="text-muted">Klik tombol "Tambah News" untuk menambah berita pertama</p>
            </div>
        @endif
    </div>
</div>
@endsection