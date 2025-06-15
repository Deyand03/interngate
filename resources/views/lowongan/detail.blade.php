@extends('layouts.base')
@section('title')
    {{ $program->judul }}
@endsection

@section('content')
<!-- Header Halaman dengan Banner Perusahaan -->
    <div class="relative h-64 md:h-80 w-full">
        <!-- SPACE-BACKEND: Ganti src dengan 'mitra.banner_perusahaan' dari DB -->
        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop"
             alt="Banner Perusahaan"
             class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- Konten Utama -->
    <main class="container mx-auto px-6 lg:px-20 -mt-24 relative z-20 pb-16">

        <!-- Kartu Judul dan Info Utama -->
        <div class="card bg-base-100 shadow-xl mb-8">
            <div class="card-body p-6 md:p-8">
                <div class="flex flex-col sm:flex-row items-start gap-6">
                    <div class="avatar -mt-16 sm:-mt-20">
                        <div class="w-24 h-24 md:w-32 md:h-32 rounded-lg bg-white p-2 shadow-lg ring-4 ring-white">
                            <img src="{{ $program->mitra->logo_perusahaan ? asset('storage/' . $program->mitra->logo_perusahaan) : asset('img/placeholder.jpg') }}" alt="Logo Perusahaan"/>                        </div>
                    </div>
                    <div class="flex-grow">
                        <!-- SPACE-BACKEND: Ganti dengan 'category.name' dari DB -->
                        <div class="{{ $program->category->badge_class }} badge badge-md font-medium">{{ $program->category->name }}</div>
                        <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-800 mt-2">{{ $program->judul }}</h1>
                        <div class="flex items-center gap-2 mt-2">
                            <a href="#" class="text-xl font-medium text-gray-700 cursor-auto">{{ $program->mitra->nama_perusahaan }}</a>
                            <p class="text-gray-500">• {{ $program->mitra->alamat_perusahaan }}</p>
                        </div>
                    </div>
                    <div class="badge badge-xl font-semibold {{ $program->status == 'buka' ? 'text-emerald-800 bg-emerald-100' : 'text-rose-800 bg-rose-100' }} ">
                        {{ $program->status }}
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-8">
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <div class="stats stats-vertical md:stats-horizontal shadow-sm bg-blue-50/50 w-full">
                          <div class="stat">
                            <div class="stat-title">Durasi Magang</div>
                            <div class="stat-value text-lg text-primary">{{ $program->durasi }}</div>
                            <div class="stat-desc text-xs">{{ $program->rentang_tanggal }}</div>
                          </div>
                          <div class="stat">
                            <div class="stat-title">Batas Pendaftaran</div>
                            <div class="stat-value text-lg text-secondary-focus">{{ $program->batas_pendaftaran->isoFormat('D MMMM YYYY') }}</div>
                          </div>
                          <div class="stat">
                            <div class="stat-title">Kuota Tersedia</div>
                            <div class="stat-value text-lg text-accent">{{ $program->kuota }}</div>
                          </div>
                        </div>

                        <div class="prose max-w-none text-gray-700 mt-8">
                            <h3 class="font-bold text-gray-800 text-xl">Deskripsi Program</h3>
                            <p>{{ $program->deskripsi }}</p>
                            <h3 class="font-bold text-gray-800 mt-8 text-xl">Kualifikasi</h3>
                            <div class="space-y-3 mt-4">
                                @foreach ($program->kualifikasi_list as $item)
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                    </div>
                                    <span>{{ $item }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Aksi & Info Mitra -->
            <aside class="lg:col-span-1">
                <div class="sticky top-[5rem] space-y-6">
                    <div class="card bg-gradient-to-br from-[#187DAB] to-blue-700 text-white shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title text-lg font-bold">Lamar Posisi Ini</h2>
                            <p class="text-sm text-white/80">
                                Batas pendaftaran: <strong>{{ $program->batas_pendaftaran->isoFormat('D MMMM YYYY') }}</strong>
                            </p>
                            <div class="card-actions justify-end mt-4">
                                <button @disabled($program->status == 'Tutup') class="btn btn-ghost {{ $program->status == 'Tutup' ? 'bg-[#d0a824] cursor-not-allowed' : 'bg-[#F5C219] hover:bg-[#e0ac00]' }} border-none text-black w-full font-bold" >
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
                                <p>{{ $program->mitra->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
@endsection
