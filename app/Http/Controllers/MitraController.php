<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Category;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\ProgramMagang;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mitra = Auth::user()->mitra;

        $programIds = $mitra->program_magang()->pluck('id');
        $pendaftaransQuery = Pendaftaran::whereIn('id_program_magang', $programIds);

        $stats = [
            'totalPelamar' => $pendaftaransQuery->clone()->where('status', '!=', 'Ditolak')
                ->where('status', '!=', 'Menunggu')
                ->count(),
            'menungguKonfirmasi' => $pendaftaransQuery->clone()->where('status', 'Menunggu')->count(),
            'aktifMagang' => $pendaftaransQuery->clone()->where('status', 'Berlangsung')->count(),
            'telahSelesai' => $pendaftaransQuery->clone()->where('status', 'Selesai')->count(),
        ];

        $queryBuilder = $pendaftaransQuery->clone()->with(['mahasiswa', 'program_magang']);
        if ($request->filled('search')) {
            $search = $request->search;
            $queryBuilder->whereHas('mahasiswa', function ($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%")
                    ->orWhere('nim', 'like', "%{$search}%");
            });
        }

        if ($request->filled('program')) {
            $queryBuilder->where('id_program_magang', $request->program);
        }

        if ($request->filled('status')) {
            $queryBuilder->where('status', $request->status);
        }

        $pendaftarans = $queryBuilder->latest()->paginate(10);

        $categories = Category::all();
        return view('mitra.index', compact('mitra', 'stats', 'pendaftarans', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mitra.kelola');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function profile()
    {
        return view('mitra.profile');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
