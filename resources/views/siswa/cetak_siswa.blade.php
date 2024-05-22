<body onload="window.print()">

<h1>Data Siswa</h1>
<table border="1" width="75%">
    <tr>
        <td>No</td>
        <td>NIS</td>
        <td>Nama Siswa</td>
        <td>Alamat</td>
    </tr>

    @foreach($siswa as $rows)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $rows->id_siswa }}</td>
        <td>{{ $rows->nama_siswa }}</td>
        <td>{{ $rows->alamat }}</td>
    </tr>
    @endforeach
</table>
    
</body>