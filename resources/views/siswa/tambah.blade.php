<!-- resources/views/admin/siswa/tambah.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
     
</head>
<body>
    <table>
        <tr>
            <th colspan="2">Tambah Siswa</th>
        </tr>
        <form action="{{ route('siswa.tambah_proses') }}" method="POST">
            @csrf
            <tr>
                <td><label for="nis">Nis:</label></td>
                <td><input type="text" name="nis" id="nis"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Tambah</button></td>
            </tr>
        </form>
    </table>
</body>
</html>