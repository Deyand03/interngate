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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('file_cv');
            $table->string('transkrip_nilai');
            $table->enum('status', ['Diterima', 'Ditolak', 'Menunggu', 'Berlangsung', 'Selesai']);
            $table->string('catatan_mitra');
            $table->foreignId('id_mahasiswa')->constrained()->onDelete('cascade');
            $table->foreignId('id_program_magang')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
