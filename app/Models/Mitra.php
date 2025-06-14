<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitras';
    protected $guarded = [];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
    public function program_magang(){
        return $this->hasMany(ProgramMagang::class, 'id_mitra', 'id');
    }
}
