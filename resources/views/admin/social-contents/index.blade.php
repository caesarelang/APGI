@extends('admin.layouts.app')

@section('title', 'Konten Sosial')
@section('page-title', 'Manajemen Konten Sosial')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-primary">
        <i class="bi bi-newspaper me-2"></i>
        Konten Sosial
    </h4>
    <a href="{{ route('admin.social-contents.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle me-2"></i>
        Tambah Konten
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h6 class="m-0">Daftar Konten Sosial</h6>
    </div>
    <div class="card-body">
        @if($contents->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Tipe</th>
                            <th>Tanggal Publish</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contents as $content)
                            <tr>
                                <td>
                                    @if($content->image_path)
                                        <img src="{{ $content->image_url }}" 
                                             alt="{{ $content->title }}" 
                                             class="img-thumbnail" 
                                             style="width: 60px; height: 60px; object-fit: cover;">
                                    @else
                                        <div class="bg-light d-flex align-items-center justify-content-center" 
                                             style="width: 60px; height: 60px;">
                                            <i class="bi bi-image text-muted"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <h6 class="mb-1">{{ $content->title }}</h6>
                                    <small class="text-muted">{{ Str::limit($content->description, 60) }}</small>
                                </td>
                                <td>
                                    @switch($content->type)
                                        @case('news')
                                            <span class="badge bg-primary">Berita</span>
                                            @break
                                        @case('announcement') 
                                            <span class="badge bg-warning">Pengumuman</span>
                                            @break
                                        @case('activity')
                                            <span class="badge bg-info">Kegiatan</span>
                                            @break
                                        @default
                                            <span class="badge bg-secondary">{{ ucfirst($content->type) }}</span>
                                    @endswitch
                                </td>
                                <td>
                                    @if($content->published_at)
                                        <div class="text-sm">
                                            <i class="bi bi-calendar me-1"></i>
                                            {{ $content->formatted_published_date }}
                                        </div>
                                    @else
                                        <span class="text-muted">Belum dipublish</span>
                                    @endif
                                </td>
                                <td>
                                    @if($content->is_active)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary">Nonaktif</span>
                                    @endif
                                    
                                    @if($content->is_featured)
                                        <span class="badge bg-warning">Unggulan</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.social-contents.show', $content) }}" 
                                           class="btn btn-outline-info btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.social-contents.edit', $content) }}" 
                                           class="btn btn-outline-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.social-contents.destroy', $content) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus konten ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $contents->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="bi bi-newspaper text-muted" style="font-size: 4rem;"></i>
                <h5 class="text-muted mt-3">Belum ada konten sosial</h5>
                <p class="text-muted">Mulai dengan menambahkan konten pertama Anda.</p>
                <a href="{{ route('admin.social-contents.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle me-2"></i>
                    Tambah Konten
                </a>
            </div>
        @endif
    </div>
</div>
@endsection