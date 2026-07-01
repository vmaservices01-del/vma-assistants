<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('page_images', function (Blueprint $table) {
            $table->id();
            
            // Foreign Key linking this image to a specific Page
            // 'onDelete cascade' means if you delete the Page, the image record is deleted too
            $table->foreignId('page_id')->constrained('pages')->onDelete('cascade');
            
            // Image File Path
            $table->string('image_path');
            
            // Image SEO Modules
            $table->string('alt_tag')->nullable();
            $table->string('image_title')->nullable();
            $table->text('image_description')->nullable();
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('page_images');
    }
};