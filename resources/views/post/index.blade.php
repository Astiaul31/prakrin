<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUNYA KAKANG GILANG</title>
</head>
<body>
    <fieldset>
        <legend><b>Data Post</b></legend>
        <br>
        <table cellpading="5" border "2">
            <tr>
                <th><h3>Nomor</h3></th>
                <th><h3>ID</h3></th>
                <th><h3>Judul</h3></th>
                <th><h3>Konten</h3></th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($post as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$data->id}}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->content }}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>