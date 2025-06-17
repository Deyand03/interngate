<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Category;
use App\Models\Mahasiswa;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\ProgramMagang;

class NavigationController extends Controller
{
    public function beranda(){
        $categories = Category::all();
        $mitras = Mitra::all();

        return view('beranda.index', compact('categories', 'mitras'));
    }
    public function lowongan(Request $request)
    {
        $stats = [
            'jml_lowongan' => ProgramMagang::where('status', 'buka')->count(),
            'jml_perusahaan' => Mitra::count(),
            'jml_peserta' => Pendaftaran::where('status', '!=', 'Ditolak')->count(),
        ];

        $query = ProgramMagang::with('mitra', 'category');

        if ($request->filled('search')) {
            $keyword = $request->input('search');
            $query->where(function($q) use ($keyword) {
                $q->where('judul', 'like', '%' . $keyword . '%')
                  ->orWhereHas('mitra', function($q2) use ($keyword) {
                      $q2->where('nama_perusahaan', 'like', '%' . $keyword . '%');
                  });
            });
        }

        if ($request->filled('category')) {
            $categorySlug = $request->input('category');
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        $lowongans = $query->latest()->paginate(6);


        $categories = Category::orderBy('name', 'asc')->get();

        return view('lowongan.index', compact('stats', 'categories', 'lowongans'));
    }
    public function perusahaan(){
        $mitras = Mitra::paginate(9);
        return view('perusahaan.index', compact('mitras'));
    }
    public function faq(){
        return view('faq.index');
    }
}
