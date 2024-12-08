<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disease;
use App\Models\Solution;

class SolutionSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan solusi untuk Penyakit A
        $diseaseA = Disease::where('name', 'Penyakit A')->first();
        if ($diseaseA) {
            Solution::create([
                'solution' => 'Solusi A1: Istirahat yang cukup dan minum banyak air.',
                'disease_id' => $diseaseA->id,
            ]);
            Solution::create([
                'solution' => 'Solusi A2: Mengonsumsi obat sesuai resep dokter.',
                'disease_id' => $diseaseA->id,
            ]);
            Solution::create([
                'solution' => 'Solusi A3: Menghindari makanan yang dapat memperburuk kondisi.',
                'disease_id' => $diseaseA->id,
            ]);
        }

        // Menambahkan solusi untuk Penyakit B
        $diseaseB = Disease::where('name', 'Penyakit B')->first();
        if ($diseaseB) {
            Solution::create([
                'solution' => 'Solusi B1: Melakukan terapi fisik.',
                'disease_id' => $diseaseB->id,
            ]);
            Solution::create([
                'solution' => 'Solusi B2: Mengonsumsi suplemen yang direkomendasikan.',
                'disease_id' => $diseaseB->id,
            ]);
        }

        // Menambahkan solusi untuk Penyakit C
        $diseaseC = Disease::where('name', 'Penyakit C')->first();
        if ($diseaseC) {
            Solution::create([
                'solution' => 'Solusi C1: Mengikuti program diet yang sehat.',
                'disease_id' => $diseaseC->id,
            ]);
            Solution::create([
                'solution' => 'Solusi C2: Rutin berolahraga.',
                'disease_id' => $diseaseC->id,
            ]);
        }

        // Tambahkan lebih banyak solusi untuk penyakit lain sesuai kebutuhan
    }
}
