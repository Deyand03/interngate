<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendaftarans')->insert([
            [
                'id' => 1,
                'file_cv' => 'file_cv.pdf',
                'transkrip_nilai' => 'transkrip_nilai.pdf',
                'status' => 'Menunggu',
                'catatan_mitra' => null,
                'id_mahasiswa' => 2,
                'id_program_magang' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'file_cv' => 'file_cv.pdf',
                'transkrip_nilai' => 'transkrip_nilai.pdf',
                'status' => 'Diterima',
                'catatan_mitra' => null,
                'id_mahasiswa' => 2,
                'id_program_magang' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'file_cv' => 'file_cv.pdf',
                'transkrip_nilai' => 'transkrip_nilai.pdf',
                'status' => 'Ditolak',
                'catatan_mitra' => 'Catatan Mitra',
                'id_mahasiswa' => 3,
                'id_program_magang' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'file_cv' => 'file_cv.pdf',
                'transkrip_nilai' => 'transkrip_nilai.pdf',
                'status' => 'Berlangsung',
                'catatan_mitra' => null,
                'id_mahasiswa' => 4,
                'id_program_magang' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'file_cv' => 'file_cv.pdf',
                'transkrip_nilai' => 'transkrip_nilai.pdf',
                'status' => 'Selesai',
                'catatan_mitra' => null,
                'id_mahasiswa' => 5,
                'id_program_magang' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
