@extends('admin.layouts.app')

@section('title', 'Event')
@section('page-title', 'Manajemen Event')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-primary">
        <i class="bi bi-calendar-event me-2"></i>
        Event
    </h4>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle me-2"></i>
        Tambah Event
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h6 class="m-0">Daftar Event</h6>
    </div>
    <div class="card-body">
        @if($events->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td>
                                    @if($event->image_path)
                                        <img src="{{ $event->image_url }}" 
                                             alt="{{ $event->title }}" 
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
                                    <h6 class="mb-1">{{ $event->title }}</h6>
                                    <small class="text-muted">{{ Str::limit($event->description, 50) }}</small>
                                </td>
                                <td>
                                    <div class="text-sm">
                                        <i class="bi bi-calendar me-1"></i>
                                        {{ $event->formatted_date }}
                                    </div>
                                    @if($event->event_time)
                                        <div class="text-sm text-muted">
                                            <i class="bi bi-clock me-1"></i>
                                            {{ $event->formatted_time }}
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    @if($event->location)
                                        <small class="text-muted">
                                            <i class="bi bi-geo-alt me-1"></i>
                                            {{ $event->location }}
                                        </small>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    @if($event->is_active)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary">Nonaktif</span>
                                    @endif
                                    
                                    @if($event->is_featured)
                                        <span class="badge bg-warning">Unggulan</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.events.show', $event) }}" 
                                           class="btn btn-outline-info btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.events.edit', $event) }}" 
                                           class="btn btn-outline-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.events.destroy', $event) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus event ini?')">
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
                {{ $events->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="bi bi-calendar-event text-muted" style="font-size: 4rem;"></i>
                <h5 class="text-muted mt-3">Belum ada event</h5>
                <p class="text-muted">Mulai dengan menambahkan event pertama Anda.</p>
                <a href="{{ route('admin.events.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle me-2"></i>
                    Tambah Event
                </a>
            </div>
        @endif
    </div>
</div>
@endsection