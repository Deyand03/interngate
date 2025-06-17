@extends('layouts.sidebar')

@section('content')
    <div class="p-6 md:p-8">
        <!-- Header Halaman -->
        <header class="mb-8">
            <h1 class="text-3xl font-extrabold text-gray-800">Kelola Program Magang</h1>
            <p class="text-gray-500 mt-1">Buat, edit, dan kelola semua program magang yang ditawarkan oleh perusahaan Anda.
            </p>
        </header>

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

                <!-- Tabel Data Program -->
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
                            <!--
                                        // ===================================================================
                                        // SPACE-BACKEND: Integrasi Backend Dimulai Di Sini
                                        // ===================================================================
                                        {{-- // Gunakan loop @forelse untuk menampilkan data dari database.
                        // Contoh: @forelse ($programs as $program)
                        //     ... (kode tr untuk setiap program)
                        // @empty
                        //     ... (kode tr untuk placeholder di bawah)
                        // @endforelse --}}
                                        // ===================================================================
                                        -->

                            <!-- Contoh Data 1: Lowongan Buka -->
                            <tr>
                                <td>
                                    <div class="font-bold">Backend Web Developer (Laravel)</div>
                                    <div class="text-sm opacity-60">Kategori: Web Development</div>
                                </td>
                                <td class="text-center">5</td>
                                <td class="text-center"><a href="#" class="link link-primary font-semibold">15
                                        Pelamar</a></td>
                                <td class="text-center">
                                    <div class="badge badge-success text-white">Buka</div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown dropdown-end">
                                        <div tabindex="0" role="button" class="btn btn-sm btn-ghost">Opsi <i
                                                class="fa-solid fa-chevron-down ml-1"></i></div>
                                        <ul tabindex="0"
                                            class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                            <li><a><i class="fa-solid fa-users"></i> Lihat Pelamar</a></li>
                                            {{-- Tombol ini akan membuka modal edit --}}
                                            <li><a onclick="edit_program_modal.showModal()"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit Program</a></li>
                                            <li><a><i class="fa-solid fa-lock"></i> Tutup Lowongan</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="font-bold">UI/UX Designer (Figma)</div>
                                    <div class="text-sm opacity-60">Kategori: Desain Grafis</div>
                                </td>
                                <td class="text-center">3</td>
                                <td class="text-center"><a href="#" class="link link-primary font-semibold">45
                                        Pelamar</a></td>
                                <td class="text-center">
                                    <div class="badge badge-neutral">Tutup</div>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown dropdown-end">
                                        <div tabindex="0" role="button" class="btn btn-sm btn-ghost">Opsi <i
                                                class="fa-solid fa-chevron-down ml-1"></i></div>
                                        <ul tabindex="0"
                                            class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                            <li><a><i class="fa-solid fa-users"></i> Lihat Pelamar</a></li>
                                            <li><a onclick="edit_program_modal.showModal()"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit Program</a></li>
                                            <li><a><i class="fa-solid fa-lock-open"></i> Buka Lowongan</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Placeholder jika tidak ada data -->
                            {{--
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-12">
                                <div class="flex flex-col items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                    <p class="text-gray-500 mt-4 text-lg">Anda belum memiliki program magang.</p>
                                    <p class="text-gray-400 text-sm">Buat program pertama Anda untuk mulai merekrut.</p>
                                    <button class="btn btn-primary btn-sm mt-6" onclick="tambah_program_modal.showModal()">Buat Program Sekarang</button>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                        --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')
    <dialog id="tambah_program_modal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box w-11/12 max-w-6xl p-0">
            <!-- Header Modal -->
            <div class="sticky top-0 bg-base-100 p-6 z-10 border-b">
                <h3 class="font-bold text-2xl">Buat Program Magang Baru</h3>
                <p class="text-sm text-gray-500 mt-1">Isi detail program yang akan ditawarkan kepada mahasiswa.</p>
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-4 top-4">✕</button>
                </form>
            </div>

            <!-- Form Content (Scrollable) -->
            <form method="post" action="#" class="max-h-[70vh] overflow-y-auto">
                {{-- SPACE-BACKEND: Ganti action, dan tambahkan @csrf --}}
                <div class="p-6 space-y-6">
                    <!-- Bagian Informasi Dasar -->
                    <div class="space-y-4">
                        <div class="form-control w-full">
                            <label class="label"><span class="label-text font-semibold">Judul Program</span></label>
                            <input type="text" name="judul" placeholder="cth: Backend Web Developer (Laravel)"
                                class="input input-bordered w-full" required />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Kategori Program</span></label>
                                <select name="id_category" class="select select-bordered w-full" required>
                                    <option></option>
                                    <!-- SPACE-BACKEND: Loop data kategori dari DB -->
                                    <option value="1">Web Development</option>
                                    <option value="2">Mobile Development</option>
                                    <option value="3">Desain Grafis</option>
                                    <option value="4">Digital Marketing</option>
                                </select>
                            </div>
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Kuota Peserta</span></label>
                                <input type="number" name="kuota" placeholder="cth: 5"
                                    class="input input-bordered w-full" required />
                            </div>
                        </div>
                    </div>

                    <!-- Bagian Deskripsi & Kualifikasi -->
                    <div class="space-y-4">
                        <div class="form-control w-full">
                            <label class="label"><span class="label-text font-semibold">Deskripsi Program</span></label>
                            <textarea name="deskripsi_program" class="textarea textarea-bordered h-24 w-full"
                                placeholder="Jelaskan tentang tugas, tanggung jawab, dan apa yang akan dipelajari mahasiswa..." required></textarea>
                        </div>
                        <div class="form-control w-full">
                            <label class="label"><span class="label-text font-semibold">Kualifikasi</span></label>
                            <textarea name="kualifikasi" class="textarea textarea-bordered w-full" rows="5"
                                placeholder="Sebutkan kualifikasi yang dibutuhkan, pisahkan setiap poin dengan baris baru..." required></textarea>
                        </div>
                    </div>

                    <!-- Bagian Jadwal -->
                    <div class="space-y-5">
                        <div class="divider">Jadwal Program</div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="form-control w-full">
                                <label class="label w-full"><span
                                        class="label-text text-center text-md font-semibold w-full">Batas
                                        Pendaftaran</span></label>
                                <input type="date" name="batas_pendaftaran" class="input input-bordered w-full"
                                    required />
                            </div>
                            <div class="form-control w-full">
                                <label class="label w-full"><span class="label-text w-full text-center font-semibold">Awal
                                        Magang</span></label>
                                <input type="date" name="awal_magang" class="input input-bordered w-full" required />
                            </div>
                            <div class="form-control w-full">
                                <label class="label w-full"><span
                                        class="label-text w-full text-center font-semibold">Selesai Magang</span></label>
                                <input type="date" name="selesai_magang" class="input input-bordered w-full"
                                    required />
                            </div>
                        </div>
                    </div>

                    <!-- Bagian Gambar Banner -->
                    <div class="form-control w-full">
                        <label class="label"><span class="label-text font-semibold">Gambar Banner Program
                                (Opsional)</span></label>
                        <input type="file" name="gambar"
                            class="file-input file-input-primary file-input-bordered w-full" />
                        <div class="label">
                            <span class="label-text-alt">Rekomendasi ukuran: 1200x400 pixels.</span>
                        </div>
                    </div>
                </div>

                <!-- Tombol Aksi (Footer Modal) -->
                <div class="modal-action sticky bottom-0 bg-base-100 pt-4 p-6 border-t">
                    <button type="button" class="btn btn-error" onclick="tambah_program_modal.close()">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan dan Publikasikan</button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <dialog id="edit_program_modal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box w-11/12 max-w-6xl p-0">
            <!-- Header Modal -->
            <div class="sticky top-0 bg-base-100 p-6 z-10 border-b">
                <h3 class="font-bold text-2xl">Buat Program Magang Baru</h3>
                <p class="text-sm text-gray-500 mt-1">Isi detail program yang akan ditawarkan kepada mahasiswa.</p>
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-4 top-4">✕</button>
                </form>
            </div>

            <!-- Form Content (Scrollable) -->
            <form method="post" action="#" class="max-h-[70vh] overflow-y-auto">
                {{-- SPACE-BACKEND: Ganti action, dan tambahkan @csrf --}}
                <div class="p-6 space-y-6">
                    <!-- Bagian Informasi Dasar -->
                    <div class="space-y-4">
                        <div class="form-control w-full">
                            <label class="label"><span class="label-text font-semibold">Judul Program</span></label>
                            <input type="text" name="judul" placeholder="cth: Backend Web Developer (Laravel)"
                                class="input input-bordered w-full" required />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Kategori Program</span></label>
                                <select name="id_category" class="select select-bordered w-full" required>
                                    <option></option>
                                    <!-- SPACE-BACKEND: Loop data kategori dari DB -->
                                    <option value="1">Web Development</option>
                                    <option value="2">Mobile Development</option>
                                    <option value="3">Desain Grafis</option>
                                    <option value="4">Digital Marketing</option>
                                </select>
                            </div>
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Kuota Peserta</span></label>
                                <input type="number" name="kuota" placeholder="cth: 5"
                                    class="input input-bordered w-full" required />
                            </div>
                        </div>
                    </div>

                    <!-- Bagian Deskripsi & Kualifikasi -->
                    <div class="space-y-4">
                        <div class="form-control w-full">
                            <label class="label"><span class="label-text font-semibold">Deskripsi Program</span></label>
                            <textarea name="deskripsi_program" class="textarea textarea-bordered h-24 w-full"
                                placeholder="Jelaskan tentang tugas, tanggung jawab, dan apa yang akan dipelajari mahasiswa..." required></textarea>
                        </div>
                        <div class="form-control w-full">
                            <label class="label"><span class="label-text font-semibold">Kualifikasi</span></label>
                            <textarea name="kualifikasi" class="textarea textarea-bordered w-full" rows="5"
                                placeholder="Sebutkan kualifikasi yang dibutuhkan, pisahkan setiap poin dengan baris baru..." required></textarea>
                        </div>
                    </div>

                    <!-- Bagian Jadwal -->
                    <div class="space-y-5">
                        <div class="divider">Jadwal Program</div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="form-control w-full">
                                <label class="label w-full"><span
                                        class="label-text text-center text-md font-semibold w-full">Batas
                                        Pendaftaran</span></label>
                                <input type="date" name="batas_pendaftaran" class="input input-bordered w-full"
                                    required />
                            </div>
                            <div class="form-control w-full">
                                <label class="label w-full"><span class="label-text w-full text-center font-semibold">Awal
                                        Magang</span></label>
                                <input type="date" name="awal_magang" class="input input-bordered w-full" required />
                            </div>
                            <div class="form-control w-full">
                                <label class="label w-full"><span
                                        class="label-text w-full text-center font-semibold">Selesai Magang</span></label>
                                <input type="date" name="selesai_magang" class="input input-bordered w-full"
                                    required />
                            </div>
                        </div>
                    </div>

                    <!-- Bagian Gambar Banner -->
                    <div class="form-control w-full">
                        <label class="label"><span class="label-text font-semibold">Gambar Banner Program
                                (Opsional)</span></label>
                        <input type="file" name="gambar"
                            class="file-input file-input-primary file-input-bordered w-full" />
                        <div class="label">
                            <span class="label-text-alt">Rekomendasi ukuran: 1200x400 pixels.</span>
                        </div>
                    </div>
                </div>

                <!-- Tombol Aksi (Footer Modal) -->
                <div class="modal-action sticky bottom-0 bg-base-100 pt-4 p-6 border-t">
                    <button type="button" class="btn btn-error" onclick="edit_program_modal.close()">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan dan Publikasikan</button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    
@endsection
