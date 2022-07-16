<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>

<fieldset>
    <legend>
        <h2>
            DATA DOSEN
        </h2>
    </legend>
    @foreach($kampus as $pengajar)
    @php 
    $total = 0;
    @endphp
      Nama Dosen       : <b> {{ $pengajar['name'] }} </b> <br />
      Nama Kuliah      : <b> {{ $pengajar['mata_kuliah'] }} <br />
      Daftar Mahasiswa :
      @foreach($pengajar ['mahasiswa'] as $mahasiswa)
      <li>
        {{$mahasiswa['name'] }} <br />
        Nilai Skripsi : {{ $mahasiswa['nilai'] }}
    </li>
    <hr />
    @php 
    $total += $mahasiswa['nilai']
    @endphp
@endforeach

@php 
$rata = $total / count($pengajar['mahasiswa'])
@endphp
Rata-Rata Nilai Skripsi Bimbingan <b> {{$pengajar['name'] }} = {{ $rata }} </b>
<br /><br />
@endforeach
</fieldset>
    
</body>
</html>