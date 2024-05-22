<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa_model extends Model
{
    protected $fillable = ['nis', 'nama_siswa', 'alamat'];
    protected $table = 'siswa';
}
