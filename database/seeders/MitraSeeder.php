<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mitras')->insert([
            [
                'id' => 1,
                'nama_perusahaan' => 'PT. Vanith',
                'alamat_perusahaan' => 'Jl. Muaro Jambi',
                'deskripsi' => 'PT. Vanith adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi.',
                'user_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nama_perusahaan' => 'PT. ASOMASO',
                'alamat_perusahaan' => 'Jl. Muaro Jambi',
                'deskripsi' => 'PT. ASOMASO adalah perusahaan yang bergerak di bidang Game Development.',
                'user_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
