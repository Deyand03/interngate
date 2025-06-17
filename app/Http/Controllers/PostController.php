<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\ProgramMagang;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ProgramMagang $program)
    {
        $validatedData = $request->validate([
            'file_cv' => 'required|file|mimes:pdf|max:2048', // Wajib ada, harus file, tipenya pdf, maks 2MB
            'transkrip_nilai' => 'required|file|mimes:pdf|max:2048',
        ]);
        $cvPath = $request->file('file_cv')->store('dokumen/cv', 'public');
        $transkripPath = $request->file('transkrip_nilai')->store('dokumen/transkrip', 'public');

        // 3. Buat record baru di database (lebih simpel!)
        Pendaftaran::create([
            'id_mahasiswa' => auth()->user()->mahasiswa->id,
            'id_program_magang' => $program->id,
            'file_cv' => $cvPath,
            'transkrip_nilai' => $transkripPath,
            'status' => 'Menunggu',
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Lamaran berhasil terkirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgramMagang $program)
    {
        $sudahMelamar = false; // Default-nya false

        // Cek hanya jika user sudah login dan dia adalah mahasiswa
        if (auth()->check() && auth()->user()->mahasiswa) {
            $mahasiswaId = auth()->user()->mahasiswa->id;
            $sudahMelamar = Pendaftaran::where('id_mahasiswa', $mahasiswaId)
                ->whereIn('status', ['Menunggu', 'Diterima', 'Berlangsung', 'Selesai'])
                ->exists();
        }

        return view('lowongan.detail', compact('program', 'sudahMelamar'));
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
