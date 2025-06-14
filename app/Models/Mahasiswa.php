<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function pendaftaran(){
        return $this->hasMany(Pendaftaran::class, 'id_mahasiswa', 'id');
    }
}
