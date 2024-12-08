<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('symptoms')->insert([
            ['name' => 'Gejala 1', 'cf_value' => 0.6],
            ['name' => 'Gejala 2', 'cf_value' => 0.8],
        ]);
    }
}
