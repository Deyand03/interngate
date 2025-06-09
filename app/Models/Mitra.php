<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitras';
    protected $fillable = ['nama_perusahaan', 'alamat_perusahaan', 'deskripsi', 'logo_perusahaan'];
}
