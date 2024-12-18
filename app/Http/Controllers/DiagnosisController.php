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
            'symptoms' => [4, 5],
            'evidence' => [4, 5],
            'cf_value' => 0.8,
            'disease_name' => 'Keloid',
        ],
        [
            'symptoms' => [4, 5, 6],
            'evidence' => [4, 5, 6],
            'cf_value' => 0.8,
            'disease_name' => 'Keloid',
        ],
        [
            'symptoms' => [4, 5, 7],
            'evidence' => [4, 5, 7],
            'cf_value' => 0.8,
            'disease_name' => 'Keloid',
        ],
        [
            'symptoms' => [8, 9],
            'evidence' => [8, 9],
            'cf_value' => 0.6,
            'disease_name' => 'Melasma',
        ],
        [
            'symptoms' => [8, 9, 10],
            'evidence' => [8, 9, 10],
            'cf_value' => 0.8,
            'disease_name' => 'Melasma',
        ],
        [
            'symptoms' => [8, 9, 11],
            'evidence' => [8, 9, 11],
            'cf_value' => 0.8,
            'disease_name' => 'Melasma',
        ],
        [
            'symptoms' => [8, 9, 12],
            'evidence' => [8, 9, 12],
            'cf_value' => 0.8,
            'disease_name' => 'Melasma',
        ],
        [
            'symptoms' => [8, 9, 13],
            'evidence' => [8, 9, 13],
            'cf_value' => 0.6,
            'disease_name' => 'Melasma',
        ],
        [
            'symptoms' => [14, 15, 21],
            'evidence' => [14, 15, 21],
            'cf_value' => 0.8,
            'disease_name' => 'Akne Vulgaris',
        ],
        [
            'symptoms' => [14, 16],
            'evidence' => [14, 16],
            'cf_value' => 0.6,
            'disease_name' => 'Akne Vulgaris',
        ],
        [
            'symptoms' => [14, 17],
            'evidence' => [14, 17],
            'cf_value' => 0.6,
            'disease_name' => 'Akne Vulgaris',
        ],
        [
            'symptoms' => [14, 18],
            'evidence' => [14, 18],
            'cf_value' => 0.6,
            'disease_name' => 'Akne Vulgaris',
        ],
        [
            'symptoms' => [14, 19],
            'evidence' => [14, 19],
            'cf_value' => 0.8,
            'disease_name' => 'Akne Vulgaris',
        ],
        [
            'symptoms' => [14, 20],
            'evidence' => [14, 20],
            'cf_value' => 0.6,
            'disease_name' => 'Akne Vulgaris',
        ],
        [
            'symptoms' => [14, 15],
            'evidence' => [14, 15],
            'cf_value' => 0.8,
            'disease_name' => 'Akne Vulgaris',
        ],
        [
            'symptoms' => [7, 14, 15],
            'evidence' => [7, 14, 15],
            'cf_value' => 0.8,
            'disease_name' => 'Akne Vulgaris',
        ],
        [
            'symptoms' => [16, 22, 23],
            'evidence' => [16, 22, 23],
            'cf_value' => 0.6,
            'disease_name' => 'Selulit',
        ],
        [
            'symptoms' => [22, 23, 24],
            'evidence' => [22, 23, 24],
            'cf_value' => 0.8,
            'disease_name' => 'Selulit',
        ],
        [
            'symptoms' => [22, 23],
            'evidence' => [22, 23],
            'cf_value' => 0.6,
            'disease_name' => 'Selulit',
        ],  
        [
            'symptoms' => [22, 23, 25],
            'evidence' => [22, 23, 25],
            'cf_value' => 0.8,
            'disease_name' => 'Selulit',
        ],
        [
            'symptoms' => [26, 27, 29],
            'evidence' => [26, 27, 29],
            'cf_value' => 0.6,
            'disease_name' => 'Penuaan Kulit',
        ],
        [
            'symptoms' => [11, 27, 29],
            'evidence' => [11, 27, 29],
            'cf_value' => 0.8,
            'disease_name' => 'Penuaan Kulit',
        ],
        [
            'symptoms' => [20, 27, 29],
            'evidence' => [20, 27, 29],
            'cf_value' => 0.6,
            'disease_name' => 'Penuaan Kulit',
        ],
        [
            'symptoms' => [27, 29],
            'evidence' => [27, 29],
            'cf_value' => 0.6,
            'disease_name' => 'Penuaan Kulit',
        ],
        [
            'symptoms' => [27, 28, 29],
            'evidence' => [27, 28, 29],
            'cf_value' => 0.8,
            'disease_name' => 'Penuaan Kulit',
        ],
        [
            'symptoms' => [30, 31],
            'evidence' => [30, 31],
            'cf_value' => 0.8,
            'disease_name' => 'Veruka Vulgaris',
        ],
        [
            'symptoms' => [30, 31, 32],
            'evidence' => [30, 31, 32],
            'cf_value' => 0.6,
            'disease_name' => 'Veruka Vulgaris',
        ],
        [
            'symptoms' => [7, 30, 31, 32],
            'evidence' => [7, 30, 31, 32],
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

    return redirect()->route('diagnosis.form')->with('success', 'Data berhasil dihapus dan kembali ke halaman diagnosis.');
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


