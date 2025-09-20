<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class SocialContent extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'image_path',
        'type',
        'is_featured',
        'is_active',
        'published_at',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'published_at' => 'date',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', Carbon::today())
                    ->whereNotNull('published_at');
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function getImageUrlAttribute()
    {
        return $this->image_path ? asset('storage/' . $this->image_path) : null;
    }

    public function getFormattedPublishedDateAttribute()
    {
        return $this->published_at ? $this->published_at->format('d F Y') : null;
    }

    public function getExcerptAttribute()
    {
        return substr(strip_tags($this->content), 0, 150) . '...';
    }
}
