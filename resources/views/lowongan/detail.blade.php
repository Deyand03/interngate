<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratinjau Desain v2 - Detail Program Magang</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
    tailwind.config = {
      daisyui: {
        themes: ["light", {
          mytheme: {
            "primary": "#00529E", // Biru Tua dari screenshot
            "secondary": "#FFD100", // Kuning dari screenshot
            "accent": "#1FB2A6",
            "neutral": "#2a323c",
            "base-100": "#ffffff",
            "info": "#3abff8",
            "success": "#36d399",
            "warning": "#fbbd23",
            "error": "#f87272",
          },
        }],
      },
    }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Sedikit abu-abu untuk background */
        }
    </style>
</head>
<body data-theme="mytheme">

    <div class="navbar bg-base-100 shadow-sm sticky top-0 z-50">
      <div class="flex-1">
        <a class="btn btn-ghost text-xl font-bold text-primary">InternGate</a>
      </div>
      <div class="flex-none">
        <ul class="menu menu-horizontal px-1 font-semibold">
          <li><a>Beranda</a></li>
          <li><a>Lowongan</a></li>
          <li><a>Perusahaan</a></li>
        </ul>
      </div>
    </div>

    <div class="container mx-auto max-w-6xl p-4 md:p-8">

        <div class="mb-8 overflow-hidden rounded-2xl shadow-lg">
            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop"
                 alt="Foto Sampul Perusahaan"
                 class="h-64 w-full object-cover">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="md:col-span-2">
                <div class="card bg-base-100 shadow-xl border border-slate-200">
                    <div class="card-body">
                        <h1 class="card-title text-3xl md:text-4xl font-bold text-slate-800">
                            Backend Developer Intern (Golang)
                        </h1>
                        <a href="#" class="text-xl font-medium text-primary hover:underline">
                            Nama Perusahaan Keren
                        </a>
                        <p class="text-slate-500 mt-1">
                            Jakarta Selatan, DKI Jakarta
                        </p>

                        <div class="flex flex-wrap gap-2 mt-4">
                            <div class="badge badge-lg bg-primary text-white font-medium py-4 px-3">Web Development</div>
                            <div class="badge badge-lg bg-emerald-100 text-emerald-800 font-medium py-4 px-3">Kuota: 5 Peserta</div>
                            <div class="badge badge-lg bg-sky-100 text-sky-800 font-medium py-4 px-3">3 Bulan</div>
                        </div>

                        <div class="divider"></div>

                        <div class="prose max-w-none text-slate-600">
                            <h3 class="font-semibold text-slate-800">Deskripsi Program</h3>
                            <p>
                                Kami mencari intern yang bersemangat untuk belajar dan berkontribusi dalam pengembangan backend service kami menggunakan Golang, gRPC, dan arsitektur microservices. Anda akan bekerja sama dengan tim engineer senior untuk membangun fitur-fitur baru dan memelihara service yang sudah ada.
                            </p>

                            <h3 class="font-semibold text-slate-800 mt-6">Tanggung Jawab</h3>
                            <ul>
                                <li>Membantu desain, pengembangan, dan implementasi API backend.</li>
                                <li>Menulis kode yang bersih, efisien, dan terdokumentasi dengan baik.</li>
                                <li>Berkolaborasi dengan tim frontend untuk integrasi layanan.</li>
                                <li>Melakukan testing dan debugging untuk memastikan kualitas kode.</li>
                            </ul>

                            <h3 class="font-semibold text-slate-800 mt-6">Kualifikasi</h3>
                            <ul>
                                <li>Mahasiswa tingkat akhir atau fresh graduate dari jurusan Teknik Informatika, Ilmu Komputer, atau sejenisnya.</li>
                                <li>Memiliki pemahaman dasar tentang bahasa pemrograman Go (Golang).</li>
                                <li>Familiar dengan konsep RESTful API dan gRPC adalah nilai plus.</li>
                                <li>Memiliki semangat belajar yang tinggi dan kemampuan problem-solving yang baik.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-1">
                <div class="sticky top-28 space-y-6"> <div class="card bg-base-100 shadow-xl border border-slate-200">
                        <div class="card-body">
                            <h2 class="card-title text-lg font-bold">Lamar Posisi Ini</h2>
                            <p class="text-sm text-slate-500">
                                Batas pendaftaran: 14 Juli 2025
                            </p>
                            <div class="card-actions justify-end mt-4">
                                <button class="btn btn-secondary text-slate-900 w-full font-bold">
                                    Lamar Sekarang
                                </button>
                                <button class="btn btn-outline btn-primary w-full">
                                    Simpan Lowongan
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-base-100 shadow-xl border border-slate-200">
                        <div class="card-body items-center text-center">
                            <div class="avatar">
                                <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                    <img src="https://ui-avatars.com/api/?name=PT&background=00529E&color=fff&size=128" alt="Logo Perusahaan" />
                                </div>
                            </div>
                            <h2 class="card-title mt-4">Nama Perusahaan Keren</h2>
                            <p class="text-sm text-slate-500">
                               Software Development
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
