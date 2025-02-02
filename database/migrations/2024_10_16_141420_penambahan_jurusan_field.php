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
        Schema::create('tb_jurusan', function (Blueprint $table) {
            $table->id('id_jurusan'); // Primary key
            $table->string('jurusan_nama'); // Nama jurusan
            $table->string('jurusan_short'); // Singkatan jurusan
            $table->unsignedBigInteger('id_prodi'); // Relasi ke tb_prodi
            $table->text('jurusan_text')->nullable(); // Deskripsi jurusan
            $table->string('jurusan_thumbnail')->nullable(); // Thumbnail
            $table->string('jurusan_logo')->nullable(); // Logo

            // Foreign key ke tb_prodi
            $table->foreign('id_prodi')->references('id_prodi')->on('tb_prodi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
