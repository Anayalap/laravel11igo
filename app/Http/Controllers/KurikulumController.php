<?php

namespace App\Http\Controllers;

use App\Models\kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index()
    {
        $kurikulum = kurikulum::get();
       return view('kurikulum.index', compact('kurikulum'));
    }

    public function create()
    {
       return view ('kurikulum.add');
    }

    public function store(Request $request)
    {
        $kurikulum = new kurikulum();
        $kurikulum->nama_kurikulum = $request->nama_kurikulum;
        $kurikulum->tahun = $request->tahun;
        $kurikulum->save();
        return redirect()->route('kurikulum.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $kurikulum = kurikulum::find($id);
        return view('kurikulum.edit', compact('kurikulum'));
    }

    public function update(Request $request, string $id)
    {
        $kurikulum = kurikulum::find($id);
        $kurikulum->nama_kurikulum = $request->nama_kurikulum;
        $kurikulum->tahun = $request->tahun;
        $kurikulum->update();
        return redirect()->route('kurikulum.index');
    }


    public function destroy(string $id)
    {
         kurikulum::destroy($id);
         return redirect()->route('kurikulum.index');
    }
}
