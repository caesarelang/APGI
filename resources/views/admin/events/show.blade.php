@extends('admin.layouts.app')

@section('title', 'Detail Event')
@section('page-title', 'Detail Event')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-primary">
        <i class="bi bi-calendar-event me-2"></i>
        Detail Event
    </h4>
    <div>
        <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-warning">
            <i class="bi bi-pencil me-2"></i>
            Edit
        </a>
        <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left me-2"></i>
            Kembali
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0">Informasi Event</h6>
            </div>
            <div class="card-body">
                <h3 class="mb-3">{{ $event->title }}</h3>
                
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Deskripsi:</strong></div>
                    <div class="col-sm-9">{{ $event->description }}</div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Tanggal:</strong></div>
                    <div class="col-sm-9">
                        <i class="bi bi-calendar me-1"></i>
                        {{ $event->formatted_date }}
                        @if($event->event_time)
                            <br>
                            <i class="bi bi-clock me-1"></i>
                            {{ $event->formatted_time }}
                        @endif
                    </div>
                </div>
                
                @if($event->location)
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Lokasi:</strong></div>
                    <div class="col-sm-9">
                        <i class="bi bi-geo-alt me-1"></i>
                        {{ $event->location }}
                    </div>
                </div>
                @endif
                
                @if($event->organizer)
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Penyelenggara:</strong></div>
                    <div class="col-sm-9">{{ $event->organizer }}</div>
                </div>
                @endif
                
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Status:</strong></div>
                    <div class="col-sm-9">
                        @if($event->is_active)
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-secondary">Nonaktif</span>
                        @endif
                        
                        @if($event->is_featured)
                            <span class="badge bg-warning">Unggulan</span>
                        @endif
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-sm-3"><strong>Dibuat:</strong></div>
                    <div class="col-sm-9">{{ $event->created_at->format('d M Y H:i') }}</div>
                </div>
                
                <hr>
                
                <h5>Konten Event</h5>
                <div class="content-preview">
                    {!! nl2br(e($event->content)) !!}
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        @if($event->image_path)
        <div class="card">
            <div class="card-header">
                <h6 class="m-0">Gambar Event</h6>
            </div>
            <div class="card-body text-center">
                <img src="{{ $event->image_url }}" 
                     alt="{{ $event->title }}" 
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
                    <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-warning">
                        <i class="bi bi-pencil me-2"></i>
                        Edit Event
                    </a>
                    
                    <form action="{{ route('admin.events.destroy', $event) }}" 
                          method="POST" 
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus event ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="bi bi-trash me-2"></i>
                            Hapus Event
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection