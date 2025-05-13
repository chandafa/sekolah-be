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
        Schema::create('tb_pengumuman', function (Blueprint $table) {
            $table->id('id_pengumuman');
            $table->string('pengumuman_nama');
            $table->string('pengumuman_target');
            $table->text('pengumuman_text');
            $table->date('pengumuman_date');
            $table->time('pengumuman_time');
            $table->timestamp('pengumuman_timestamp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengumuman');
    }
};
