@extends('layouts.base')
@section('title', 'Biodata Mahasiswa')

@section('content')
<header class="bg-[#187DAB] text-white pt-10 pb-24 md:pb-32 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-grid-white/[0.05]"></div>
    <div class="container mx-auto px-6 lg:px-20 text-center relative z-10">
        {{-- <!-- SPACE-BACKEND: Ganti 'Budi' dengan {{ strtok($user->mahasiswa->nama ?? 'Mahasiswa', ' ') }} --> --}}
        <h1 class="text-4xl lg:text-4xl font-extrabold !leading-tight">Hai, Budi!</h1>
        <p class="text-md text-white/80 mt-4 max-w-2xl mx-auto">Ini adalah pusat kendali profil Anda. Pastikan semua data terisi lengkap untuk meningkatkan peluang magang.</p>
    </div>
</header>

<main class="container mx-auto px-6 lg:px-20 -mt-16 md:-mt-20 relative z-20">
        <div class="card bg-base-100 shadow-xl w-full">
            <div class="card-body p-6 md:p-8">

                <!-- Bagian Info Profil -->
                <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8 border-b border-base-300 pb-8">
                    <div class="avatar">
                        <div class="w-32 h-32 rounded-full ring ring-[#187DAB] ring-offset-base-100 ring-offset-4">
                            {{-- <!-- SPACE-BACKEND: Hubungkan dengan path foto profil, contoh: src="{{ $user->mahasiswa?->foto_profil ? asset('storage/' . $user->mahasiswa->foto_profil) : '...' }}" --> --}}
                            <img src="https://placehold.co/300x300/E0E0E0/757575?text=B" alt="Foto Profil" />
                        </div>
                    </div>
                    <div class="text-center md:text-left">
                        {{-- <!-- SPACE-BACKEND: Ganti dengan {{ $user->mahasiswa->nama ?? 'Nama Belum Diisi' }} --> --}}
                        <h2 class="text-3xl font-bold text-gray-900">Budi Sanjaya</h2>
                        {{-- <!-- SPACE-BACKEND: Ganti dengan {{ $user->mahasiswa->jurusan ?? 'Jurusan Belum Diisi' }} --> --}}
                        <p class="text-gray-600 text-lg mt-1">Sistem Informasi, Universitas Jambi</p>
                        <div class="flex items-center justify-center md:justify-start gap-2 mt-3 text-gray-500">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" /><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" /></svg>
                             {{-- <!-- SPACE-BACKEND: Ganti dengan {{ $user->email ?? 'Email tidak ditemukan' }} --> --}}
                            <span>budi.sanjaya@example.com</span>
                        </div>
                    </div>
                    <div class="md:ml-auto">
                        <button class="btn btn-primary" onclick="edit_biodata_modal.showModal()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" /><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" /></svg>
                            Lengkapi Biodata
                        </button>
                    </div>
                </div>

                <!-- Bagian Detail Biodata (Diperbarui) -->
                <div class="py-8 border-b border-base-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Detail Biodata</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                        <div>
                            <div class="text-sm font-semibold text-gray-400">NIM</div>
                            {{-- <!-- SPACE-BACKEND: {{ $user->mahasiswa->nim ?? 'Belum diisi' }} --> --}}
                            <div class="text-lg text-gray-800">F1E123001</div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Jenis Kelamin</div>
                            {{-- <!-- SPACE-BACKEND: {{ $user->mahasiswa->jenis_kelamin ?? 'Belum diisi' }} --> --}}
                            <div class="text-lg text-gray-800">Laki-laki</div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Tempat, Tanggal Lahir</div>
                            {{-- <!-- SPACE-BACKEND: {{ $user->mahasiswa->tempat_lahir ?? 'Belum diisi' }}, {{ $user->mahasiswa->tanggal_lahir ? ... : 'Belum diisi' }} --> --}}
                            <div class="text-lg text-gray-800">Jambi, 17 Agustus 2003</div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">No. Handphone</div>
                            {{-- <!-- SPACE-BACKEND: {{ $user->mahasiswa->no_handphone ?? 'Belum diisi' }} --> --}}
                            <div class="text-lg text-gray-800">08123456789</div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Provinsi Domisili</div>
                            {{-- <!-- SPACE-BACKEND: {{ $user->mahasiswa->no_handphone ?? 'Belum diisi' }} --> --}}
                            <div class="text-lg text-gray-800">Jambi</div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Kabupaten/Kota Domisili</div>
                            {{-- <!-- SPACE-BACKEND: {{ $user->mahasiswa->no_handphone ?? 'Belum diisi' }} --> --}}
                            <div class="text-lg text-gray-800">Kota Jambi</div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Kecamatan Domisili</div>
                            {{-- <!-- SPACE-BACKEND: {{ $user->mahasiswa->no_handphone ?? 'Belum diisi' }} --> --}}
                            <div class="text-lg text-gray-800">Kota Baru</div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Kelurahan Domisili</div>
                            {{-- <!-- SPACE-BACKEND: {{ $user->mahasiswa->no_handphone ?? 'Belum diisi' }} --> --}}
                            <div class="text-lg text-gray-800">Simpang III Sipin</div>
                        </div>
                        <div class="md:col-span-2">
                            <div class="text-sm font-semibold text-gray-400">Alamat Domisili</div>
                            {{-- <!-- SPACE-BACKEND: {{ $user->mahasiswa->no_handphone ?? 'Belum diisi' }} --> --}}
                            <div class="text-lg text-gray-800">Jl. Jend. Sudirman No. 12</div>
                        </div>
                    </div>
                </div>
                
                <!-- Bagian Riwayat Lamaran -->
                <div class="pt-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Riwayat Lamaran Magang</h3>
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead class="bg-base-200">
                                <tr>
                                    <th class="rounded-l-lg">Program Magang</th>
                                    <th>Mitra</th>
                                    <th>Tanggal Melamar</th>
                                    <th>Status</th>
                                    <th class="rounded-r-lg"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Contoh Data 1 (Status Diterima) -->
                                <tr>
                                    <td>
                                        <div class="font-bold">Backend Web Developer (Laravel)</div>
                                        <div class="text-sm opacity-60">Kategori: Web Development</div>
                                    </td>
                                    <td>PT. Teknologi Maju</td>
                                    <td>12 Juni 2025</td>
                                    <td>
                                        <div class="badge badge-success text-white">Diterima</div>
                                    </td>
                                    
                                </tr>
                                
                                <!-- Contoh Data 2 (Status Ditolak) -->
                                <tr>
                                    <td>
                                        <div class="font-bold">UI/UX Designer (Figma)</div>
                                        <div class="text-sm opacity-60">Kategori: Desain Grafis</div>
                                    </td>
                                    <td>Suitmedia</td>
                                    <td>10 Juni 2025</td>
                                    <td>
                                        <div class="badge badge-error text-white">Ditolak</div>
                                    </td>
                                    
                                </tr>

                                <!-- Contoh Data 3 (Status Pending) -->
                                <tr>
                                    <td>
                                        <div class="font-bold">Mobile App Developer (Flutter)</div>
                                        <div class="text-sm opacity-60">Kategori: Mobile Development</div>
                                    </td>
                                    <td>GITS Indonesia</td>
                                    <td>5 Juni 2025</td>
                                    <td>
                                        <div class="badge badge-warning text-white">Pending</div>
                                    </td>
                                    
                                </tr>
                                {{-- <!--
                                // ===================================================================
                                // SPACE-BACKEND: Integrasi Backend Dimulai Di Sini
                                // ===================================================================
                                // Gunakan loop @forelse untuk menampilkan data dari database.
                                // Contoh: @forelse ($pendaftarans as $pendaftaran)
                                //     ... (kode tr untuk setiap pendaftaran)
                                // @empty
                                //     ... (kode tr untuk placeholder di bawah)
                                // @endforelse
                                // ===================================================================
                                --> --}}

                                {{-- <!-- Placeholder jika tidak ada data lamaran --> --}}
                                <tr>
                                    <td colspan="5" class="text-center py-12">
                                        <div class="flex flex-col items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                            <p class="text-gray-500 mt-4 text-lg">Anda belum pernah melamar program magang.</p>
                                            <p class="text-gray-400 text-sm">Ayo mulai cari peluang terbaikmu sekarang!</p>
                                            <a href="#" class="btn btn-primary btn-sm mt-6">Cari Lowongan Sekarang</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </main>

