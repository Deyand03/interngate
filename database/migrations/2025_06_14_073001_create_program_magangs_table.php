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
        Schema::create('program_magangs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('deskripsi');
            $table->string('gambar');
            $table->integer('kuota');
            $table->text('kualifikasi');
            $table->date('batas_pendaftaran');
            $table->date('awal_magang');
            $table->date('akhir_magang');
            $table->enum('status', ['buka', 'tutup']);
            $table->foreignId('id_mitra')->constrained('mitras')->onDelete('cascade');
            $table->foreignId('id_category')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_magangs');
    }
};
