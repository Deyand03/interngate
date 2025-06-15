<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Web Development',
                'slug' => 'web-development',
            ],
            [
                'id' => 2,
                'name' => 'Mobile Development',
                'slug' => 'mobile-development',
            ],
            [
                'id' => 3,
                'name' => 'Data Science',
                'slug' => 'data-science'
            ],
            [
                'id' => 4,
                'name' => 'Machine Learning',
                'slug' => 'machine-learning'
            ],
            [
                'id' => 5,
                'name' => 'UI/UX Design',
                'slug' => 'ui-ux-design'
            ],
            [
                'id' => 6,
                'name' => 'Cyber Security',
                'slug' => 'cyber-security'
            ],
            [
                'id' => 7,
                'name' => 'Game Development',
                'slug' => 'game-development'
            ]
        ]);
    }
}