<dialog id="edit_biodata_modal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-lg mb-6 border-b pb-3">Lengkapi Biodata Anda</h3>
            
            <form method="post" action="#" class="space-y-4 max-h-[70vh] overflow-y-auto overflow-x-hidden pr-4">
                {{-- SPACE-BACKEND: Ganti action="#" dengan {{ route('nama.route.update') }} dan tambahkan @csrf @method('patch') --}}
                
                <div class="form-control w-full">
                    <label class="label"><span class="label-text">Nama Lengkap</span></label>
                    <input type="text" name="nama" placeholder="cth: Budi Sanjaya" value="Budi Sanjaya" class="input input-bordered w-full" />
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text">NIM</span></label>
                    <input type="text" name="nim" placeholder="Masukkan NIM Anda" value="F1E123001" class="input input-bordered w-full" />
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text">Jurusan</span></label>
                    <input type="text" name="jurusan" placeholder="cth: Sistem Informasi" value="Sistem Informasi" class="input input-bordered w-full" />
                </div>
                 <div class="form-control w-full">
                    <label class="label"><span class="label-text">Universitas</span></label>
                    <input type="text" name="universitas" placeholder="cth: Universitas Jambi" value="Universitas Jambi" class="input input-bordered w-full" />
                </div>

                <div class="divider">Info Pribadi</div>

                <div class="form-control w-full">
                    <label class="label"><span class="label-text">Jenis Kelamin</span></label>
                    <select name="jenis_kelamin" class="select select-bordered w-full">
                        <option disabled>Pilih Jenis Kelamin</option>
                        <option value="laki-laki" selected>Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="form-control w-full">
                        <label class="label"><span class="label-text">Tempat Lahir</span></label>
                        <input type="text" name="tempat_lahir" placeholder="cth: Jambi" value="Jambi" class="input input-bordered w-full" />
                    </div>
                    <div class="form-control w-full">
                        <label class="label"><span class="label-text">Tanggal Lahir</span></label>
                        <input type="date" name="tanggal_lahir" value="2003-08-17" class="input input-bordered w-full" />
                    </div>
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text">No. Handphone</span></label>
                    <input type="tel" name="no_handphone" placeholder="cth: 081234567890" value="081234567890" class="input input-bordered w-full" />
                </div>
                
                <div class="divider">Alamat Domisili</div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="form-control w-full">
                       <label class="label"><span class="label-text">Provinsi</span></label>
                       <input type="text" name="provinsi_domisili" placeholder="cth: Jambi" value="Jambi" class="input input-bordered w-full" />
                   </div>
                    <div class="form-control w-full">
                       <label class="label"><span class="label-text">Kabupaten/Kota</span></label>
                       <input type="text" name="kabupaten_domisili" placeholder="cth: Kota Jambi" value="Kota Jambi" class="input input-bordered w-full" />
                   </div>
                    <div class="form-control w-full">
                       <label class="label"><span class="label-text">Kecamatan</span></label>
                       <input type="text" name="kecamatan_domisili" placeholder="cth: Kota Baru" value="Kota Baru" class="input input-bordered w-full" />
                   </div>
                    <div class="form-control w-full">
                       <label class="label"><span class="label-text">Desa/Kelurahan</span></label>
                       <input type="text" name="desa_domisili" placeholder="cth: Simpang III Sipin" value="Simpang III Sipin" class="input input-bordered w-full" />
                   </div>
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text">Alamat Lengkap</span></label>
                    <textarea name="alamat_domisili" class="textarea textarea-bordered h-24" placeholder="Masukkan nama jalan, nomor rumah, RT/RW">Jl. Jend. Sudirman No. 12</textarea>
                </div>
            
                <div class="modal-action sticky bottom-0 bg-base-100 pt-4 -mx-6 px-6 pb-4">
                     <button type="button" class="btn" onclick="document.getElementById('edit_biodata_modal').close()">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>


@endsection