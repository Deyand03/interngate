<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lowongan - Backend Developer di PT. Teknologi Maju</title>

    <!-- Tailwind CSS & DaisyUI -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f9fc;
        }
    </style>
</head>
<body>
    {{-- Ganti bagian ini dengan layout utama Anda, contohnya @extends('layouts.base') --}}

    <!-- Header Halaman dengan Banner Perusahaan -->
    <div class="relative h-64 md:h-80 w-full">
        <!-- SPACE-BACKEND: Ganti src dengan 'mitra.banner_perusahaan' dari DB -->
        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop"
             alt="Banner Perusahaan"
             class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- Konten Utama -->
    <main class="container mx-auto px-6 lg:px-20 -mt-24 relative z-20">

        <!-- Kartu Judul dan Info Utama -->
        <div class="card bg-base-100 shadow-xl mb-8">
            <div class="card-body p-6 md:p-8">
                <div class="flex flex-col sm:flex-row items-start gap-6">
                    <div class="avatar -mt-16 sm:-mt-20">
                        <div class="w-24 h-24 md:w-32 md:h-32 rounded-lg bg-white p-2 shadow-lg ring-4 ring-white">
                             <!-- SPACE-BACKEND: Ganti src dengan 'mitra.logo_perusahaan' dari DB -->
                            <img src="https://placehold.co/128x128/187DAB/FFFFFF?text=Mitra" alt="Logo Perusahaan"/>
                        </div>
                    </div>
                    <div class="flex-grow">
                        <!-- SPACE-BACKEND: Ganti dengan 'category.name' dari DB -->
                        <div class="badge badge-primary text-white font-medium">Web Development</div>
                        <!-- SPACE-BACKEND: Ganti dengan 'program_magang.judul' dari DB -->
                        <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-800 mt-2">Backend Web Developer (Laravel)</h1>
                        <div class="flex items-center gap-2 mt-2">
                             <!-- SPACE-BACKEND: Ganti dengan 'mitra.nama_perusahaan' dari DB -->
                            <a href="#" class="text-xl font-medium text-gray-700 hover:underline">PT. Teknologi Maju</a>
                            <!-- SPACE-BACKEND: Ganti dengan 'mitra.alamat_perusahaan' dari DB -->
                            <p class="text-gray-500">• Jakarta Selatan</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Kolom Kiri: Detail Program -->
            <div class="lg:col-span-2 space-y-8">
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <!-- Info Penting dalam bentuk Stats -->
                        <div class="stats stats-vertical md:stats-horizontal shadow-sm bg-blue-50/50 w-full">
                          <div class="stat">
                            <div class="stat-title">Durasi Magang</div>
                             <!-- SPACE-BACKEND: Hitung durasi dari 'awal_magang' dan 'selesai_magang' -->
                            <div class="stat-value text-lg text-primary">3 Bulan</div>
                            <div class="stat-desc text-xs">1 Agu - 31 Okt 2025</div>
                          </div>
                          <div class="stat">
                            <div class="stat-title">Batas Pendaftaran</div>
                            <!-- SPACE-BACKEND: Ganti dengan 'program_magang.batas_pendaftaran' -->
                            <div class="stat-value text-lg text-secondary-focus">14 Juli 2025</div>
                          </div>
                          <div class="stat">
                            <div class="stat-title">Kuota Tersedia</div>
                             <!-- SPACE-BACKEND: Ganti dengan 'program_magang.kuota' -->
                            <div class="stat-value text-lg text-accent">5 Peserta</div>
                          </div>
                        </div>

                        <!-- Deskripsi & Kualifikasi -->
                        <div class="prose max-w-none text-gray-700 mt-8">
                            <h3 class="font-bold text-gray-800 text-xl">Deskripsi Program</h3>
                             <!-- SPACE-BACKEND: Ganti dengan 'program_magang.deskripsi_program' -->
                            <p>Kami mencari intern yang bersemangat untuk belajar dan berkontribusi dalam pengembangan backend service kami menggunakan Laravel, Livewire, dan arsitektur modular. Anda akan bekerja sama dengan tim engineer senior untuk membangun fitur-fitur baru dan memelihara service yang sudah ada.</p>

                            <h3 class="font-bold text-gray-800 mt-8 text-xl">Tanggung Jawab</h3>
                            <!-- SPACE-BACKEND: Ganti dengan 'program_magang.kualifikasi' (format sebagai list) -->
                            <div class="space-y-3 mt-4">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                    <span>Membantu desain, pengembangan, dan implementasi API backend.</span>
                                </div>
                                 <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                    <span>Menulis kode yang bersih, efisien, dan terdokumentasi dengan baik.</span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                    <span>Berkolaborasi dengan tim frontend untuk integrasi layanan.</span>
                                </div>
                            </div>

                            <h3 class="font-bold text-gray-800 mt-8 text-xl">Kualifikasi</h3>
                            <div class="space-y-3 mt-4">
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                    <span>Mahasiswa tingkat akhir atau fresh graduate dari jurusan Teknik Informatika, Ilmu Komputer, atau sejenisnya.</span>
                                </div>
                                 <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                    <span>Memiliki pemahaman dasar tentang bahasa pemrograman PHP dan framework Laravel.</span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                    <span>Memiliki semangat belajar yang tinggi dan kemampuan problem-solving yang baik.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Aksi & Info Mitra -->
            <aside class="lg:col-span-1">
                <div class="sticky top-8 space-y-6">
                    <div class="card bg-gradient-to-br from-[#187DAB] to-blue-700 text-white shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title text-lg font-bold">Lamar Posisi Ini</h2>
                            <p class="text-sm text-white/80">
                                Batas pendaftaran: <strong>14 Juli 2025</strong>
                            </p>
                            <div class="card-actions justify-end mt-4">
                                <button class="btn bg-[#F5C219] hover:bg-[#e0ac00] border-none text-black w-full font-bold">
                                    Lamar Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                     <div class="card bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title text-lg">Tentang Mitra</h2>
                            <div class="prose max-w-none text-sm text-gray-600 mt-2">
                                <!-- SPACE-BACKEND: Ganti dengan 'mitra.deskripsi' -->
                                <p>PT. Teknologi Maju adalah perusahaan terdepan dalam pengembangan solusi perangkat lunak enterprise dan layanan konsultasi IT untuk berbagai industri di Indonesia.</p>
                            </div>
                            <div class="card-actions justify-start mt-4">
                                <a href="#" class="btn btn-primary btn-sm btn-outline">Lihat Profil Mitra</a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
</body>
</html>
