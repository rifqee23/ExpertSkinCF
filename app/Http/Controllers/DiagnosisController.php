<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;
use App\Models\Disease;
use Illuminate\Support\Facades\Log;


class DiagnosisController extends Controller
{
    // Metode untuk menampilkan form diagnosis
    public function showForm()
    {
        // Ambil semua gejala dari database
        $symptoms = Symptom::all();
        
        // Tampilkan view dengan data gejala
        return view('diagnosis.diagnosis_form', compact('symptoms'));
    }

    // Metode untuk menghasilkan hasil diagnosis
    public function generateResult(Request $request)
    {
        // Validasi input
        $request->validate([
            'evidence.*' => 'required|numeric|in:0.0,0.3,1.0', // Pastikan nilai evidence valid
        ]);

        // Ambil data evidence dari input
        $evidence = $request->input('evidence');

        // Ambil gejala yang dipilih
        $selectedSymptoms = array_keys($evidence);

        $result = null;

        // Logika untuk menentukan penyakit berdasarkan gejala
        $matchedDiseases = $this->determineDisease($selectedSymptoms, $evidence, $result);

        $matchedDiseases = array_unique($matchedDiseases);

        $solutions = [];
        foreach ($matchedDiseases as $diseaseName) {
        $disease = Disease::where('name', $diseaseName)->first();
        if ($disease) {
            $solutions[$diseaseName] = $disease->solutions; // Ambil solusi untuk penyakit ini
        }
    }

        // Tampilkan hasil diagnosis
        return view('diagnosis.result', ['diseases' => $matchedDiseases, 'result' => $result, 'solutions' => $solutions]);
    }

    // Metode untuk menentukan penyakit berdasarkan gejala dan evidence
    private function determineDisease($selectedSymptoms, $evidence, &$result)
    {
        $matchedDiseases = [];
        $result = null;

        $rules = [
        [
            'symptoms' => [1, 2],
            'evidence' => [1, 2],
            'cf_value' => 0.8,
            'disease_name' => 'Penyakit A',
        ],
        // Tambahkan lebih banyak aturan sesuai kebutuhan
    ];

        foreach ($rules as $rule) {
        // Cek apakah semua gejala yang diperlukan ada dalam input
        if (array_diff($rule['symptoms'], $selectedSymptoms) === []) {
            // Cek evidence
            $evidenceCheck = true;
            foreach ($rule['evidence'] as $evidenceId) {
                if ($evidence[$evidenceId] == 0.0) {
                    $evidenceCheck = false;
                    break;
                }
            }

            if ($evidenceCheck) {
                // Hitung nilai minimum dari evidence yang relevan
                $minValue = min(array_intersect_key($evidence, array_flip($rule['evidence'])));

                // Update cf_value dan simpan hasil
                $disease = Disease::where('name', $rule['disease_name'])->first();
                if ($disease) {
                    $disease->cf_value = $rule['cf_value'];
                    $disease->save();
                    $matchedDiseases[] = $disease->name;
                    $result = $minValue * $disease->cf_value; // Simpan hasil perhitungan
                }
            }
        }
    }

        return $matchedDiseases;
    }
}
