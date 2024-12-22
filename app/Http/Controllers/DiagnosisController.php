<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;
use App\Models\Disease;
use Illuminate\Support\Facades\Log;


class DiagnosisController extends Controller
{
    public function showForm()
    {
        $symptoms = Symptom::all();
        
        return view('diagnosis.diagnosis_form', compact('symptoms'));
    }

    public function generateResult(Request $request)
    {
        // Validasi input
        $request->validate([
            'evidence.*' => 'required|numeric|in:0.0,0.3,1.0', 
        ]);

        $evidence = $request->input('evidence');

        $selectedSymptoms = array_keys($evidence);

        $result = null;

        $matchedDiseases = $this->determineDisease($selectedSymptoms, $evidence, $result);

        $matchedDiseases = array_unique($matchedDiseases);

        $solutions = [];
        foreach ($matchedDiseases as $diseaseName) {
        $disease = Disease::where('name', $diseaseName)->first();
        if ($disease) {
            $solutions[$diseaseName] = $disease->solutions; 

            
            $res = $solutions[$diseaseName]->pluck('solution')->toArray();
            

            // Simpan ke tabel history
            \App\Models\History::create([
                'disease' => $diseaseName,
                'solution' => implode(' ; ', $res), // Menggabungkan solusi menjadi string
            ]);

            
        }
    }
    

        return view('diagnosis.result', ['diseases' => $matchedDiseases, 'result' => $result, 'solutions' => $solutions]);
    }

