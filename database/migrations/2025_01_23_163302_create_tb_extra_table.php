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
        Schema::create('tb_extra', function (Blueprint $table) {
            $table->id('id_extra'); // Primary key
            $table->string('extra_name', 255); // Nama ekstrakurikuler
            $table->text('extra_text')->nullable(); // Deskripsi ekstrakurikuler
            $table->string('extra_type', 100); // Tipe ekstrakurikuler
            $table->string('extra_logo', 255)->nullable(); // Logo ekstrakurikuler (opsional)
            $table->string('extra_image', 255)->nullable(); // Gambar ekstrakurikuler (opsional)
            $table->string('instagram', 255)->nullable(); // Akun Instagram (opsional)
            $table->string('telegram', 255)->nullable(); // Akun Telegram (opsional)
            $table->string('extra_hari', 100); // Hari ekstrakurikuler berlangsung
            $table->timestamp('extra_timestamp')->useCurrent(); // Timestamp custom
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_extra');
    }
};