<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    use HasFactory;

    protected $guarded =[];

    // Optional: If you want Laravel to automatically handle JSON conversion 
    // instead of doing json_encode/decode manually.
    protected $fillable = ['form_name', 'data'];
    protected $casts = ['data' => 'array'];
}