<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt'); // Short intro for the list page
            $table->longText('content'); // The full blog body
            $table->string('featured_image')->nullable();
            
            // SEO Columns (Matches your existing dynamic header)
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('keywords')->nullable();
            $table->json('schema')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
