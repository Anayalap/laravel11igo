@extends('layout.main')
@section('content')


<h3>Tambah Data Kurikulum</h3>
<form action="{{ route('kurikulum.store') }}" method="POST">
    @csrf
<table>
    <tr>
        <td>Nama Kurikulum</td><td><input type="text" name="nama_kurikulum"></td>
    </tr>
    <tr>
        <td>Tahun</td><td><input type="text" name="tahun"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection