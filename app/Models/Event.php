<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'image_path',
        'event_date',
        'event_time',
        'location',
        'organizer',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'event_date' => 'date',
        'event_time' => 'datetime:H:i',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeUpcoming($query)
    {
        return $query->where('event_date', '>=', Carbon::today());
    }

    public function scopePast($query)
    {
        return $query->where('event_date', '<', Carbon::today());
    }

    public function getImageUrlAttribute()
    {
        return $this->image_path ? asset('storage/' . $this->image_path) : null;
    }

    public function getFormattedDateAttribute()
    {
        return $this->event_date->format('d F Y');
    }

    public function getFormattedTimeAttribute()
    {
        return $this->event_time ? $this->event_time->format('H:i') : null;
    }
}
