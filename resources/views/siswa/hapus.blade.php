<!-- resources/views/admin/siswa/hapus.blade.php -->

<h1>Hapus Siswa</h1>

<p>Anda yakin ingin menghapus siswa ini?</p>

<form action="{{ route('siswa.hapus_proses', $siswa->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
</form>