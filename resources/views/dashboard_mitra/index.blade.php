@extends('layouts.sidebar')

@section('content')
<div class="p-8">
    <!-- Header Dasbor -->
    <header class="mb-8">
        <!-- SPACE-BACKEND: Ganti nama mitra dengan data dari Auth::user()->mitra->nama_perusahaan -->
        <h1 class="text-3xl font-extrabold text-gray-800">Dashboard PT. Teknologi Maju</h1>
        <p class="text-gray-500 mt-1">Selamat datang! Kelola semua pendaftaran magang Anda di sini.</p>
    </header>

    <!-- Kartu Statistik -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Card 1: Total Pelamar -->
        <div class="card bg-gradient-to-br from-blue-500 to-blue-600 text-white shadow-lg">
            <div class="card-body">
                <div class="flex justify-between items-start">
                    <h2 class="card-title text-white/80">Total Pelamar</h2>
                    <div class="p-2 bg-white/20 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                    </div>
                </div>
                <!-- SPACE-BACKEND: Ganti angka ini dengan count dari DB -->
                <p class="text-5xl font-extrabold mt-2">128</p>
            </div>
        </div>
        <!-- Card 2: Menunggu Konfirmasi -->
        <div class="card bg-gradient-to-br from-yellow-400 to-yellow-500 text-white shadow-lg">
            <div class="card-body">
                <div class="flex justify-between items-start">
                    <h2 class="card-title text-white/80">Menunggu Konfirmasi</h2>
                    <div class="p-2 bg-white/20 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </div>
                </div>
                <!-- SPACE-BACKEND: Ganti angka ini dengan count dari DB (status='pending') -->
                <p class="text-5xl font-extrabold mt-2">15</p>
            </div>
        </div>
        <!-- Card 3: Aktif Magang -->
        <div class="card bg-gradient-to-br from-green-500 to-green-600 text-white shadow-lg">
            <div class="card-body">
                <div class="flex justify-between items-start">
                    <h2 class="card-title text-white/80">Aktif Magang</h2>
                    <div class="p-2 bg-white/20 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    </div>
                </div>
                <!-- SPACE-BACKEND: Ganti angka ini dengan count dari DB (status='berlangsung') -->
                <p class="text-5xl font-extrabold mt-2">8</p>
            </div>
        </div>
        <!-- Card 4: Magang Selesai -->
        <div class="card bg-gradient-to-br from-gray-700 to-gray-800 text-white shadow-lg">
            <div class="card-body">
                <div class="flex justify-between items-start">
                    <h2 class="card-title text-white/80">Telah Selesai</h2>
                    <div class="p-2 bg-white/20 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                </div>
                <!-- SPACE-BACKEND: Ganti angka ini dengan count dari DB (status='selesai') -->
                <p class="text-5xl font-extrabold mt-2">42</p>
            </div>
        </div>
    </div>
    
    <form method="GET" action="#">
         <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4 p-4 bg-base-200 rounded-lg">
            <input type="text" name="search" placeholder="Cari nama atau NIM..." class="input input-bordered w-full md:col-span-2" />
            <select name="program" class="select select-bordered w-full">
                <option value="">Semua Program</option>
                <!-- SPACE-BACKEND: Loop program magang milik mitra ini -->
                <option value="1">Backend Web Developer</option>
                <option value="2">UI/UX Designer</option>
            </select>
            <select name="status" class="select select-bordered w-full">
                <option value="">Semua Status</option>
                <!-- SPACE-BACKEND: Loop status dari enum -->
                <option value="pending">Pending</option>
                <option value="diterima">Diterima</option>
                <option value="ditolak">Ditolak</option>
            </select>
            <div class="md:col-span-4 flex justify-end gap-2">
                <button type="submit" class="btn btn-primary">Filter</button>
                 <a href="#" class="btn btn-ghost">Reset</a>
            </div>
        </div>
    </form>
    
    <!-- Tabel Manajemen Pelamar -->
    <div class="overflow-x-auto">
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
                <!-- 
                // ===================================================================
                // SPACE-BACKEND: Integrasi Backend Dimulai Di Sini
                // ===================================================================
                {{-- // Gunakan loop @forelse untuk menampilkan data dari database.
                // Contoh: @forelse ($pendaftarans as $pendaftaran) --}}
                // ===================================================================
                --
                <!-- Contoh Kasus 1: Status Pending -->
                <tr>
                    <td>
                        <div class="flex items-center gap-3">
                            <div class="avatar"><div class="mask mask-squircle w-12 h-12"><img src="https://placehold.co/128x128/E0E0E0/757575?text=B" alt="Avatar" /></div></div>
                            <div>
                                <div class="font-bold">Budi Sanjaya</div>
                                <div class="text-sm opacity-50">F1E123001</div>
                            </div>
                        </div>
                    </td>
                    <td>Backend Web Developer</td>
                    <td>12 Juni 2025</td>
                    <td><div class="badge badge-warning text-white font-semibold">Pending</div></td>
                    <td class="text-center">
                        <button class="btn btn-primary btn-sm" onclick="detail_pelamar_modal.showModal()">Tinjau Lamaran</button>
                    </td>
                </tr
                <!-- Contoh Kasus 2: Status Diterima -->
                <tr>
                    <td>
                        <div class="flex items-center gap-3">
                            <div class="avatar"><div class="mask mask-squircle w-12 h-12"><img src="https://placehold.co/128x128/E0E0E0/757575?text=A" alt="Avatar" /></div></div>
                            <div>
                                <div class="font-bold">Ani Suryani</div>
                                <div class="text-sm opacity-50">F1E123002</div>
                            </div>
                        </div>
                    </td>
                    <td>Backend Web Developer</td>
                    <td>11 Juni 2025</td>
                    <td><div class="badge badge-success text-white font-semibold">Diterima</div></td>
                    <td class="text-center">
                        <div class="dropdown dropdown-end">
                            <div tabindex="0" role="button" class="btn btn-sm btn-ghost">Opsi <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></div>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a onclick="detail_pelamar_modal.showModal()">Lihat Detail</a></li>
                                <li><a>Ubah Status ke Aktif</a></li>
                                <li><a>Ubah Status ke Selesai</a></li>
                            </ul>
                        </div>
                    </td>
                </tr
                 <!-- Contoh Kasus 3: Status Berlangsung -->
                 <tr>
                    <td>
                        <div class="flex items-center gap-3">
                            <div class="avatar"><div class="mask mask-squircle w-12 h-12"><img src="https://placehold.co/128x128/E0E0E0/757575?text=C" alt="Avatar" /></div></div>
                            <div>
                                <div class="font-bold">Citra Lestari</div>
                                <div class="text-sm opacity-50">F1E123003</div>
                            </div>
                        </div>
                    </td>
                    <td>UI/UX Designer</td>
                    <td>10 Juni 2025</td>
                    <td><div class="badge badge-info text-white font-semibold">Berlangsung</div></td>
                    <td class="text-center">
                        <div class="dropdown dropdown-end">
                            <div tabindex="0" role="button" class="btn btn-sm btn-ghost">Opsi <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></div>
                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                <li><a onclick="detail_pelamar_modal.showModal()">Lihat Detail</a></li>
                                <li><a>Ubah Status ke Selesai</a></li>
                            </ul>
                        </div>
                    </td>
                </tr
                 <!-- Contoh Kasus 4: Status Ditolak -->
                 <tr>
                    <td>
                        <div class="flex items-center gap-3">
                            <div class="avatar"><div class="mask mask-squircle w-12 h-12"><img src="https://placehold.co/128x128/E0E0E0/757575?text=D" alt="Avatar" /></div></div>
                            <div>
                                <div class="font-bold">Dodi Firmansyah</div>
                                <div class="text-sm opacity-50">F1E123004</div>
                            </div>
                        </div>
                    </td>
                    <td>UI/UX Designer</td>
                    <td>9 Juni 2025</td>
                    <td><div class="badge badge-error text-white font-semibold">Ditolak</div></td>
                    <td class="text-center">
                        <button class="btn btn-ghost btn-sm" onclick="detail_pelamar_modal.showModal()">Lihat Detail</button>
                    </td>
                </tr>
                 {{-- <!-- SPACE-BACKEND: @empty state --> --}}
                 {{-- 
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-12">
                            <p class="text-gray-500">Tidak ada pelamar yang cocok dengan filter Anda.</p>
                        </td>
                    </tr>
                 --}}
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('modals')
    <dialog id="detail_pelamar_modal" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box w-11/12 max-w-3xl">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-2xl mb-4">Detail Pelamar</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-1">
                <img src="https://placehold.co/300x400/E0E0E0/757575?text=Foto" alt="Foto Profil" class="rounded-lg w-full">
            </div>
            <div class="md:col-span-2 space-y-4">
                 <div>
                    <div class="text-sm font-semibold text-gray-400">Nama Lengkap</div>
                    <div class="text-lg text-gray-800">Budi Sanjaya</div>
                </div>
                <div>
                    <div class="text-sm font-semibold text-gray-400">Universitas</div>
                    <div class="text-lg text-gray-800">Universitas Jambi</div>
                </div>
                <div>
                    <div class="text-sm font-semibold text-gray-400">Jurusan</div>
                    <div class="text-lg text-gray-800">Sistem Informasi</div>
                </div>
                <div>
                    <div class="text-sm font-semibold text-gray-400">Email</div>
                    <div class="text-lg text-gray-800">budi.sanjaya@example.com</div>
                </div>
                <div>
                    <div class="text-sm font-semibold text-gray-400">No. Handphone</div>
                    <div class="text-lg text-gray-800">081234567890</div>
                </div>
                <div class="divider"></div>
                <div class="flex gap-4">
                    <a href="#" class="btn btn-outline btn-primary flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" /></svg>
                        Unduh CV
                    </a>
                    <a href="#" class="btn btn-outline btn-secondary flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" /></svg>
                        Unduh Transkrip
                    </a>
                </div>
            </div>
        </div>
        <div class="modal-action mt-6 pt-4 border-t">
            <!-- Form untuk Aksi -->
            <form action="#" method="POST" class="flex-grow flex gap-2 justify-end">
                <!-- @csrf -->
                <button type="submit" name="status" value="ditolak" class="btn btn-error text-white">Tolak Lamaran</button>
                <button type="submit" name="status" value="diterima" class="btn btn-success text-white">Setujui Lamaran</button>
            </form>
        </div>
    </div>
</dialog>
@endsection
