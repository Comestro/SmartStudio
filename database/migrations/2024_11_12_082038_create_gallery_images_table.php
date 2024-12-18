<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('gallery_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gallery_id');
            $table->string('image_path');
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('gallery_images');
    }
};
