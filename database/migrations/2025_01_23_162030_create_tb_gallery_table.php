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
        Schema::create('tb_gallery', function (Blueprint $table) {
            $table->id('id_gallery'); // Primary key
            $table->string('gallery_title', 255); // Judul galeri
            $table->unsignedBigInteger('id_category'); // Foreign key ke tb_category_gallery
            $table->text('gallery_text')->nullable(); // Deskripsi galeri
            $table->string('gallery_location', 255)->nullable(); // Lokasi galeri
            $table->string('gallery_file', 255); // Nama file galeri
            $table->string('file_type', 50); // Tipe file
            $table->foreign('id_category')->references('id_category')->on('tb_category_gallery')->onDelete('cascade'); // Relasi ke kategori galeri
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_gallery');
    }
};