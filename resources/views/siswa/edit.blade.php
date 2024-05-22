@extends('layout.main')
@section('content')

<h3>Edit Data</h3>
<div class="card">
  <div class="card-header">
    <button type="button" class="btn btn-sm btn-success" 
    onclick="window.location='{{ url('siswa') }}'">
            <i class="fas fa-plus-circle"></i> Kembali
    </button>
    </div>
    <div class="card-body">
    <form method="POST" action="{{ route('siswa/update') }}">
      @csrf
            <div class="row mb-3">
              <label for="id_siswa" class="col-sm-2 col-form-label">ID Siswa</label>
              <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="id_siswa" name="id_siswa" value="{{ $id_siswa }}">              
              </div>
            </div>

            <div class="row mb-3">
              <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm @error('nama_siswa') is-invalid @enderror" id="nama_siswa" name="nama_siswa" value="{{ $nama_siswa }}">
                @error('nama_siswa')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
              <textarea class="form-control form-control-sm @error('alamat') is-invalid @enderror" id="alamat" name="alamat" cols="30" rows="10" >{{ $alamat }}</textarea>
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
             
              </div>
            </div>

            <div class="row mb-3">
              <label for="phone" class="col-sm-2 col-form-label">Handphone</label>
              <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $phone }}">
                @error('phone')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="alamat" class="col-sm-2 col-form-label">Gender</label>
              <div class="col-sm-10">
                <select class="form-select form-select-sm @error('gender') is-invalid @enderror" name="gender" id="gender">
                  <option value="" selected>-Pilih-</option>
                  <option value="M" {{ ($gender=='M') ? 'selected' : '' }}>Male</option>
                  <option value="F" {{ ($gender=='F') ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
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