<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jurusan_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = DB::table('jurusan')->get();
        $data = [
            'jurusan' => $jurusan,
            'content' => 'jurusan.index'
        ];

        return view('layout.wrapper', $data);
    }
}
