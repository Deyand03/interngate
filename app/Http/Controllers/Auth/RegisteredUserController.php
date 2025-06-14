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
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\NavigationController;

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

        if($request->role == "mahasiswa"){
            $rule_validasi = [
                'nama' => ['required', 'string', 'max:255'],
                'nim' => ['required', 'string', 'max:255', 'unique:'.Mahasiswa::class],
                'jurusan' => ['required', 'string', 'max:255'],
                'universitas' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ];
            $pesan_validasi = [
                'nama.required' => 'Nama harus diisi.',
                'nim.required' => 'NIM harus diisi.',
                'jurusan.required' => 'Jurusan harus diisi.',
                'universitas.required' => 'Universitas harus diisi.',
                'email.required' => 'Email harus diisi.',
                'password.required' => 'Password harus diisi.',
                'password.confirmed' => 'Password tidak cocok.',
            ];
        }elseif($request->role == "mitra"){
            $rule_validasi = [
                'nama_perusahaan' => ['required', 'string', 'max:255'],
                'alamat_perusahaan' => ['required', 'string', 'max:255'],
                'deskripsi' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ];
            $pesan_validasi = [
                'nama_perusahaan.required' => 'Nama perusahaan harus diisi.',
                'alamat_perusahaan.required' => 'Alamat perusahaan harus diisi.',
                'deskripsi.required' => 'Deskripsi harus diisi.',
                'email.required' => 'Email harus diisi.',
                'password.required' => 'Password harus diisi.',
                'password.confirmed' => 'Password tidak cocok.',
            ];
        }


        $request->validate($rule_validasi, $pesan_validasi  );

        try {
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);
            if ($user->role == "mahasiswa") {
                Mahasiswa::create([
                    'user_id' => $user->id,
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'jurusan' => $request->jurusan,
                    'universitas' => $request->universitas,
                ]);
            } elseif ($user->role == "mahasiswa") {
                Mitra::create([
                    'user_id' => $user->id,
                    'nama_perusahaan' => $request->nama_perusahaan,
                    'alamat_perusahaan' => $request->alamat_perusahaan,
                    'deskripsi' => $request->deskripsi,
                ]);
            }

            event(new Registered($user));
            Auth::login($user);

            return match ($user->role) {
                'mahasiswa' => redirect()->route([NavigationController::class, 'beranda']),
                'mitra' => redirect()->route('mitra.index'),
            };

        } catch (\Exception $e) {
            Log::error("Error during registration: " . $e->getMessage());
            Log::error("Stack Trace: " . $e->getTraceAsString());

            return redirect()->back()->withInput()->withErrors(['registration_error' => 'Terjadi kesalahan saat pendaftaran. Silakan coba lagi.']);
        }
    }
}
