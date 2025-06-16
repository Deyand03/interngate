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

    public function getBadgeClassAttribute(): string
    {
        $colorPalette = [
            'bg-blue-100 text-blue-800',
            'bg-purple-100 text-purple-800',
            'bg-emerald-100 text-emerald-800',
            'bg-rose-100 text-rose-800',
            'bg-amber-100 text-amber-800',
            'bg-sky-100 text-sky-800',
        ];
        return $colorPalette[$this->id % count($colorPalette)];
    }
}
