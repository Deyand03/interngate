<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs_all = Mahasiswa::all();
        return view('mahasiswa.index', compact('mhs_all'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $data = Mahasiswa::findOrFail($id);
        if($data){
            $data->update([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'jurusan' => $request->jurusan,
                'universitas' => $request->universitas,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'no_hp' => $request->no_hp,
                'provinsi_domisili' => $request->provinsi_domisili,
                'kabupaten_domisili' => $request->kabupaten_domisili,
                'kecamatan_domisili' => $request->kecamatan_domisili,
                'desa_domisili' => $request->desa_domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'foto_profil' => $request->foto_profil,
            ]);
            return redirect()->back()->with('success', 'Data Berhasil Di Update');
        }else{
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
}
