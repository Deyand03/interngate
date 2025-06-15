<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class ProgramMagang extends Model
{
    protected $table = 'program_magangs';
    protected $guarded = [];

    protected $casts = [
        'batas_pendaftaran' => 'datetime',
        'awal_magang' => 'datetime',
        'akhir_magang' => 'datetime',
    ];

    public function pendaftaran(){
        return $this->hasMany(Pendaftaran::class, "id_programm_magang", "id");;
    }
    public function mitra(){
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'id_category', 'id');;
    }

    public function scopeSearch($query, $keyword)
    {
        if ($keyword) {
            return $query->where(function($q) use ($keyword) {
                $q->where('judul', 'like', '%' . $keyword . '%')
                  ->orWhereHas('mitra', function($q2) use ($keyword) {
                      $q2->where('nama_perusahaan', 'like', '%' . $keyword . '%');
                  });
            });
        }
        return $query;
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($program) {
            $program->slug = self::generateUniqueSlug($program->judul);
        });
    }

    private static function generateUniqueSlug(string $judul): string
    {
        $baseSlug = Str::slug($judul);
        $slug = $baseSlug;

        $counter = 2;

        while (static::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        return $slug;
    }

    public function getKualifikasiListAttribute(): array
    {
        return array_filter(explode("\n", $this->kualifikasi));
    }
    public function getDurasiAttribute(): string
    {
        if (!$this->awal_magang || !$this->akhir_magang) {
            return "N/A";
        }

        $awal = Carbon::parse($this->awal_magang);
        $selesai = Carbon::parse($this->akhir_magang);

        $totalHari = $awal->diffInDays($selesai);

        $durasiBulan = round($totalHari / 30);

        if ($durasiBulan == 0) {
            return $totalHari . " Hari";
        }

        return $durasiBulan . " Bulan";
    }

    public function getRentangTanggalAttribute(): string
    {
        if (!$this->awal_magang || !$this->akhir_magang) {
            return "N/A";
        }

        $awal = Carbon::parse($this->awal_magang)->isoFormat('D MMM');
        $selesai = Carbon::parse($this->akhir_magang)->isoFormat('D MMM YYYY');

        return $awal . ' - ' . $selesai;
    }
}
