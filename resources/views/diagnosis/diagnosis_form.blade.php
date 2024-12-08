<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Gejala</title>
</head>
<body>
    <h1>Pilih Gejala</h1>

    <form action="{{ route('diagnosis.generate') }}" method="POST">
        @csrf
        @foreach($symptoms as $symptom)
            <div>
                <label>{{ $symptom->name }}</label><br>
                <input type="radio" name="evidence[{{ $symptom->id }}]" value="0.0" checked> Tidak Pernah<br>
                <input type="radio" name="evidence[{{ $symptom->id }}]" value="0.3"> Ragu<br>
                <input type="radio" name="evidence[{{ $symptom->id }}]" value="1.0"> Yakin<br>
            </div>
        @endforeach
        <button type="submit">Generate Result</button>
    </form>
</body>
</html>
