<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbArtikelTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_artikel', function (Blueprint $table) {
            $table->id('id_artikel'); // Primary Key
            $table->string('artikel_title');
            $table->string('artikel_level');
            $table->unsignedBigInteger('id_category'); // Foreign Key
            $table->string('category_name'); // Denormalized category name
            $table->text('artikel_text');
            $table->string('artikel_image');
            $table->integer('artikel_viewer')->default(0);
            $table->timestamp('artikel_timestamp')->nullable();

            // Foreign Key Constraint
            $table->foreign('id_category')
                ->references('id_category')
                ->on('tb_category_artikel')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_artikel');
    }
}
