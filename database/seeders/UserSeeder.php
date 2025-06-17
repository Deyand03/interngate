<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'id' => 1,
                    'email' => 'defry@gmail.com',
                    'password' => Hash::make('mahasiswa123'),
                    'role' => 'mahasiswa',
                ],
                [
                    'id' => 2,
                    'email' => 'damara@gmail.com',
                    'password' => Hash::make('mahasiswa123'),
                    'role' => 'mahasiswa',
                ],
                [
                    'id' => 3,
                    'email' => 'melani@gmail.com',
                    'password' => Hash::make('mahasiswa123'),
                    'role' => 'mahasiswa',
                ],
                [
                    'id' => 4,
                    'email' => 'taufiq@gmail.com',
                    'password' => Hash::make('mahasiswa123'),
                    'role' => 'mahasiswa',
                ],
                [
                    'id' => 5,
                    'email' => 'zikra@gmail.com',
                    'password' => Hash::make('mahasiswa123'),
                    'role' => 'mahasiswa',
                ],
                [
                    'id' => 6,
                    'email' => 'idstar@gmail.com',
                    'password' => Hash::make('idstar123'),
                    'role' => 'mitra',
                ],
                [
                    'id' => 7,
                    'email' => 'vanith@gmail.com',
                    'password' => Hash::make('vanith123'),
                    'role' => 'mitra',
                ]
            ],
        );
    }
}
