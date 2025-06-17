<?php

namespace App\Http\Requests;

use App\Models\Pendaftaran;
use Illuminate\Foundation\Http\FormRequest;

class StorePendaftaranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Aturan yang sudah ada untuk file
            'file_cv' => 'required|file|mimes:pdf|max:2048',
            'transkrip_nilai' => 'required|file|mimes:pdf|max:2048',

            // ATURAN KHUSUS KITA ADA DI SINI
            // Kita akan cek ke database sebelum validasi lainnya berjalan.
            'id_mahasiswa' => [
                function ($attribute, $value, $fail) {
                    $mahasiswaId = auth()->user()->mahasiswa->id;

                    // Cek apakah mahasiswa ini sudah punya pendaftaran
                    // yang statusnya masih 'Menunggu', 'Diterima', atau 'Berlangsung'
                    $lamaranAktif = Pendaftaran::where('id_mahasiswa', $mahasiswaId)
                                                ->whereIn('status', ['Menunggu', 'Diterima', 'Berlangsung', 'Selesai'])
                                                ->exists();

                    if ($lamaranAktif) {
                        // Jika ada, gagalkan validasi dengan pesan ini
                        $fail('Anda sudah memiliki lamaran aktif dan tidak bisa mendaftar lagi saat ini.');
                    }
                },
            ],
        ];
    }
}
