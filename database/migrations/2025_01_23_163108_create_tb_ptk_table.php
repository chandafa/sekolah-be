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
        Schema::create('tb_ptk', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama', 255); // Nama PTK
            $table->string('nip', 20)->nullable(); // NIP (Nomor Induk Pegawai)
            $table->string('nuptk', 20)->nullable(); // NUPTK (Nomor Unik Pendidik dan Tenaga Kependidikan)
            $table->string('tempat_lahir', 100); // Tempat lahir
            $table->date('tanggal_lahir'); // Tanggal lahir
            $table->enum('jenis_kelamin', ['L', 'P']); // Jenis kelamin (Laki-laki, Perempuan)
            $table->text('alamat')->nullable(); // Alamat (opsional)
            $table->string('foto', 255)->nullable(); // Foto PTK (opsional)
            $table->string('mata_pelajaran', 100); // Mata pelajaran yang diajarkan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ptk');
    }
};