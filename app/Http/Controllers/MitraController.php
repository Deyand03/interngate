<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Category;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Models\ProgramMagang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = ProgramMagang::all();
        $pendaftarans = Pendaftaran::with('program_magang')->get();
        $stats = [
            'total_pendaftaran' => Pendaftaran::where('status', '!=', 'Ditolak')->count(),
            'menunggu' => Pendaftaran::where('status', 'Menunggu')->count(),
            'berlangsung' => Pendaftaran::where('status', 'Berlangsung')->count(),
            'selesai' => Pendaftaran::where('status', 'Selesai')->count(),
        ];

        $categories = Category::orderBy('name', 'asc')->get();
        return view('mitra.index', compact('pendaftarans', 'stats', 'programs', 'categories'));;
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
        $data = Mitra::findOrFail($id);
        if ($data) {
            $data->update([
                'nama_perusahaan' => $request->nama_perusahaan,
                'alamat_perusahaan' => $request->alamat_perusahaan,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->back()->with('success', 'Data Berhasil Di Update');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateMedia(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'logo_perusahaan' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
            'banner' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Mengambil data mitra langsung dari sesi login. Ini jauh lebih aman.
        $mitra = auth()->user()->mitra;

        // 3. Hapus foto lama jika ada
        if ($mitra->logo_perusahaan) {
            Storage::delete('public/' . $mitra->logo_perusahaan);
        }

        if ($mitra->banner) {
            Storage::delete('public/' . $mitra->banner);
        }

        if($request->logo_perusahaan == null || $request->banner == null) {
            return redirect()->back();            
        }
        
        $path_logo = $request->file('logo_perusahaan')->store('logo_perusahaan', 'public');
        $path_banner = $request->file('banner')->store('banner', 'public');

        $mitra->update([
            'logo_perusahaan' => $path_logo, 
            'banner' => $path_banner
        ]);

        return redirect()->back()->with('status', 'Media berhasil diperbarui!');
    }
}
