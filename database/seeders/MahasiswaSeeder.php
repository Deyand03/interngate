<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'id' => 1,
                'nim' => 'F1E123060',
                'nama' => 'Defry Yandy',
                'jurusan' => 'Sistem Informasi',
                'universitas' => 'Universitas Jambi',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Bogor',
                'tanggal_lahir' => '2003-12-03',
                'no_hp' => '081234567890',
                'provinsi_domisili' => 'Jambi',
                'kabupaten_domisili' => 'Kab. Muaro Jambi',
                'kecamatan_domisili' => 'Kec. Muaro Jambi',
                'desa_domisili' => 'Kel. Muaro Jambi',
                'alamat_domisili' => 'Jl. Muaro Jambi',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nim' => 'F1E123061',
                'nama' => 'Damara Rafiandriza',
                'jurusan' => 'Sistem Informasi',
                'universitas' => 'Universitas Jambi',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Bogor',
                'tanggal_lahir' => '2003-12-03',
                'no_hp' => '081234567891',
                'provinsi_domisili' => 'Jambi',
                'kabupaten_domisili' => 'Kab. Muaro Jambi',
                'kecamatan_domisili' => 'Kec. Muaro Jambi',
                'desa_domisili' => 'Kel. Muaro Jambi',
                'alamat_domisili' => 'Jl. Muaro Jambi',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'nim' => 'F1E123062',
                'nama' => 'Melani Fitri',
                'jurusan' => 'Sistem Informasi',
                'universitas' => 'Universitas Jambi',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Bogor',
                'tanggal_lahir' => '2003-12-03',
                'no_hp' => '081234567892',
                'provinsi_domisili' => 'Jambi',
                'kabupaten_domisili' => 'Kab. Muaro Jambi',
                'kecamatan_domisili' => 'Kec. Muaro Jambi',
                'desa_domisili' => 'Kel. Muaro Jambi',
                'alamat_domisili' => 'Jl. Muaro Jambi',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nim' => 'F1E123063',
                'nama' => 'Taufiqurahaman',
                'jurusan' => 'Sistem Informasi',
                'universitas' => 'Universitas Jambi',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Bogor',
                'tanggal_lahir' => '2003-12-03',
                'no_hp' => '081234567893',
                'provinsi_domisili' => 'Jambi',
                'kabupaten_domisili' => 'Kab. Muaro Jambi',
                'kecamatan_domisili' => 'Kec. Muaro Jambi',
                'desa_domisili' => 'Kel. Muaro Jambi',
                'alamat_domisili' => 'Jl. Muaro Jambi',
                'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
