<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'image_path',
        'author',
        'published_at',
        'is_featured',
        'is_active',
        'meta_title',
        'meta_description',
        'slug',
        'link'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    // Auto generate slug from title
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }
        });
    }

    // Scope for active news
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for published news
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    // Scope for featured news
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Get formatted published date
    public function getFormattedPublishedDateAttribute()
    {
        return $this->published_at ? $this->published_at->format('d M Y') : null;
    }

    // Get excerpt or truncated content
    public function getExcerptAttribute($value)
    {
        if ($value) {
            return $value;
        }
        
        return Str::limit(strip_tags($this->content), 150);
    }

    // Get image URL with fallback for hosting
    public function getImageUrlAttribute()
    {
        if (!$this->image_path) {
            return null;
        }

        // Try different paths for hosting compatibility
        $paths = [
            asset('storage/' . $this->image_path),                    // Standard Laravel path
            asset('storage/app/public/' . $this->image_path),        // Direct storage path
            url('storage/' . $this->image_path),                     // URL helper
            url('storage/app/public/' . $this->image_path),          // Direct URL path
        ];

        return $paths[0]; // Default to Laravel standard, fallback in view
    }

    // Get all possible image paths for fallback
    public function getImagePathsAttribute()
    {
        if (!$this->image_path) {
            return [];
        }

        return [
            asset('storage/' . $this->image_path),
            asset('storage/app/public/' . $this->image_path),
            url('storage/' . $this->image_path),
            url('storage/app/public/' . $this->image_path),
        ];
    }
}
