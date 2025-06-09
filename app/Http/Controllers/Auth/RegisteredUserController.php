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
        // Debugging Awal: Pastikan request masuk dengan benar
        // dd($request->all()); // Aktifkan ini jika kamu masih curiga request tidak lengkap

        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string'],
            'role' => ['required', 'in:mahasiswa,mitra'],
        ]);

        try {
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);

            // Debugging: Pastikan User berhasil dibuat dan memiliki ID
            // dd($user->role);

            if ($user->role == "mahasiswa") {
                Mahasiswa::create([
                    'user_id' => $user->id,
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'jurusan' => $request->jurusan,
                    'universitas' => $request->universitas,
                ]);
                // Debugging: Pastikan Mahasiswa berhasil dibuat
            } elseif ($user->role == "mahasiswa") {
                Mitra::create([
                    'user_id' => $user->id,
                    'nama_perusahaan' => $request->nama_perusahaan,
                    'alamat_perusahaan' => $request->alamat_perusahaan,
                    'deskripsi' => $request->deskripsi,
                ]);
                // Debugging: Pastikan Mitra berhasil dibuat
                // dd($user->mitra);
            }

            event(new Registered($user));
            Auth::login($user);

            return match ($user->role) {
                'mahasiswa' => redirect()->route([NavigationController::class, 'beranda']),
                'mitra' => redirect()->route('mitra.index'),
            };

        } catch (\Exception $e) {
            // Ini akan menangkap exception apapun yang terjadi selama proses penyimpanan
            Log::error("Error during registration: " . $e->getMessage());
            Log::error("Stack Trace: " . $e->getTraceAsString()); // Untuk detail stack trace

            // Kamu bisa kembalikan ke halaman register dengan pesan error atau tampilkan error di browser
            return redirect()->back()->withInput()->withErrors(['registration_error' => 'Terjadi kesalahan saat pendaftaran. Silakan coba lagi.']);
            // Atau, untuk debugging, kamu bisa dd($e) di sini
            // dd($e);
        }
    }
}
