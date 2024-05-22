<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran_model;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelajaran = Pelajaran_model::get();
        return view('pelajaran.index', compact('pelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelajaran.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelajaran' => 'required'
        ]);
        $pelajaran = new Pelajaran_model();
        $pelajaran->nama_pelajaran = $request->nama_pelajaran;
        $pelajaran->save();
        return redirect()->route('pelajaran.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelajaran_model $pelajaran_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelajaran_model $pelajaran_model, $id)
    {
      
        $pelajaran = Pelajaran_model::find($id);
        return view('pelajaran.edit', compact('pelajaran'));
        // $pelajaran->nama = $request->nama_pelajaran;
        // $pelajaran->update();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelajaran_model $pelajaran_model, $id)
    {
        $request->validate([
            'nama_pelajaran' => 'required'
        ]);
        
        $pelajaran = Pelajaran_model::find($id);      
        $pelajaran->nama_pelajaran = $request->nama_pelajaran;
        $pelajaran->update();
        return redirect()->route('pelajaran.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelajaran_model $pelajaran_model, $id)
    {
        Pelajaran_model::find($id)->delete();
        return redirect()->route('pelajaran.index');
    }
}
