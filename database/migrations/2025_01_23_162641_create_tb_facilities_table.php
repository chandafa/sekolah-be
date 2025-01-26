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
        Schema::create('tb_facilities', function (Blueprint $table) {
            $table->id('id_facility'); // Primary key
            $table->string('facility_name', 255); // Nama fasilitas
            $table->string('facility_image', 255)->nullable(); // Gambar fasilitas
            $table->text('facility_text')->nullable(); // Deskripsi fasilitas
            $table->unsignedBigInteger('id_prodi'); // Foreign key ke tb_prodi
            $table->foreign('id_prodi')->references('id_prodi')->on('tb_prodi')->onDelete('cascade'); // Relasi dengan tb_prodi
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_prodi');
    }
};