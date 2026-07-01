<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageImage extends Model
{
    use HasFactory;

    protected $guarded =[];

    /**
     * Relationship: An image belongs to a specific page.
     */
    
    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }
    
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}