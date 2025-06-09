<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitras';
    protected $guarded = [];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'user_id', 'id');
    }
}
