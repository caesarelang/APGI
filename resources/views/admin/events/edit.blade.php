@extends('admin.layouts.app')

@section('title', 'Edit Event')
@section('page-title', 'Edit Event')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="text-primary">
        <i class="bi bi-pencil me-2"></i>
        Edit Event
    </h4>
    <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left me-2"></i>
        Kembali
    </a>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0">Form Edit Event</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Event <span class="text-danger">*</span></label>
                        <input type="text" 
                               class="form-control @error('title') is-invalid @enderror" 
                               id="title" 
                               name="title" 
                               value="{{ old('title', $event->title) }}" 
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
                                  required>{{ old('description', $event->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Deskripsi singkat yang akan ditampilkan di daftar event</div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="event_date" class="form-label">Tanggal Event <span class="text-danger">*</span></label>
                                <input type="date" 
                                       class="form-control @error('event_date') is-invalid @enderror" 
                                       id="event_date" 
                                       name="event_date" 
                                       value="{{ old('event_date', $event->event_date ? $event->event_date->format('Y-m-d') : '') }}" 
                                       required>
                                @error('event_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="event_time" class="form-label">Waktu Event</label>
                                <input type="time" 
                                       class="form-control @error('event_time') is-invalid @enderror" 
                                       id="event_time" 
                                       name="event_time" 
                                       value="{{ old('event_time', $event->event_time) }}">
                                @error('event_time')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="location" class="form-label">Lokasi</label>
                                <input type="text" 
                                       class="form-control @error('location') is-invalid @enderror" 
                                       id="location" 
                                       name="location" 
                                       value="{{ old('location', $event->location) }}">
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="organizer" class="form-label">Penyelenggara</label>
                                <input type="text" 
                                       class="form-control @error('organizer') is-invalid @enderror" 
                                       id="organizer" 
                                       name="organizer" 
                                       value="{{ old('organizer', $event->organizer) }}">
                                @error('organizer')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Konten Event <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                  id="content" 
                                  name="content" 
                                  rows="10" 
                                  required>{{ old('content', $event->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Konten lengkap event dengan detail informasi</div>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Event</label>
                        <input type="file" 
                               class="form-control @error('image') is-invalid @enderror" 
                               id="image" 
                               name="image" 
                               accept="image/*">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Format: JPEG, PNG, JPG, GIF. Maksimal 2MB</div>
                        
                        @if($event->image_path)
                            <div class="mt-2">
                                <small class="text-muted">Gambar saat ini:</small><br>
                                <img src="{{ $event->image_url }}" 
                                     alt="Current image" 
                                     class="img-thumbnail mt-1" 
                                     style="max-width: 200px;">
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   id="is_featured" 
                                   name="is_featured" 
                                   value="1"
                                   {{ old('is_featured', $event->is_featured) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_featured">
                                Event Unggulan
                            </label>
                        </div>
                        <div class="form-text">Event unggulan akan ditampilkan lebih menonjol</div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" 
                                   type="checkbox" 
                                   id="is_active" 
                                   name="is_active" 
                                   value="1"
                                   {{ old('is_active', $event->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                Event Aktif
                            </label>
                        </div>
                        <div class="form-text">Event tidak aktif tidak akan ditampilkan di website</div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle me-2"></i>
                            Update Event
                        </button>
                        <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
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
                <h6 class="m-0">Tips</h6>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Pastikan judul event menarik dan informatif</small>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Gunakan gambar berkualitas tinggi untuk menarik perhatian</small>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Sertakan detail waktu dan lokasi yang jelas</small>
                    </li>
                    <li class="mb-2">
                        <i class="bi bi-lightbulb text-warning me-2"></i>
                        <small>Aktifkan "Event Unggulan" untuk event penting</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection