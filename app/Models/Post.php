<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug', 
        'excerpt', 
        'category',
        'content', 
        'featured_image', 
        'seo_title', 
        'seo_description', 
        'keywords', 
        'schema'
    ];

    // This automatically turns "My Blog Title" into "my-blog-title" for the URL
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }
}
