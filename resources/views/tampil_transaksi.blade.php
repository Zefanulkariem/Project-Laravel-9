<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Nama Pembeli</th>
            <th>Jenis Kelamin</th>
            <th>Jumlah</th>
            <th>Tanggal Transaksi</th>
        </tr>
        @php $no = 1; @endphp
        @foreach($trans as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->id }}</td>
                <td>{{ $data->Barang2->nama_barang }}</td>
                <td>{{ $data->Pembeli->nama_pembeli }}</td>
                <td>{{ $data->Pembeli->jenis_kelamin }}</td>
                <td>{{ $data->jumlah }}</td>
                <td>{{ $data->tanggal_transaksi }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>