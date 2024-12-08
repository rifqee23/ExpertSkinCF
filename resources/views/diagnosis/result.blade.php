<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosa</title>
</head>
<body>
    <h1>Hasil Diagnosa</h1>
    <ul>
        @if(count($diseases) > 0)
            @foreach($diseases as $disease)
                <li>{{ $disease }}</li>
                <h3>Solusi:</h3>
                <ul>
                    @if(isset($solutions[$disease]))
                        @foreach($solutions[$disease] as $solution)
                            <li>{{ $solution->solution }}</li>
                        @endforeach
                    @else
                        <li>Tidak ada solusi yang tersedia.</li>
                    @endif
                </ul>
            @endforeach
        @else
            <li>Tidak ada penyakit yang cocok berdasarkan gejala yang dipilih.</li>
        @endif
    </ul>

    @if($result !== null)
        <h2>Hasil Perhitungan CF Value: {{ $result }}</h2>
    @endif
</body>
</html>
