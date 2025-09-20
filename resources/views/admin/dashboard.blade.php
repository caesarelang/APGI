@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<!-- Statistics Cards - 4 main counts -->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary h-100 py-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Galeri</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $stats['galleries'] }}</div>
                        <small class="text-muted">Foto tersimpan</small>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-images text-primary" style="font-size: 3em;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info h-100 py-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Total Event</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $stats['events'] }}</div>
                        <small class="text-muted">Kegiatan terdaftar</small>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-calendar-event text-info" style="font-size: 3em;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success h-100 py-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Konten Sosial</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $stats['social_contents'] }}</div>
                        <small class="text-muted">Artikel & aktivitas</small>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-chat-square-text text-success" style="font-size: 3em;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning h-100 py-3">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total News</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $stats['news'] }}</div>
                        <small class="text-muted">Berita terpublish</small>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-newspaper text-warning" style="font-size: 3em;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Recent Events -->
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Event Terbaru</h6>
                <a href="{{ route('admin.events.index') }}" class="btn btn-sm btn-primary">
                    <i class="bi bi-eye me-1"></i>
                    Lihat Semua
                </a>
            </div>
            <div class="card-body">
                @if($recent_events->count() > 0)
                    @foreach($recent_events as $event)
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 40px; height: 40px;">
                                    <i class="bi bi-calendar-event text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">{{ Str::limit($event->title, 30) }}</h6>
                                <small class="text-muted">
                                    <i class="bi bi-calendar me-1"></i>
                                    {{ $event->formatted_date }}
                                </small>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-muted text-center mb-0">Belum ada event terbaru</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Recent Social Content -->
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-success">Konten Sosial Terbaru</h6>
                <a href="{{ route('admin.social-contents.index') }}" class="btn btn-sm btn-success">
                    <i class="bi bi-eye me-1"></i>
                    Lihat Semua
                </a>
            </div>
            <div class="card-body">
                @if($recent_social->count() > 0)
                    @foreach($recent_social as $content)
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <div class="bg-success rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 40px; height: 40px;">
                                    <i class="bi bi-chat-square-text text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">{{ Str::limit($content->title, 30) }}</h6>
                                <small class="text-muted">
                                    <span class="badge bg-secondary">{{ ucfirst($content->type) }}</span>
                                </small>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-muted text-center mb-0">Belum ada konten sosial terbaru</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Recent News -->
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-warning">News Terbaru</h6>
                <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-warning">
                    <i class="bi bi-eye me-1"></i>
                    Lihat Semua
                </a>
            </div>
            <div class="card-body">
                @if($recent_news->count() > 0)
                    @foreach($recent_news as $news)
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 40px; height: 40px;">
                                    <i class="bi bi-newspaper text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">{{ Str::limit($news->title, 30) }}</h6>
                                <small class="text-muted">
                                    @if($news->published_at)
                                        <i class="bi bi-calendar me-1"></i>
                                        {{ $news->formatted_published_date }}
                                    @else
                                        <span class="badge bg-secondary">Draft</span>
                                    @endif
                                </small>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-muted text-center mb-0">Belum ada news terbaru</p>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary w-100">
                            <i class="bi bi-plus-circle me-2"></i>
                            Tambah Galeri
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('admin.events.create') }}" class="btn btn-info w-100">
                            <i class="bi bi-plus-circle me-2"></i>
                            Tambah Event
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('admin.social-contents.create') }}" class="btn btn-success w-100">
                            <i class="bi bi-plus-circle me-2"></i>
                            Tambah Konten
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('admin.news.create') }}" class="btn btn-warning w-100">
                            <i class="bi bi-plus-circle me-2"></i>
                            Tambah News
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="{{ route('home') }}" target="_blank" class="btn btn-secondary w-100">
                            <i class="bi bi-eye me-2"></i>
                            Lihat Website
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary w-100">
                            <i class="bi bi-arrow-clockwise me-2"></i>
                            Refresh Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .border-left-primary {
        border-left: 4px solid #007bff !important;
    }
    .border-left-success {
        border-left: 4px solid #28a745 !important;
    }
    .border-left-info {
        border-left: 4px solid #17a2b8 !important;
    }
    .border-left-warning {
        border-left: 4px solid #ffc107 !important;
    }
    .border-left-secondary {
        border-left: 4px solid #6c757d !important;
    }
</style>
@endpush