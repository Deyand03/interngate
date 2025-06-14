<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class ProgramMagang extends Model
{
    protected $table = 'program_magangs';
    protected $guarded = [];

    public function pendaftaran(){
        return $this->hasMany(Pendaftaran::class, "id_programm_magang", "id");;
    }
    public function mitra(){
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'id_category', 'id');;
    }
}
