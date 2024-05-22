<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        // echo"Test";
        $search = $request->query('search');
        // echo 'dd'. $search;
        if (!empty($search)){
            $data = Guru::where('guru.id_guru', 'like', '%' . $search . '%')
                ->orWhere('siswa.nama_guru', 'like', '%' . $search . '%')
                ->paginate(10)->onEachSide(2)->fragment('std');
        }else{
            $data = Guru::paginate(10)->onEachSide(2)->fragment('std');    
        }    
        return view ('guru.index')->with([
            'guru' => $data,
            'search' => $search
        ]);
    }

    public function store(StoreGuruRequest $request)
    {
       $validate =$request->validated();
       $Guru = new Guru;
       $Guru->id_guru     = $request->id_guru;
       $Guru->nama_guru   = $request->nama_guru;
       $Guru->alamat       = $request->alamat;
       $Guru->phone        = $request->phone;
       $Guru->gender       = $request->gender;
       $Guru->save();
       return redirect('guru')->with('msg', 'Add Sukses');

    }

    public function show(Guru $guru, $id_guru)
    {        
        // echo $id_guru;
        $data = $guru->find($id_guru);
        return view('guru.edit')->with([
            'id_guru'      => $id_guru,
            'nama_guru'    => $data->nama_guru,
            'alamat'        => $data->alamat,
            'gender'        => $data->gender,
            'phone'         => $data->phone,            
        ]);
        
    }

    public function update(UpdateGuruRequest $request, Guru $guru, $id_guru)
    {
        $data = $guru->find($id_guru);
        $data->nama_guru   = $request->nama_guru;
        $data->alamat       = $request->alamat;
        $data->phone        = $request->phone;
        $data->gender       = $request->gender;
        $data->save();
        return redirect('guru')->with('msg', 'Edit'. $data->nama_guru.' berhasil');
    }

    public function destroy(Guru $guru, $id_guru)
    {
        $data = $guru->find($id_guru);    
        $data->delete();
        return redirect('guru')->with('msg', 'Hapus'. $data->nama_guru.' berhasil');
    }
}
