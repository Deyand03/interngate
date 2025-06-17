<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProgramMagang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mitra = Auth::user()->mitra;

        // Ambil semua program milik mitra yang login, beserta relasi kategori dan jumlah pendaftar
        $programs = ProgramMagang::where('id_mitra', $mitra->id)
            ->with('category')
            ->withCount('pendaftaran') // Menghitung jumlah pendaftar
            ->latest()
            ->paginate(10);

        // Ambil semua kategori untuk form dropdown
        $categories = Category::orderBy('name')->get();

        return view('mitra.kelola', [
            'programs' => $programs,
            'categories' => $categories
        ]);
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'id_category' => 'required|exists:categories,id',
            'kuota' => 'required|integer|min:1',
            'deskripsi' => 'required|string',
            'kualifikasi' => 'required|string',
            'batas_pendaftaran' => 'required|date',
            'awal_magang' => 'required|date|after_or_equal:batas_pendaftaran',
            'akhir_magang' => 'required|date|after_or_equal:awal_magang',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $mitra = Auth::user()->mitra;

        $programData = $validated;
        $programData['id_mitra'] = $mitra->id;
        $programData['slug'] = Str::slug($validated['judul']) . '-' . uniqid();
        $programData['status'] = 'Buka'; // Default saat dibuat

        if ($request->hasFile('gambar')) {
            $programData['gambar'] = $request->file('gambar')->store('program_banners', 'public');
        }

        ProgramMagang::create($programData);

        return redirect()->back()->with('success', 'Program magang baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgramMagang $program)
    {

        return view('lowongan.detail', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $program = ProgramMagang::with('category')->findOrFail($id);
        $categories = Category::all();
        return view('mitra.edit', compact('program', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgramMagang $program)
    {
        
        if ($program->id_mitra != Auth::user()->mitra->id) {
            abort(403);
        }

        // 1. Validasi Data
        // Kunci-kunci di sini ('judul', 'deskripsi', dll.) HARUS SAMA PERSIS
        // dengan nama kolom di database DAN ada di dalam properti $fillable di model Anda.
        $validatedData = $request->validate([
            'judul'             => 'required|string|max:255',
            'id_category'       => 'required|exists:categories,id',
            'kuota'             => 'required|integer|min:1',
            'deskripsi'         => 'required|string',
            'kualifikasi'       => 'required|string',
            'batas_pendaftaran' => 'required|date',
            'awal_magang'       => 'required|date|after_or_equal:batas_pendaftaran',
            'akhir_magang'      => 'required|date|after_or_equal:awal_magang',
            'gambar'            => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // 2. Siapkan data untuk diupdate. Kita mulai dengan data yang sudah tervalidasi.
        $programData = $validatedData;

        // 3. Logika Tambahan (Slug & Gambar)
        // Generate slug baru hanya jika judul program diubah.
        if ($request->judul !== $program->judul) {
            $programData['slug'] = Str::slug($validatedData['judul']) . '-' . uniqid();
        }

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada, untuk menghemat storage.
            if ($program->gambar) {
                Storage::disk('public')->delete($program->gambar);
            }
            $programData['gambar'] = $request->file('gambar')->store('program_banners', 'public');
        }

        // 4. Update Data
        // Perintah ini hanya akan berhasil jika semua kunci di dalam $programData
        // terdaftar di dalam properti `$fillable` pada model ProgramMagang.
        $program->update($programData);

        // 5. Redirect ke halaman yang benar
        // Pastikan Anda mengarahkan kembali ke halaman index kelola program.
        return redirect()->route('mitra.program.index')->with('success', 'Program magang berhasil diperbarui!');
    }

    public function toggleStatus(ProgramMagang $program)
    {
        // Otorisasi
        if ($program->id_mitra !== Auth::user()->mitra->id) {
            abort(403);
        }

        $program->status_magang = $program->status_magang === 'buka' ? 'tutup' : 'buka';
        $program->save();

        return redirect()->back()->with('success', 'Status lowongan berhasil diubah!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, ProgramMagang $program)
    {
        $program = ProgramMagang::findOrFail($id);
        // Hapus gambar banner jika ada
        if ($program->gambar) {
            Storage::disk('public')->delete($program->gambar);
        }

        $program->delete();

        return redirect()->back()->with('success', 'Program magang berhasil dihapus.');
    }
}
