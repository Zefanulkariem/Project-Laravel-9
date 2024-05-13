<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Data Tabel Pegguna</h1> <br>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>nomor_telepon</th>
            <th>nama pengguna</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($telp as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->id}}</td>
                <td>{{ $data->nomor_telepon}}</td>
                <td>{{ $data->Pengguna->nama}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>