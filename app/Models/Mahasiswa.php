<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $primaryKey = 'nim';
    protected $fillable = ['nim', 'nama', 'jurusan', 'universitas'];
    
}
