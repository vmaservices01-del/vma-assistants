<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            
            // Core Page Data
            $table->string('slug')->unique(); // Custom slug, indexed for fast frontend routing
            $table->string('title');
            $table->longText('content')->nullable();
            
            // SEO Module Data
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->text('schema_json')->nullable(); // Store JSON-LD schema dynamically
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pages');
    }
};