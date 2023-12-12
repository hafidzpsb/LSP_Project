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
        Schema::create('types', function (Blueprint $table) {
            $table->id('id_kategori');
            $table->unsignedBigInteger('id_mobil')->nullable();
            $table->foreign('id_mobil')->references('id_mobil')->on('cars');
            $table->string('kode_mobil');
            $table->string('tipe_mobil');
            $table->string('brand_mobil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