    private function determineDisease($selectedSymptoms, $evidence, &$result)
    {
        $matchedDiseases = [];
        $result = null;

        $rules = [
            [
                'symptoms' => [1, 2],
                'evidence' => [1, 2],
                'cf_value' => 0.8,
                'disease_name' => 'Keloid',
            ],
            [
                'symptoms' => [1, 2, 3],
                'evidence' => [1, 2, 3],
                'cf_value' => 0.8,
                'disease_name' => 'Keloid',
            ],
            [
                'symptoms' => [1, 2, 4],
                'evidence' => [1, 2, 4],
                'cf_value' => 0.8,
                'disease_name' => 'Keloid',
            ],
            [
                'symptoms' => [5, 6],
                'evidence' => [5, 6],
                'cf_value' => 0.6,
                'disease_name' => 'Melasma',
            ],
            [
                'symptoms' => [5, 6, 7],
                'evidence' => [5, 6, 7],
                'cf_value' => 0.8,
                'disease_name' => 'Melasma',
            ],
            [
                'symptoms' => [5, 6, 8],
                'evidence' => [5, 6, 8],
                'cf_value' => 0.8,
                'disease_name' => 'Melasma',
            ],
            [
                'symptoms' => [5, 6, 9],
                'evidence' => [5, 6, 9],
                'cf_value' => 0.8,
                'disease_name' => 'Melasma',
            ],
            [
                'symptoms' => [5, 6, 10],
                'evidence' => [5, 6, 10],
                'cf_value' => 0.6,
                'disease_name' => 'Melasma',
            ],
            [
                'symptoms' => [11, 12, 18],
                'evidence' => [11, 12, 18],
                'cf_value' => 0.8,
                'disease_name' => 'Akne Vulgaris',
            ],
            [
                'symptoms' => [11, 13],
                'evidence' => [11, 13],
                'cf_value' => 0.6,
                'disease_name' => 'Akne Vulgaris',
            ],
            [
                'symptoms' => [11, 14],
                'evidence' => [11, 14],
                'cf_value' => 0.6,
                'disease_name' => 'Akne Vulgaris',
            ],
            [
                'symptoms' => [11, 15],
                'evidence' => [11, 15],
                'cf_value' => 0.6,
                'disease_name' => 'Akne Vulgaris',
            ],
            [
                'symptoms' => [11, 16],
                'evidence' => [11, 16],
                'cf_value' => 0.8,
                'disease_name' => 'Akne Vulgaris',
            ],
            [
                'symptoms' => [11, 17],
                'evidence' => [11, 17],
                'cf_value' => 0.6,
                'disease_name' => 'Akne Vulgaris',
            ],
            [
                'symptoms' => [11, 12],
                'evidence' => [11, 12],
                'cf_value' => 0.8,
                'disease_name' => 'Akne Vulgaris',
            ],
            [
                'symptoms' => [4, 11, 12],
                'evidence' => [4, 11, 12],
                'cf_value' => 0.8,
                'disease_name' => 'Akne Vulgaris',
            ],
            [
                'symptoms' => [13, 19, 20],
                'evidence' => [13, 19, 20],
                'cf_value' => 0.6,
                'disease_name' => 'Selulit',
            ],
            [
                'symptoms' => [19, 20, 21],
                'evidence' => [19, 20, 21],
                'cf_value' => 0.8,
                'disease_name' => 'Selulit',
            ],
            [
                'symptoms' => [19, 20],
                'evidence' => [19, 20],
                'cf_value' => 0.6,
                'disease_name' => 'Selulit',
            ],
            [
                'symptoms' => [19, 20, 22],
                'evidence' => [19, 20, 22],
                'cf_value' => 0.8,
                'disease_name' => 'Selulit',
            ],
            [
                'symptoms' => [23, 24, 26],
                'evidence' => [23, 24, 26],
                'cf_value' => 0.6,
                'disease_name' => 'Penuaan Kulit',
            ],
            [
                'symptoms' => [8, 24, 26],
                'evidence' => [8, 24, 26],
                'cf_value' => 0.8,
                'disease_name' => 'Penuaan Kulit',
            ],
            [
                'symptoms' => [17, 24, 26],
                'evidence' => [17, 24, 26],
                'cf_value' => 0.6,
                'disease_name' => 'Penuaan Kulit',
            ],
            [
                'symptoms' => [24, 26],
                'evidence' => [24, 26],
                'cf_value' => 0.6,
                'disease_name' => 'Penuaan Kulit',
            ],
            [
                'symptoms' => [24, 25, 26],
                'evidence' => [24, 25, 26],
                'cf_value' => 0.8,
                'disease_name' => 'Penuaan Kulit',
            ],
            [
                'symptoms' => [27, 28],
                'evidence' => [27, 28],
                'cf_value' => 0.8,
                'disease_name' => 'Veruka Vulgaris',
            ],
            [
                'symptoms' => [27, 28, 29],
                'evidence' => [27, 28, 29],
                'cf_value' => 0.6,
                'disease_name' => 'Veruka Vulgaris',
            ],
            [
                'symptoms' => [4, 27, 28, 29],
                'evidence' => [4, 27, 28, 29],
                'cf_value' => 0.6,
                'disease_name' => 'Veruka Vulgaris',
            ],
        ];
        

        foreach ($rules as $rule) {
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
                $minValue = min(array_intersect_key($evidence, array_flip($rule['evidence'])));

                $disease = Disease::where('name', $rule['disease_name'])->first();
                if ($disease) {
                    $disease->cf_value = $rule['cf_value'];
                    $disease->save();
                    $matchedDiseases[] = $disease->name;
                    $result = $minValue * $disease->cf_value; 

                    

                    $filePath = storage_path('app/public/diagnosis.json');
                    
                    if (file_exists($filePath)) {
                        $existingData = json_decode(file_get_contents($filePath), true);
                    } else {
                        $existingData = [];
                    }

                    $newData = ['disease' =>  $matchedDiseases, 'cf' => $result];

                    $existingData[] = $newData;

                    $jsonData = json_encode($existingData, JSON_PRETTY_PRINT);

                    file_put_contents($filePath, $jsonData);
                        
                }
            }
        }
    }

        return $matchedDiseases;
    }

    public function showAccuracy() {
        $filePath = storage_path('app/public/diagnosis.json');
    
        if (file_exists($filePath)) {
            $jsonData = file_get_contents($filePath);
            $matchedDiseases = json_decode($jsonData, true);
           
        } else {
            $matchedDiseases = [];
        }

        $diseaseCounts = [];

        foreach ($matchedDiseases as $entry) {
            
            $diseaseName = $entry['disease'][0];
            $cfValue = $entry['cf']; 
           
            
            if (isset($diseaseCounts[$diseaseName])) {
                $diseaseCounts[$diseaseName] += $cfValue * (1 - $diseaseCounts[$diseaseName]);
            } else {
                $diseaseCounts[$diseaseName] = $cfValue;
            }
        }


        

            $finalResult = [];
            foreach ($diseaseCounts as $disease => $cf) {
                $finalResult[] = [
                    'disease' => $disease,
                    'cf' => number_format($cf * 100, 2) . '%',
                ];
            }

        
        
    
        return view('diagnosis.accuracy', compact('finalResult'));
    }

    public function delete()
{
    $filePath = storage_path('app/public/diagnosis.json');

    if (file_exists($filePath)) {
        unlink($filePath); 
    }

    return redirect()->route('diagnosis.confirm')->with('success', 'Data berhasil dihapus dan kembali ke halaman diagnosis.');
}

public function showHistory()
{
    $histories = \App\Models\History::orderBy('created_at', 'asc')->get();
    return view('riwayat.history', compact('histories'));
}

public function confirm()
{
    return view('diagnosis.confirm'); // Pastikan path ini sesuai dengan file Blade Anda
}

}


