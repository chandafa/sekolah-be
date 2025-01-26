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
        Schema::create('tb_prodi', function (Blueprint $table) {
            $table->id('id_prodi'); // Primary key
            $table->string('prodi_name', 255); // Nama program studi
            $table->string('prodi_short', 50)->nullable(); // Singkatan program studi
            $table->string('prodi_color', 50)->nullable(); // Warna program studi
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_facilities');
    }
};