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
            ['name' => 'Riwayat luka (pipi, pundak,lengan atas,daun telinga,dada) '],
            ['name' => 'Plak yang tumbuh pada bekas luka bewarna merah muda / keunguan'],
            ['name' => 'Muncul tukak'],
            ['name' => 'Terasa gatal'],
            ['name' => 'Bercak coklat - kehitaman (wajah, leher)'],
            ['name' => 'Ukuran bercak bervariasi'],
            ['name' => 'Pola bercak menyebar'],
            ['name' => 'Beraktvitas terpapar sinar matahari '],
            ['name' => 'Kehamilan'],
            ['name' => 'Mengkonsumsi obat hormon'],
            ['name' => 'Muncul komedo'],
            ['name' => 'Benjolan padat'],
            ['name' => 'Faktor genetik keluarga'],
            ['name' => 'Penggunaan kosmetik'],
            ['name' => 'Mengalami stres'],
            ['name' => 'Mengalami gangguan siklus menstruasi'],
            ['name' => 'Pola hidup yang tidak sehat'],
            ['name' => 'Benjolan bernanah'],
            ['name' => 'Kulit membulat (perut, paha)'],
            ['name' => 'Kulit kurang mengencang'],
            ['name' => 'Permukaan kulit seperti kulit jeruk'],
            ['name' => 'Mengalami berat badan berlebih'],
            ['name' => 'Usia diatas 30 tahun'],
            ['name' => 'Kulit wajah mengalami kerutan'],
            ['name' => 'Kulit wajah kering'],
            ['name' => 'Muncul garis senyum pada wajah'],
            ['name' => 'Penonjolan daging pada kulit'],
            ['name' => 'Permukaan benjolan kasar bersisik'],
            ['name' => 'Ukuran lesi bervariasi'],
        ]);
    }
}
