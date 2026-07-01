<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    // Allow all fields to be mass-assigned securely (since we validate in the controller)
    protected $guarded =[];

    protected $fillable = [
        'title', 'slug', 'content', 'template', 'category', 'seo_title', 'seo_description', 'seo_keywords', 'schema_json', 'primary_color', 'secondary color'
    ];
    /**
     * Relationship: A Page can have many images.
     */
    public function images()
    {
        return $this->hasMany(PageImage::class, 'page_id', 'id');
    }
}