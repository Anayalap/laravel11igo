<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jadwal extends Model
{
    use HasFactory;
    protected $table ="jadwal";
    protected $primaryKey ="id";

    public function guru(){
        return $this->belongsTo(Guru::class, 'id_guru'); //id guru fk
    }
        
    public function pelajaran(){
        return $this->belongsTo(Pelajaran_model::class, 'id_pelajaran');
    }
    
public function list_jadwal()
{
    $query = DB::table('jadwal')
        ->join('guru', 'guru.id_guru', '=', 'jadwal.id_guru')
        ->join('pelajaran', 'pelajaran.id', '=', 'jadwal.id_pelajaran')
        ->select('jadwal.*', 'guru.nama_guru', 'pelajaran.nama_pelajaran')
        ->get();
    return $query; 
}


}
