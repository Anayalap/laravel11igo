@extends('layout.main')
@section('content')

<h3>Add Data</h3>
<div class="card">
  <div class="card-header">
   
    </div>
    <div class="card-body">
    <form method="POST" action="{{ route('pelajaran.store') }}">
      @csrf
           
            <div class="row mb-3">
              <label for="nama_pelajaran" class="col-sm-2 col-form-label">Nama Pelajaran</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm @error('nama_pelajaran') is-invalid @enderror" id="nama_pelajaran" name="nama_pelajaran">
                @error('nama_pelajaran')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
              <textarea class="form-control form-control-sm @error('alamat') is-invalid @enderror" id="alamat" name="alamat" cols="30" rows="10"></textarea>
                @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
             
              </div>
            </div>

          
            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
          </form>
    </div>
</div>
@endsection