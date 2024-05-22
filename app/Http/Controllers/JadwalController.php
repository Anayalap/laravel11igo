<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\Siswa;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        //Query builder biaya
        $myjadwal   = new Jadwal();
        $jadwal = $myjadwal->list_jadwal();

        //Menggunakan Eloquent
        //$jadwal = Jadwal::get();      
       return view('jadwal.index', compact('jadwal'));
    }

    public function create()
    {
       return view ('Jadwal.add');
    }

    public function store(Request $request)
    {
        // $Jadwal = new Jadwal();
        // $Jadwal->nama_Jadwal = $request->nama_Jadwal;
        // $Jadwal->tahun = $request->tahun;
        // $Jadwal->save();
        // return redirect()->route('Jadwal.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        // $Jadwal = Jadwal::find($id);
        // return view('Jadwal.edit', compact('Jadwal'));
    }

    public function update(Request $request, string $id)
    {
        // $Jadwal = Jadwal::find($id);
        // $Jadwal->nama_Jadwal = $request->nama_Jadwal;
        // $Jadwal->tahun = $request->tahun;
        // $Jadwal->update();
        // return redirect()->route('Jadwal.index');
    }


    public function destroy(string $id)
    {
        //  Jadwal::destroy($id);
        //  return redirect()->route('Jadwal.index');
    }
}
