@extends('layouts.sidebar')
@section('title')
    Dashboard - {{ Auth::user()->mitra->nama_perusahaan }}
@endsection
@section('content')
    <div class="container mx-auto px-6 lg:px-20">
        <div class="p-8">
            <!-- Header Dasbor -->
            <header class="mb-8">
                <h1 class="text-3xl font-extrabold text-gray-800">Dashboard {{ Auth::user()->mitra->nama_perusahaan }}</h1>
                <p class="text-gray-500 mt-1">Selamat datang! Kelola semua pendaftaran magang Anda di sini.</p>
            </header>

            <!-- Kartu Statistik -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
                <div class="card bg-gradient-to-br from-blue-500 to-blue-600 text-white shadow-lg">
                    <div class="card-body p-6">
                        <div class="flex justify-between items-start">
                            <h2 class="card-title text-white/80">Total Pelamar</h2>
                            <div class="p-2 bg-white/20 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg></div>
                        </div>
                        <p class="text-4xl font-extrabold mt-2">{{ $stats['totalPelamar'] }}</p>
                    </div>
                </div>
                <div class="card bg-gradient-to-br from-yellow-400 to-yellow-500 text-white shadow-lg">
                    <div class="card-body p-6">
                        <div class="flex justify-between items-start">
                            <h2 class="card-title text-white/80">Menunggu Konfirmasi</h2>
                            <div class="p-2 bg-white/20 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg></div>
                        </div>
                        <p class="text-4xl font-extrabold mt-2">{{ $stats['menungguKonfirmasi'] }}</p>
                    </div>
                </div>
                <div class="card bg-gradient-to-br from-green-500 to-green-600 text-white shadow-lg">
                    <div class="card-body p-6">
                        <div class="flex justify-between items-start">
                            <h2 class="card-title text-white/80">Aktif Magang</h2>
                            <div class="p-2 bg-white/20 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg></div>
                        </div>
                        <p class="text-4xl font-extrabold mt-2">{{ $stats['aktifMagang'] }}</p>
                    </div>
                </div>
                <div class="card bg-gradient-to-br from-gray-700 to-gray-800 text-white shadow-lg">
                    <div class="card-body p-6">
                        <div class="flex justify-between items-start">
                            <h2 class="card-title text-white/80">Telah Selesai</h2>
                            <div class="p-2 bg-white/20 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg></div>
                        </div>
                        <p class="text-4xl font-extrabold mt-2">{{ $stats['telahSelesai'] }}</p>
                    </div>
                </div>
            </div>

            <form method="GET" action="#">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4 p-4 bg-base-200 rounded-lg">
                    <input type="text" name="search" placeholder="Cari nama atau NIM..."
                        class="input input-bordered w-full md:col-span-2" />
                    <select name="program" class="select select-bordered w-full">
                        <option value="">Semua Program</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->slug }}" @selected(request('category') == $category->slug)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <select name="status" class="select select-bordered w-full">
                        <option value="">Semua Status</option>
                        <option value="Menunggu">Menunggu</option>
                        <option value="Diterima">Diterima</option>
                        <option value="Berlangsung">Berlangsung</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Ditolak">Ditolak</option>
                    </select>
                    <div class="md:col-span-4 flex justify-end gap-2">
                        <button type="submit" class="btn btn-primary">Filter</button>
                        <a href="{{ route('mitra.index') }}" class="btn btn-ghost">Reset</a>
                    </div>
                </div>
            </form>

            <!-- Tabel Manajemen Pelamar -->
            <div class="overflow-x-auto ">
                <table class="table">
                    <thead class="bg-base-200">
                        <tr>
                            <th>Nama Mahasiswa</th>
                            <th>Program Dilamar</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pendaftarans as $pendaftaran)
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask mask-squircle w-12 h-12"><img
                                                    src="{{ $pendaftaran->mahasiswa->foto_profil ? asset('storage/' . $pendaftaran->mahasiswa->foto_profil) : 'https://placehold.co/128x128/E0E0E0/757575?text=' . $pendaftaran->mahasiswa->nama }}"
                                                    alt="Avatar" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-bold truncate">{{ $pendaftaran->mahasiswa->nama }}</div>
                                            <div class="text-sm opacity-50">{{ $pendaftaran->mahasiswa->nim }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $pendaftaran->program_magang->judul }}</td>
                                <td>{{ \Carbon\Carbon::parse($pendaftaran->created_at)->isoFormat('D MMMM YYYY') }}</td>
                                <td>
                                    <div
                                        class="badge badge-ghost @if ($pendaftaran->status == 'Menunggu') text-purple-800 bg-purple-100
                                        @elseif($pendaftaran->status == 'Diterima')
                                            text-amber-800 bg-amber-100
                                            @elseif($pendaftaran->status == 'Ditolak')
                                                        text-rose-800 bg-rose-100
                                                    @elseif($pendaftaran->status == 'Berlangsung')
                                                            text-emerald-800 bg-emerald-100
                                                            @elseif($pendaftaran->status == 'Selesai')
                                                            text-sky-800 bg-sky-100 @endif font-semibold">
                                        {{ $pendaftaran->status }}
                                    </div>
                                </td>

                                @if ($pendaftaran->status == 'Diterima')
                                    <td class="text-center">
                                        <form action="{{ route('mitra.index.togglemhs', $pendaftaran) }}" method="post">
                                            @csrf
                                            @method('patch')
                                            <button class="btn btn-info text-white btn-sm truncate" name="status"
                                                value="Berlangsung">Ubah menjadi Berlangsung</button>
                                        </form>
                                    </td>
                                @elseif($pendaftaran->status == 'Berlangsung')
                                    <td class="text-center">
                                        <form action="{{ route('mitra.index.togglemhs', $pendaftaran) }}" method="post">
                                            @csrf
                                            @method('patch')
                                            <button class="btn btn-info text-white btn-sm truncate" name="status"
                                                value="Selesai">Ubah ke Selesai</button>
                                        </form>
                                    </td>
                                @elseif ($pendaftaran->status == 'Menunggu')
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm truncate btn-detail" {{-- <== Tambah class 'btn-detail' --}}
                                            data-nama="{{ $pendaftaran->mahasiswa->nama }}"
                                            data-universitas="{{ $pendaftaran->mahasiswa->universitas }}"
                                            data-jurusan="{{ $pendaftaran->mahasiswa->jurusan }}"
                                            data-email="{{ $pendaftaran->mahasiswa->user->email }}"
                                            data-nohp="{{ $pendaftaran->mahasiswa->no_hp }}"
                                            data-foto="{{ $pendaftaran->mahasiswa->foto_profil ? asset('storage/' . $pendaftaran->mahasiswa->foto_profil) : 'https://placehold.co/300x400/E0E0E0/757575?text=' . $pendaftaran->mahasiswa->nama }}"
                                            data-cv-url="{{ asset('storage/' . $pendaftaran->file_cv) }}"
                                            {{-- Sesuaikan path --}}
                                            data-transkrip-url="{{ asset('storage/' . $pendaftaran->transkrip_nilai) }}"
                                            {{-- Sesuaikan path --}}
                                            data-action-url="{{ route('mitra.index.togglemhs', $pendaftaran) }}">
                                            {{-- Ganti dengan route-mu yg benar --}}
                                            Tinjau Lamaran
                                        </button>
                                    </td>
                                @elseif($pendaftaran->status == 'Selesai')
                                    <td class="text-center">
                                        <span class="text-gray-800 bg-gray-100 rounded-md">None</span>
                                    </td>
                                @elseif($pendaftaran->status == 'Ditolak')
                                    <td class="text-center">
                                        <span class="text-gray-800 bg-gray-100 rounded-md">None</span>
                                    </td>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-12">
                                    <p class="text-gray-500">Tidak ada pelamar yang cocok dengan filter Anda.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('modals')
    <dialog id="detail_pelamar_modal" class="modal modal-bottom sm:modal-middle ">
        <div class="modal-box w-11/12 max-w-3xl overflow-y-auto">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-2xl mb-4">Detail Pelamar</h3>

            {{-- Kerangka Detail Pelamar (TANPA LOOP) --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-1">
                    <img id="modal-foto" src="" alt="Foto Profil" class="rounded-lg w-full">
                </div>
                <div class="md:col-span-2 space-y-4">
                    <div>
                        <div class="text-sm font-semibold text-gray-400">Nama Lengkap</div>
                        <div id="modal-nama" class="text-lg text-gray-800"></div>
                    </div>
                    <div>
                        <div class="text-sm font-semibold text-gray-400">Universitas</div>
                        <div id="modal-universitas" class="text-lg text-gray-800"></div>
                    </div>
                    <div>
                        <div class="text-sm font-semibold text-gray-400">Jurusan</div>
                        <div id="modal-jurusan" class="text-lg text-gray-800"></div>
                    </div>
                    <div>
                        <div class="text-sm font-semibold text-gray-400">Email</div>
                        <div id="modal-email" class="text-lg text-gray-800"></div>
                    </div>
                    <div>
                        <div class="text-sm font-semibold text-gray-400">No. Handphone</div>
                        <div id="modal-nohp" class="text-lg text-gray-800"></div>
                    </div>
                    <div class="divider"></div>
                    <div class="flex flex-col gap-4">
                        <a id="modal-cv-link" href="#" class="btn btn-outline btn-primary text-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z"
                                    clip-rule="evenodd" />
                            </svg> Unduh CV
                        </a>
                        <a id="modal-transkrip-link" href="#" class="btn btn-outline btn-secondary text-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z"
                                    clip-rule="evenodd" />
                            </svg> Unduh Transkrip
                        </a>
                    </div>
                </div>
            </div>

            <div class="modal-action mt-6 pt-4 border-t">
                {{-- Form untuk Aksi (action-nya akan diisi oleh JS) --}}
                <form id="modal-action-form" action="" method="POST" class="flex-grow flex gap-2 justify-end">
                    @csrf
                    @method('PATCH')
                    <button type="submit" name="status" value="Ditolak" class="btn btn-error text-white">Tolak
                        Lamaran</button>
                    <button type="submit" name="status" value="Diterima" class="btn btn-success text-white">Setujui
                        Lamaran</button>
                </form>
            </div>
        </div>
    </dialog>
    <script>
        // Pastikan DOM sudah selesai dimuat sebelum menjalankan script
        document.addEventListener('DOMContentLoaded', function() {

            // Ambil semua tombol dengan class 'btn-detail'
            const detailButtons = document.querySelectorAll('.btn-detail');

            // Ambil elemen-elemen di dalam modal
            const modal = document.getElementById('detail_pelamar_modal');
            const modalFoto = document.getElementById('modal-foto');
            const modalNama = document.getElementById('modal-nama');
            const modalUniversitas = document.getElementById('modal-universitas');
            const modalJurusan = document.getElementById('modal-jurusan');
            const modalEmail = document.getElementById('modal-email');
            const modalNohp = document.getElementById('modal-nohp');
            const modalCvLink = document.getElementById('modal-cv-link');
            const modalTranskripLink = document.getElementById('modal-transkrip-link');
            const modalActionForm = document.getElementById('modal-action-form');

            // Tambahkan event listener untuk setiap tombol
            detailButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // 1. Ambil semua data dari atribut 'data-*' tombol yang diklik
                    const data = this.dataset;

                    // 2. Isi konten modal dengan data yang sudah diambil
                    modalFoto.src = data.foto;
                    modalNama.textContent = data.nama;
                    modalUniversitas.textContent = data.universitas;
                    modalJurusan.textContent = data.jurusan;
                    modalEmail.textContent = data.email;
                    modalNohp.textContent = data.nohp;
                    modalCvLink.href = data.cvUrl;
                    modalTranskripLink.href = data.transkripUrl;
                    modalActionForm.action = data.actionUrl;

                    // 3. Tampilkan modalnya
                    modal.showModal();
                });
            });
        });
    </script>
@endsection
