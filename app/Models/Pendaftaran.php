<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftarans';
    protected $guarded = [];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa', 'id');
    }
    public function programMagang(){
        return $this->belongsTo(ProgramMagang::class, 'id_programm_magang', 'id');
    }
}
