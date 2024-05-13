<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- <link href="{{asset('assets/lib/css/style.css')}}"  rel="stylesheet"> --}}
</head>
<body>
    <h1 align="center">Data Produksi Kendaraan</h1> <br>
    <table align="center">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Merek</th>
            <th>Nama Produk</th>
            <th>Jumlah Produksi</th>
            <th>Tanggal Produksi</th>
            <th>ID Merek</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($product as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->merek->id}}</td>
                <td>{{ $data->merek->nama_merek}}</td>
                <td>{{ $data->nama_produk}}</td>
                <td>{{ $data->jumlah}}</td>
                <td>{{ $data->tanggal_produksi}}</td>   
                <td>{{ $data->merek->id}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>