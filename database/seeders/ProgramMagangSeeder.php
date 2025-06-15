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
                'deskripsi' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'kuota' => 10,
                'gambar' => 'program-magang-1.jpg',
                'kualifikasi' => 'Kualifikasi Program Magang 1',
                'batas_pendaftaran' => '2025-06-30',
                'awal_magang' => '2025-07-01',
                'akhir_magang' => '2025-08-31',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id' => 2,
                'judul' => 'Program Magang 2',
                'slug' => 'program-magang-2',
                'deskripsi' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'kuota' => 15,
                'gambar' => 'program-magang-1.jpg',
                'kualifikasi' => 'Kualifikasi Program Magang 2',
                'batas_pendaftaran' => '2025-07-15',
                'awal_magang' => '2025-08-01',
                'akhir_magang' => '2025-09-30',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'judul' => 'Program Magang 3',
                'slug' => 'program-magang-3',
                'deskripsi' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'kuota' => 20,
                'gambar' => 'program-magang-1.jpg',
                'kualifikasi' => 'Kualifikasi Program Magang 3',
                'batas_pendaftaran' => '2025-08-31',
                'awal_magang' => '2025-09-01',
                'akhir_magang' => '2025-10-31',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'judul' => 'Program Magang 4',
                'slug' => 'program-magang-4',
                'deskripsi' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'kuota' => 25,
                'gambar' => 'program-magang-1.jpg',
                'kualifikasi' => 'Kualifikasi Program Magang 4',
                'batas_pendaftaran' => '2025-09-15',
                'awal_magang' => '2025-10-01',
                'akhir_magang' => '2025-11-30',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'judul' => 'Program Magang 5',
                'slug' => 'program-magang-5',
                'deskripsi' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'kuota' => 30,
                'gambar' => 'program-magang-1.jpg',
                'kualifikasi' => 'Kualifikasi Program Magang 5',
                'batas_pendaftaran' => '2025-10-31',
                'awal_magang' => '2024-11-01',
                'akhir_magang' => '2024-12-31',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 4,
                'created_at' => now(),
                'updated_at'=> now(),
            ],
            [
                'id' => 6,
                'judul' => 'Program Magang 6',
                'slug' => 'program-magang-6',
                'deskripsi' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'kuota' => 35,
                'gambar' => 'program-magang-1.jpg',
                'kualifikasi' => 'Kualifikasi Program Magang 6',
                'batas_pendaftaran' => '2025-11-15',
                'awal_magang' => '2025-12-01',
                'akhir_magang' => '2026-01-31',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
