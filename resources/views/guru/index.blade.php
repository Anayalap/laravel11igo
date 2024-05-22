@extends('layout.main')
@section('content')

<h3>Data Guru</h3>
<div class="card">
<div class="card-header">
<button type="button" class="btn btn-sm btn-success" onclick="window.location='{{ url('guru/add') }}'">
        <i class="fas fa-plus-circle"></i> Add
</button>
</div>
<div class="card-body">
  @if (session('msg')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> {{ session('msg') }}
      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <form method="GET">
    <div class="row mb-3">
    <label for="search" class="col-sm-2 col-form-label">Cari Data</label>
    <div class="col-sm-10">
    <input type="text" class="form-control form-control-sm"  placeholder="Pencarian" name="search" autofocus value="{{ $search }}">
    </div>
    </div>
  </form>
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Guru</th>
            <th>Nama Guru</th>
            <th>Genre</th>
            <th>Aksi</th>            
        </tr>
    </thead>

    <tbody>
      <!-- agar nomor berjalan pada pagination -->
      @php
        $nomor = 1 + (($guru->currentPage() - 1) * $guru->perPage()); 
      @endphp
        @foreach($guru as $row)
        <tr>
            <!-- <td>{{ $loop->iteration }}</td> -->
            <td>{{ $nomor++ }}</td>
            <td>{{ $row->id_guru }}</td>
            <td>{{ $row->nama_guru }}</td>
            <td>{{ ($row->gender=='M') ? 'Male' : 'Female' }}</td>
            <td>
              <button onclick="window.location='{{ url('guru/'.$row->id_guru) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

              <form onsubmit="return deleteData('{{ $row->nama_guru }}')" style="display: inline" method="POST"  action="{{ url('guru/'.$row->id_guru) }}">
                @csrf
                @method('DELETE')
                <button  type="submit"  title="Hapus Data" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
                </button>
               
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <!-- {{ $guru->links() }} -->
  {!! $guru->appends(Request::except('page'))->render() !!}

</div>
</div>

<script>
  function deleteData(name){
    pesan = confirm('Yakin data dengan nama ${name} ini dihapus?');
    if(pesan) return true;
    else return false;
  }
</script>
@endsection