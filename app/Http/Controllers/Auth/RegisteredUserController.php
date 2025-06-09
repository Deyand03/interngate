<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Mitra;
use App\Models\Mahasiswa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string'],
            'role' => ['required', 'in:mahasiswa,mitra'],
        ]);

        if ($request->role === 'mahasiswa') {
            $request->validate([
                'nama' => ['required', 'string', 'max:255'],
                'nim' => ['required', 'numeric', 'unique:mahasiswas,nim'],
                'jurusan' => ['required', 'string', 'max:255'],
                'universitas' => ['required', 'string', 'max:255'],
                'foto_profil' => ['nullable', 'string', 'max:255'],
            ]);
        } elseif ($request->role === 'mitra') {
            $request->validate([
                'nama_perusahaan' => ['required', 'string', 'max:255'],
                'alamat_perusahaan' => ['required', 'string', 'max:255'],
                'deskripsi' => ['required', 'string', 'max:255'],
                'logo_perusahaan' => ['nullable', 'string', 'max:255'],
            ]);
        }

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        if ($user->role === 'mahasiswa') {
            Mahasiswa::create([
                'user_id' => $user->id,
                'nim' => $request->nim,
                'jurusan' => $request->jurusan,
                'universitas' => $request->universitas,
                'foto_profil' => $request->foto_profil ?? null,
            ]);
        } elseif ($user->role === 'mitra') {
            Mitra::create([
                'user_id' => $user->id,
                'nama_perusahaan' => $request->nama_perusahaan,
                'alamat_perusahaan' => $request->alamat_perusahaan,
                'deskripsi' => $request->deskripsi,
                'logo_perusahaan' => $request->logo_perusahaan ?? null,
            ]);
        }

        event(new Registered($user));
        Auth::login($user);

        return match ($user->role) {
            'mahasiswa' => redirect()->route('mahasiswa.index'),
            'mitra' => redirect()->route('mitra.index'),
        };
    }
}
