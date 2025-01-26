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
        Schema::create('tb_peserta_didik', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nisn', 20)->unique(); // Nomor Induk Siswa Nasional
            $table->string('nis', 20)->nullable(); // Nomor Induk Siswa (opsional)
            $table->string('nama', 255); // Nama peserta didik
            $table->string('kelas', 50); // Kelas peserta didik
            $table->string('tempat_lahir', 100); // Tempat lahir
            $table->date('tanggal_lahir'); // Tanggal lahir
            $table->string('agama', 50); // Agama
            $table->enum('gender', ['L', 'P']); // Gender (L = Laki-laki, P = Perempuan)
            $table->string('telp', 15)->nullable(); // Nomor telepon (opsional)
            $table->text('alamat')->nullable(); // Alamat peserta didik
            $table->timestamp('peserta_didik_timestamp')->useCurrent(); // Timestamp custom
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_peserta_didik');
    }
};