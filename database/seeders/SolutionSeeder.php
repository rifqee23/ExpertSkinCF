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
        $diseaseA = Disease::where('name', 'Keloid')->first();
        if ($diseaseA) {
            Solution::create([
                'solution' => 'Perawatan Topikal: Menggunakan krim steroid untuk mengurangi peradangan.',
                'disease_id' => $diseaseA->id,
            ]);
            Solution::create([
                'solution' => 'Injeksi Steroid: Injeksi steroid ke dalam keloid untuk mengurangi ukuran dan kemerahan.',
                'disease_id' => $diseaseA->id,
            ]);
            Solution::create([
                'solution' => 'Pembedahan: Mengangkat keloid secara bedah, meskipun ada risiko keloid dapat kembali.',
                'disease_id' => $diseaseA->id,
            ]);
            Solution::create([
                'solution' => 'Terapi Laser: Menggunakan laser untuk meratakan dan mengurangi warna keloid.',
                'disease_id' => $diseaseA->id,
            ]);
            Solution::create([
                'solution' => 'Perawatan dengan Gel Silikon: Menggunakan gel silikon untuk membantu meratakan keloid.',
                'disease_id' => $diseaseA->id,
            ]);
        }

        // Menambahkan solusi untuk Penyakit B
        $diseaseB = Disease::where('name', 'Melasma')->first();
        if ($diseaseB) {
            Solution::create([
                'solution' => 'Krim Pemutih: Menggunakan krim yang mengandung hidrokuinon, asam azelaic, atau tretinoin.',
                'disease_id' => $diseaseB->id,
            ]);
            Solution::create([
                'solution' => 'Perlindungan Matahari: Menggunakan tabir surya dengan SPF tinggi untuk melindungi kulit dari sinar UV.',
                'disease_id' => $diseaseB->id,
            ]);
            Solution::create([
                'solution' => 'Terapi Laser: Menggunakan laser untuk mengurangi bercak melasma.',
                'disease_id' => $diseaseB->id,
            ]);
            Solution::create([
                'solution' => 'Peeling Kimia: Menggunakan peeling kimia untuk mengangkat lapisan atas kulit dan mengurangi bercak.',
                'disease_id' => $diseaseB->id,
            ]);
            Solution::create([
                'solution' => 'Perawatan Topikal: Menggunakan produk yang mengandung vitamin C atau niacinamide.',
                'disease_id' => $diseaseB->id,
            ]);
        }

        // Menambahkan solusi untuk Penyakit C
        $diseaseC = Disease::where('name', 'Akne Vulgaris')->first();
        if ($diseaseC) {
            Solution::create([
                'solution' => 'Perawatan Topikal: Menggunakan krim atau gel yang mengandung benzoyl peroxide atau asam salisilat.',
                'disease_id' => $diseaseC->id,
            ]);
            Solution::create([
                'solution' => 'Antibiotik Oral: Menggunakan antibiotik untuk mengurangi peradangan dan bakteri.',
                'disease_id' => $diseaseC->id,
            ]);
            Solution::create([
                'solution' => 'Retinoid: Menggunakan retinoid topikal untuk mencegah penyumbatan pori.',
                'disease_id' => $diseaseC->id,
            ]);
            Solution::create([
                'solution' => 'Terapi Laser: Menggunakan laser untuk mengurangi jerawat dan bekasnya.',
                'disease_id' => $diseaseC->id,
            ]);
            Solution::create([
                'solution' => 'Perubahan Gaya Hidup: Menghindari makanan yang dapat memicu jerawat dan menjaga kebersihan kulit.',
                'disease_id' => $diseaseC->id,
            ]);
           
        }

        $diseaseD = Disease::where('name', 'Selulit')->first();
        if ($diseaseD) {
            Solution::create([
                'solution' => 'Perawatan Topikal: Menggunakan krim yang mengandung kafein atau retinol.',
                'disease_id' => $diseaseD->id,
            ]);
            Solution::create([
                'solution' => 'Terapi Gelombang Radio: Menggunakan gelombang radio untuk meningkatkan elastisitas kulit.',
                'disease_id' => $diseaseD->id,
            ]);
            Solution::create([
                'solution' => 'Mikrodermabrasi: Menggunakan teknik ini untuk mengangkat lapisan atas kulit dan merangsang pertumbuhan kolagen.',
                'disease_id' => $diseaseD->id,
            ]);
            Solution::create([
                'solution' => 'Olahraga: Melakukan olahraga teratur untuk meningkatkan sirkulasi dan mengurangi lemak.',
                'disease_id' => $diseaseD->id,
            ]);
            Solution::create([
                'solution' => 'Diet Sehat: Mengonsumsi makanan sehat dan cukup air untuk menjaga kelembapan kulit.',
                'disease_id' => $diseaseD->id,
            ]);
        }

        $diseaseE = Disease::where('name', 'Penuaan Kulit')->first();
        if ($diseaseE) {
            Solution::create([
                'solution' => 'Perawatan Anti-Penuaan: Menggunakan krim yang mengandung retinol, asam hialuronat, atau peptida.',
                'disease_id' => $diseaseE->id,
            ]);
            Solution::create([
                'solution' => 'Perlindungan Matahari: Menggunakan tabir surya setiap hari untuk melindungi kulit dari kerusakan UV.',
                'disease_id' => $diseaseE->id,
            ]);
            Solution::create([
                'solution' => 'Terapi Laser: Menggunakan laser untuk meremajakan kulit dan mengurangi kerutan.',
                'disease_id' => $diseaseE->id,
            ]);
            Solution::create([
                'solution' => 'Mikrodermabrasi: Mengangkat sel-sel kulit mati untuk meremajakan kulit.',
                'disease_id' => $diseaseE->id,
            ]);
            Solution::create([
                'solution' => 'Hidrasi: Menggunakan pelembap untuk menjaga kelembapan kulit.',
                'disease_id' => $diseaseE->id,
            ]);
            
        }

        $diseaseF = Disease::where('name', 'Veruka Vulgaris')->first();
        if ($diseaseF) {
            Solution::create([
                'solution' => 'Pengobatan Topikal: Menggunakan salep yang mengandung asam salisilat untuk menghilangkan kutil.',
                'disease_id' => $diseaseF->id,
            ]);
            Solution::create([
                'solution' => 'Cryotherapy: Menggunakan nitrogen cair untuk membekukan dan menghilangkan kutil.',
                'disease_id' => $diseaseF->id,
            ]);
            Solution::create([
                'solution' => 'Pembedahan: Mengangkat kutil secara bedah jika diperlukan.',
                'disease_id' => $diseaseF->id,
            ]);
            Solution::create([
                'solution' => 'Terapi Laser: Menggunakan laser untuk menghilangkan kutil.',
                'disease_id' => $diseaseF->id,
            ]);
            Solution::create([
                'solution' => 'Vaksinasi HPV: Mencegah infeksi virus yang dapat menyebabkan kutil.',
                'disease_id' => $diseaseF->id,
            ]);
        }

    }
}
