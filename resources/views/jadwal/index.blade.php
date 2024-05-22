@extends('layout.main')
@section('content')

<h1>Jadwal Pelajaran</h1>
<div class="card">
        <div class="card-header">
        <a href="{{ route('kurikulum.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Nama Guru</td>
                <td>Pelajaran</td>
                <td>Jam Mulai</td>
               
                <td>Tanggal</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            @foreach ($jadwal as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->nama_guru }}</td>
                    <td>{{ $rows->nama_pelajaran }}</td>
                    <td>{{ $rows->jam_mulai }} </td>
                    <td>{{ $rows->created_at }}</td>
                    <td>
                        <a href="{{ route('kurikulum.edit', $rows->id) }}">Edit</a>                                      
                    </td>
                    <td> 
                    <form action="{{ route('kurikulum.destroy', $rows->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Del</button>
                        </form>  
                    </td>
                 </tr>   
            @endforeach
            </tbody>
            </table>
        </div>
</div>

@endsection