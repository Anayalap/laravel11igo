<!-- resources/views/jurusan/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan Siswa</title>
</head>

<body>
    <h1>Data Jurusan Siswa</h1>

    <table class="table bg-white rounded shadow-sm  table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID Jurusan</th>
            <th scope="col">Nama Jurusan</th>
            <th scope="col">Nama Pejabat</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jurusan as $key => $jrs)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $jrs->id_jurusan }}</td>
            <td>{{ $jrs->nama_jurusan }}</td>
            <td>{{ $jrs->pejabat }}</td>
        </tr>
        @endforeach
    </table>
</body>
</tbody>
</html>