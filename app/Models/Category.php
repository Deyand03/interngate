<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [];


    public function programMagang()
    {
        return $this->hasMany(ProgramMagang::class, 'id_category', 'id');
    }
}
