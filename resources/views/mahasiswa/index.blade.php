@extends('layouts.base')
@section('title', 'Biodata Mahasiswa')

@section('content')
    @php
        $mahasiswa = Auth::user()->mahasiswa;
        // foreach($mahasiswa->pendaftaran as $pendaftaran) {
        //     dd($pendaftaran->program_magang);
        // }
    @endphp
    <header class="bg-[#187DAB] text-white pt-10 pb-24 md:pb-32 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-grid-white/[0.05]"></div>
        <div class="container mx-auto px-6 lg:px-20 text-center relative z-10">
            <h1 class="text-4xl lg:text-4xl font-extrabold !leading-tight">Hai, {{ $mahasiswa->nama }}</h1>
            <p class="text-md text-white/80 mt-4 max-w-2xl mx-auto">Ini adalah pusat kendali profil Anda. Pastikan semua
                data
                terisi lengkap untuk meningkatkan peluang magang.</p>
        </div>
    </header>
    <main class="container mx-auto px-6 lg:px-20 -mt-16 md:-mt-20 relative z-20">
        <div class="card bg-base-100 shadow-xl w-full mb-10">
            <div class="card-body p-6 md:p-8">

                <!-- Bagian Info Profil -->
                <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8 border-b border-base-300 pb-8">
                    <div class="avatar">
                        <div class="w-32 h-32 rounded-full ring ring-[#187DAB] ring-offset-base-100 ring-offset-4">
                            <img id="preview_foto"
                                src="{{ Auth::user()->mahasiswa->foto_profil ? asset('storage/' . Auth::user()->mahasiswa->foto_profil) : 'https://ui-avatars.com/api/?name=' . urlencode($mahasiswa->nama) . '&background=187DAB&color=fff&size=128' }}"
                                alt="Foto Profil" />
                        </div>
                    </div>
                    <div class="text-center md:text-left">
                        <h2 class="text-3xl font-bold text-gray-900">{{ $mahasiswa->nama }}</h2>
                        <p class="text-gray-600 text-lg mt-1">{{ $mahasiswa->jurusan ?? 'Jurusan Belum Diisi' }},
                            {{ $mahasiswa->universitas ?? 'Universitas Belum Diisi' }}
                        </p>
                        <div class="flex items-center justify-center md:justify-start gap-2 mt-3 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span>{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                    <div class="md:ml-auto">
                        <div class="flex flex-col w-52">
                            <button class="btn btn-success" onclick="edit_biodata_modal.showModal()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                        clip-rule="evenodd" />
                                </svg>
                                Lengkapi Biodata
                            </button>
                            <form action="{{ route('mahasiswa.foto.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="flex flex-col w-full">
                                    <input type="file" name="foto_profil" id="foto_profil_input" class="hidden"
                                        accept="image/*">
                                    <label for="foto_profil_input"
                                        class="w-full btn btn-ghost bg-[var(--bg-primary)] text-white cursor-pointer mt-2">
                                        Pilih Foto Baru
                                    </label>
                                    {{-- Tombol yang hanya muncul jika ada file baru dipilih --}}
                                    @error('foto_profil')
                                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <dialog id="preview_foto_modal" class="modal modal-bottom sm:modal-middle">
                                    <div class="modal-box">
                                        <h3 class="font-bold text-lg">Pratinjau Foto Profil Baru</h3>
                                        <p class="py-4">Apakah Anda ingin menggunakan foto ini sebagai foto profil baru?</p>
                                        <figure class="my-4 flex justify-center bg-base-200 p-4 rounded-lg">
                                            <img id="modal_preview_image" src="" alt="Pratinjau Foto"
                                                class="max-h-64 rounded-lg shadow-lg" />
                                        </figure>
                                        <div class="modal-action">
                                            <button id="terapkan_foto_btn" class="btn btn-primary">Gunakan Foto Ini</button>
                                        </div>
                                    </div>
                                </dialog>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Bagian Detail Biodata (Diperbarui) -->
                <div class="py-8 border-b border-base-300">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Detail Biodata</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                        <div>
                            <div class="text-sm font-semibold text-gray-400">NIM</div>
                            <div class="text-lg text-gray-800">{{ $mahasiswa->nim }}</div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Jenis Kelamin</div>
                            <div
                                class="{{ $mahasiswa->jenis_kelamin ? 'text-lg text-gray-800' : 'text-lg text-error font-medium' }}">
                                {{ $mahasiswa->jenis_kelamin ?? 'Belum Diisi' }}
                            </div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Tempat, Tanggal Lahir</div>
                            <div class="flex gap-1">
                                <div
                                    class="{{ $mahasiswa->tempat_lahir ? 'text-lg text-gray-800' : 'text-lg text-error font-medium' }}">
                                    {{ $mahasiswa->tempat_lahir ?? 'Belum Diisi' }},
                                </div>
                                <div
                                    class="{{ $mahasiswa->tanggal_lahir ? 'text-lg text-gray-800' : 'text-lg text-error font-medium' }}">
                                    {{ $mahasiswa->tanggal_lahir ? \Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->isoFormat('D MMM YYYY') : 'Belum Diisi' }}
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">No. Handphone</div>
                            <div
                                class="{{ $mahasiswa->no_hp ? 'text-lg text-gray-800' : 'text-lg text-error font-medium' }}">
                                {{ $mahasiswa->no_hp ?? 'Belum Diisi' }}
                            </div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Provinsi Domisili</div>
                            <div
                                class="{{ $mahasiswa->provinsi_domisili ? 'text-lg text-gray-800' : 'text-lg text-error font-medium' }}">
                                {{ $mahasiswa->provinsi_domisili ?? 'Belum Diisi' }}
                            </div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Kabupaten/Kota Domisili</div>
                            <div
                                class="{{ $mahasiswa->kabupaten_domisili ? 'text-lg text-gray-800' : 'text-lg text-error font-medium' }}">
                                {{ $mahasiswa->kabupaten_domisili ?? 'Belum Diisi' }}
                            </div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Kecamatan Domisili</div>
                            <div
                                class="{{ $mahasiswa->kecamatan_domisili ? 'text-lg text-gray-800' : 'text-lg text-error font-medium' }}">
                                {{ $mahasiswa->kecamatan_domisili ?? 'Belum Diisi' }}
                            </div>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-400">Kelurahan Domisili</div>
                            <div
                                class="{{ $mahasiswa->desa_domisili ? 'text-lg text-gray-800' : 'text-lg text-error font-medium' }}">
                                {{ $mahasiswa->desa_domisili ?? 'Belum Diisi' }}
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <div class="text-sm font-semibold text-gray-400">Alamat Domisili</div>
                            <div
                                class="{{ $mahasiswa->alamat_domisili ? 'text-lg text-gray-800' : 'text-lg text-error font-medium' }}">
                                {{ $mahasiswa->alamat_domisili ?? 'Belum Diisi' }}
                            </div>
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
                                @forelse ($mahasiswa->pendaftaran as $pendaftaran)
                                    <tr>
                                        <td>
                                            <div class="font-bold">{{ $pendaftaran->program_magang->judul }}</div>
                                            <div class="text-sm opacity-60">Kategori:
                                                {{ $pendaftaran->program_magang->category->name }}
                                            </div>
                                        </td>
                                        <td>{{ $pendaftaran->program_magang->mitra->nama_perusahaan }}</td>
                                        <td>{{ $pendaftaran->created_at }}</td>
                                        <td>
                                            <div class="badge @if ($pendaftaran->status == 'Diterima') text-emerald-800 bg-emerald-100
                                            @elseif($pendaftaran->status == 'Ditolak')
                                                        text-rose-800 bg-rose-800
                                                    @elseif($pendaftaran->status == 'Menunggu')
                                                                text-purple-800 bg-purple-100
                                                            @elseif($pendaftaran->status == 'Berlangsung')
                                                                        text-amber-800 bg-amber-100
                                                                    @elseif($pendaftaran->status == 'Selesai')
                                                                            text-sky-800 bg-sky-100 @endif ">
                                                {{ $pendaftaran->status }}
                                            </div>
                                        </td>

                                    </tr>
                                @empty

                                    <tr>
                                        <td colspan="5" class="text-center py-12">
                                            <div class="flex flex-col items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-300"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                                <p class="text-gray-500 mt-4 text-lg">Anda belum pernah melamar program
                                                    magang.
                                                </p>
                                                <p class="text-gray-400 text-sm">Ayo mulai cari peluang terbaikmu sekarang!
                                                </p>
                                                <a href="{{ route('lowongan') }}"
                                                    class="btn btn-ghost bg-[var(--bg-primary)] text-white mt-6">Cari
                                                    Lowongan Sekarang</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </main>


    @if (session('success'))
        <div id="success-message" data-message="{{ session('success') }}" class="hidden"></div>
    @endif
    <dialog id="edit_biodata_modal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-lg mb-6 border-b pb-3">Lengkapi Biodata Anda</h3>
            <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->id) }}"
                class="space-y-4 max-h-[70vh] overflow-y-auto overflow-x-hidden pr-4">
                @csrf
                @method('patch')

                <div class="form-control w-full">
                    <label class="label"><span class="label-text">Nama Lengkap</span></label>
                    <input type="text" name="nama" placeholder="cth: Budi Sanjaya" value="{{ $mahasiswa->nama }}"
                        class="input input-bordered w-full" />
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text">NIM</span></label>
                    <input type="text" name="nim" placeholder="Masukkan NIM Anda" value="{{ $mahasiswa->nim }}"
                        class="input input-bordered w-full" />
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text">Jurusan</span></label>
                    <input type="text" name="jurusan" placeholder="cth: Sistem Informasi" value="{{ $mahasiswa->jurusan }}"
                        class="input input-bordered w-full" />
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text">Universitas</span></label>
                    <input type="text" name="universitas" placeholder="cth: Universitas Jambi"
                        value="{{ $mahasiswa->universitas }}" class="input input-bordered w-full" />
                </div>

                <div class="divider">Info Pribadi</div>

                <div class="form-control w-full">
                    <label class="label"><span class="label-text">Jenis Kelamin</span></label>
                    <select name="jenis_kelamin" class="select select-bordered w-full">
                        <option disabled>Pilih Jenis Kelamin</option>
                        <option value="{{ $mahasiswa->jenis_kelamin }}" selected>{{ $mahasiswa->jenis_kelamin }}</option>
                        <option value="{{ $mahasiswa->jenis_kelamin ? '' : 'Laki-laki' }}"
                            class="{{ $mahasiswa->jenis_kelamin ? 'hidden' : 'block' }}">
                            {{ $mahasiswa->jenis_kelamin ? '' : 'Laki-laki' }}
                        </option>
                        <option value="{{ $mahasiswa->jenis_kelamin ? '' : 'Perempuan' }}"
                            class="{{ $mahasiswa->jenis_kelamin ? 'hidden' : 'block' }}">
                            {{ $mahasiswa->jenis_kelamin ? '' : 'Perempuan' }}
                        </option>
                    </select>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="form-control w-full">
                        <label class="label"><span class="label-text">Tempat Lahir</span></label>
                        <input type="text" name="tempat_lahir" placeholder="cth: Jambi"
                            value="{{ $mahasiswa->tempat_lahir }}" class="input input-bordered w-full" />
                    </div>
                    <div class="form-control w-full">
                        <label class="label"><span class="label-text">Tanggal Lahir</span></label>
                        <input type="date" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}"
                            class="input input-bordered w-full" />
                    </div>
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text">No. Handphone</span></label>
                    <input type="tel" name="no_hp" placeholder="cth: 081234567890" value="{{ $mahasiswa->no_hp }}"
                        class="input input-bordered w-full" />
                </div>

                <div class="divider">Alamat Domisili</div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="form-control w-full">
                        <label class="label"><span class="label-text">Provinsi</span></label>
                        <input type="text" name="provinsi_domisili" placeholder="cth: Jambi"
                            value="{{ $mahasiswa->provinsi_domisili }}" class="input input-bordered w-full" />
                    </div>
                    <div class="form-control w-full">
                        <label class="label"><span class="label-text">Kabupaten/Kota</span></label>
                        <input type="text" name="kabupaten_domisili" placeholder="cth: Kota Jambi"
                            value="{{ $mahasiswa->kabupaten_domisili }}" class="input input-bordered w-full" />
                    </div>
                    <div class="form-control w-full">
                        <label class="label"><span class="label-text">Kecamatan</span></label>
                        <input type="text" name="kecamatan_domisili" placeholder="cth: Kota Baru"
                            value="{{ $mahasiswa->kecamatan_domisili }}" class="input input-bordered w-full" />
                    </div>
                    <div class="form-control w-full">
                        <label class="label"><span class="label-text">Desa/Kelurahan</span></label>
                        <input type="text" name="desa_domisili" placeholder="cth: Simpang III Sipin"
                            value="{{ $mahasiswa->desa_domisili }}" class="input input-bordered w-full" />
                    </div>
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text">Alamat Lengkap</span></label>
                    <textarea name="alamat_domisili" class="textarea textarea-bordered h-24 w-full"
                        placeholder="Masukkan nama jalan, nomor rumah, RT/RW">{{ $mahasiswa->alamat_domisili }}</textarea>
                </div>

                <div class="modal-action sticky bottom-0 bg-base-100 pt-4 -mx-6 px-6 pb-4">
                    <button type="button" class="btn btn-warning"
                        onclick="document.getElementById('edit_biodata_modal').close()">Batal</button>
                    <button type="submit" class="btn btn-ghost bg-[var(--bg-primary)] text-white">Simpan
                        Perubahan</button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    @vite('resources/js/utility/profil-mahasiswa.js')
    @push('scripts')
        <script>
            // Pastikan semua script ada di dalam listener ini untuk mencegah error
            document.addEventListener('DOMContentLoaded', function () {

                // --- LOGIKA UNTUK MODAL PRATINJAU FOTO ---
                const inputFoto = document.getElementById('foto_profil_input');
                const avatarUtama = document.getElementById('preview_foto');

                const modal = document.getElementById('preview_foto_modal');
                const modalImage = document.getElementById('modal_preview_image');
                const tombolTerapkan = document.getElementById('terapkan_foto_btn');

                // Defensive Coding: Cek dulu apakah semua elemennya ada sebelum menambahkan listener
                if (inputFoto && avatarUtama && modal && modalImage && tombolTerapkan) {

                    // 1. Saat user memilih file baru...
                    inputFoto.addEventListener('change', function (event) {
                        if (event.target.files && event.target.files[0]) {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                modalImage.src = e.target.result;
                                modal.showModal();
                            }
                            reader.readAsDataURL(event.target.files[0]);
                        }
                    });

                    // 2. Saat user menekan tombol "Gunakan Foto Ini"...
                    tombolTerapkan.addEventListener('click', function () {
                        avatarUtama.src = modalImage.src;
                        tombolSimpan.classList.remove('hidden');
                        modal.close();
                    });
                } else {
                    console.error('Satu atau lebih elemen untuk pratinjau foto tidak ditemukan di halaman.');
                }
            });
        </script>
    @endpush
@endsection
