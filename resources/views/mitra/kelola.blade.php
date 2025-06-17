@extends('layouts.sidebar')

@section('content')
    <div class="p-6 md:p-8">
        <!-- Header Halaman -->
        <header class="mb-8">
            <h1 class="text-3xl font-extrabold text-gray-800">Kelola Program Magang</h1>
            <p class="text-gray-500 mt-1">Buat, edit, dan kelola semua program magang yang ditawarkan oleh perusahaan Anda.
            </p>
        </header>

        @if (session('success'))
            <div role="alert" class="alert alert-success mb-4 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>

        @elseif($errors->any())
            <div role="alert" class="alert alert-error mb-4 shadow-lg flex-col flex items-start justify-start">
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
            </div>
        @endif

        <!-- Tabel Manajemen Program -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-4">
                    <h2 class="card-title text-xl">Daftar Program Magang</h2>
                    <button class="btn btn-primary" onclick="tambah_program_modal.showModal()">
                        <i class="fa-solid fa-plus"></i>
                        Tambah Program Baru
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="table table-zebra">
                        <thead class="bg-base-200">
                            <tr>
                                <th>Judul Program</th>
                                <th class="text-center">Kuota</th>
                                <th class="text-center">Jumlah Pelamar</th>
                                <th class="text-center">Status Lowongan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($programs as $program)
                                <tr>
                                    <td>
                                        <div class="font-bold">{{ $program->judul }}</div>
                                        <div class="text-sm opacity-60">Kategori: {{ $program->category->name ?? '-' }}
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $program->kuota }}</td>
                                    <td class="text-center">
                                        <a href="#" class="text text-primary font-semibold">{{ $program->pendaftaran_count }}
                                            Pelamar</a>
                                    </td>
                                    <td class="text-center">
                                        <div
                                            class="badge {{ $program->status == 'Buka' ? 'badge-success' : 'badge-error' }} text-white">
                                            {{ ucfirst($program->status) }}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown dropdown-end">
                                            <div tabindex="0" role="button" class="btn btn-sm btn-ghost">Opsi <i
                                                    class="fa-solid fa-chevron-down ml-1"></i></div>
                                            <ul tabindex="0"
                                                class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                                <li>
                                                    {{-- SPACE-BACKEND: Arahkan ke halaman pelamar untuk program ini --}}
                                                    <a href="{{ route('mitra.index') }}"><i class="fa-solid fa-users"></i> Lihat
                                                        Pelamar</a>
                                                </li>
                                                <li>
                                                    {{-- Tombol Edit: Mengarah ke route 'edit' --}}
                                                    <a href="{{ route('mitra.program.edit', $program->id) }}">
                                                        <i class="fa-solid fa-pen-to-square"></i> Edit Program
                                                    </a>
                                                </li>
                                                {{-- Tampilkan Opsi Buka/Tutup hanya jika status program belum selesai --}}
                                                @if ($program->status != 'Tutup')
                                                    <li>
                                                        <div class="flex w-full p-0">
                                                            <form action="{{ route('mitra.status', $program) }}" method="POST"
                                                                class="w-full p-0">
                                                                @csrf
                                                                @method('patch')
                                                                <button type="submit" value="Tutup" name="status"
                                                                    class="flex items-center bg-rose-100 gap-2 w-full px-4 py-2 text-left hover:bg-rose-200 rounded-lg">
                                                                    Tutup
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                @elseif ($program->status != 'Buka')
                                                    <li>
                                                        <div class="flex w-full p-0">
                                                            <form action="{{ route('mitra.status', $program) }}" method="POST"
                                                                class="w-full p-0">
                                                                @csrf
                                                                @method('patch')
                                                                <button type="submit" value="Buka" name="status"
                                                                    class="flex items-center bg-emerald-100 gap-2 w-full px-4 py-2 text-left hover:bg-emerald-200 rounded-lg">
                                                                    Buka
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                @endif
                                                <div class="divider my-1"></div>
                                                <li>
                                                    <form action="{{ route('mitra.program.destroy', $program->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="text-error flex items-center gap-2 w-full px-4 py-2 text-left hover:bg-error/10 rounded-lg"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus program ini secara permanen?')">
                                                            <i class="fa-solid fa-trash-can"></i> Hapus Program
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-12">
                                        <div class="flex flex-col items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-300" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                            <p class="text-gray-500 mt-4 text-lg">Anda belum memiliki program magang.</p>
                                            <button class="btn btn-primary btn-sm mt-6"
                                                onclick="edit_biodata_modal.showModal()">Buat
                                                Program Pertama Anda</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class=" mt-4">
                    {{ $programs->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')
    <dialog id="tambah_program_modal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box w-11/12 max-w-6xl p-0">
            <div class="sticky top-0 bg-base-100 p-6 z-10 border-b">
                <h3 class="font-bold text-2xl">Buat Program Magang Baru</h3>
                <p class="text-sm text-gray-500 mt-1">Isi detail program yang akan ditawarkan kepada mahasiswa.</p>
                <form method="dialog"><button class="btn btn-sm btn-circle btn-ghost absolute right-4 top-4">✕</button>
                </form>
            </div>

            <form method="POST" action="{{ route('mitra.program.store') }}" enctype="multipart/form-data"
                class="overflow-y-auto">
                @csrf
                <div class="p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-2">
                        <!-- Kolom Kiri Form -->
                        <div class="space-y-4">
                            <div class="divider lg:hidden text-sm font-semibold">Info Dasar</div>
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Judul Program</span></label>
                                <input type="text" name="judul" placeholder="cth: Backend Web Developer (Laravel)"
                                    class="input input-bordered w-full" />
                            </div>
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Kategori
                                        Program</span></label>
                                <select name="id_category" class="select select-bordered w-full">
                                    <option disabled selected>Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Kuota Peserta</span></label>
                                <input type="number" name="kuota" placeholder="cth: 5"
                                    class="input input-bordered w-full" />
                            </div>
                        </div>
                        <!-- Kolom Kanan Form -->
                        <div class="space-y-4">
                            <div class="divider lg:hidden text-sm font-semibold">Deskripsi & Kualifikasi</div>
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Deskripsi
                                        Program</span></label>
                                <textarea name="deskripsi" class="textarea textarea-bordered h-24"
                                    placeholder="Jelaskan tentang tugas, tanggung jawab..."></textarea>
                            </div>
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Kualifikasi</span></label>
                                <textarea name="kualifikasi" class="textarea textarea-bordered h-24"
                                    placeholder="Sebutkan kualifikasi yang dibutuhkan..."></textarea>
                            </div>
                        </div>
                        <!-- Bagian Jadwal & Banner (Full Width) -->
                        <div class="lg:col-span-2">
                            <div class="divider text-sm font-semibold">Penjadwalan & Media</div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="form-control w-full">
                                    <label class="label"><span class="label-text font-semibold">Batas
                                            Pendaftaran</span></label>
                                    <input type="date" name="batas_pendaftaran" class="input input-bordered w-full" />
                                </div>
                                <div class="form-control w-full">
                                    <label class="label"><span class="label-text font-semibold">Awal
                                            Magang</span></label>
                                    <input type="date" name="awal_magang" class="input input-bordered w-full" />
                                </div>
                                <div class="form-control w-full">
                                    <label class="label"><span class="label-text font-semibold">Selesai
                                            Magang</span></label>
                                    <input type="date" name="akhir_magang" class="input input-bordered w-full" />
                                </div>
                            </div>
                            <div class="form-control w-full mt-4">
                                <label class="label"><span class="label-text font-semibold">Gambar Banner
                                        (Opsional)</span></label>
                                <input type="file" name="gambar" class="file-input file-input-bordered w-full"
                                    accept="image/*" />
                                <div class="label"><span class="label-text-alt">Rekomendasi ukuran: 1200x400
                                        pixels.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-action sticky bottom-0 bg-base-100 pt-4 p-6 border-t z-10">
                    <button type="button" class="btn" onclick="tambah_program_modal.close()">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan dan Publikasikan</button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop"><button>close</button></form>
    </dialog>

@endsection