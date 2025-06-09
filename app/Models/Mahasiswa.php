<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $primaryKey = 'nim';
    protected $guarded = [];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
