<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramMagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program_magangs')->insert([
            [
                'id' => 1,
                'judul' => 'Program Magang 1',
                'slug' => 'program-magang-1',
                'deskripsi' => 'Deskripsi Program Magang 1',
                'kuota' => 10,
                'gambar' => 'program-magang-1.jpg',
                'kualifikasi' => 'Kualifikasi Program Magang 1',
                'batas_pendaftaran' => '2025-06-30',
                'awal_magang' => '2025-07-01',
                'akhir_magang' => '2025-08-31',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 1,
            ],
            [
                'id' => 2,
                'judul' => 'Program Magang 2',
                'slug' => 'program-magang-2',
                'deskripsi' => 'Deskripsi Program Magang 2',
                'kuota' => 15,
                'gambar' => 'program-magang-1.jpg',
                'kualifikasi' => 'Kualifikasi Program Magang 2',
                'batas_pendaftaran' => '2025-07-15',
                'awal_magang' => '2025-08-01',
                'akhir_magang' => '2025-09-30',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 2,
            ],
            [
                'id' => 3,
                'judul' => 'Program Magang 3',
                'slug' => 'program-magang-3',
                'deskripsi' => 'Deskripsi Program Magang 3',
                'kuota' => 20,
                'gambar' => 'program-magang-1.jpg',
                'kualifikasi' => 'Kualifikasi Program Magang 3',
                'batas_pendaftaran' => '2025-08-31',
                'awal_magang' => '2025-09-01',
                'akhir_magang' => '2025-10-31',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 7,
            ]
        ]);
    }
}
