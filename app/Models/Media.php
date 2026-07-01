<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    // We define the table name explicitly because the model name is Media 
    // and Laravel automatically looks for a table named 'media'.
    protected $table = 'media';

    // Mass assignment protection
    protected $fillable = [
        'file_path', 'title', 'description', 'alt_text', 'page_id'
    ];

    /**
     * Helper to get the full URL of the image.
     * Use this in your blade: {{ $media->url }}
     */
    public function getUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }

    public function page() {
        return $this->belongsTo(Page::class);
    }
}