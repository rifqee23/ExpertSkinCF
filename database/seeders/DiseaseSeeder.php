<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diseases')->insert([
            ['name' => 'Keloid'],
            ['name' => 'Melasma'],
            ['name' => 'Akne Vulgaris'],
            ['name' => 'Selulit'],
            ['name' => 'Penuaan Kulit'],
            ['name' => 'Veruka Vulgaris'],
        ]);
    }
}


