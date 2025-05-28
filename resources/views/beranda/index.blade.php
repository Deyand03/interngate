@extends('layouts.base')

@section('title', 'Beranda')
@section('content')
<div class="bg-[#2196f3] text-white py-16">
    <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center justify-between px-4">
        {{-- Kiri: Teks --}}
        <div class="lg:w-1/2">
            <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-4">
                Optimasi Skill dan Kompetensi,<br>
                Lebih Siap Kerja dan Wirausaha
            </h1>
            <p class="mb-6 text-white text-lg">
                GAMELAB menghadirkan platform lengkap untuk meningkatkan kompetensi lulusan
                yang siap kerja dan siap wirausaha melalui program pelatihan berbasis proyek (PBL),
                magang <em>online</em> bersertifikat, dan sertifikasi industri.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#" class="btn bg-yellow-400 hover:bg-yellow-500 text-black font-bold">Daftar GRATIS Sekarang</a>
                <a href="#" class="btn bg-sky-200 hover:bg-sky-300 text-black">Menjadi Mitra</a>
            </div>
        </div>

        {{-- Kanan: Gambar dan badge --}}
        <div class="lg:w-1/2 relative mb-12 lg:mb-0">
            <div class="relative w-full max-w-sm mx-auto">
                <img src="{{ asset('images/gamelab-foto.png') }}" alt="Gamelab Person" class="w-full rounded-lg" />
                
                {{-- Badge 1: 4.8/5 --}}
                <div class="absolute top-6 left-[-20px] bg-white px-3 py-1 rounded shadow flex items-center gap-2">
                    <span class="text-yellow-500 text-xl">⭐</span>
                    <span class="text-sm font-semibold text-gray-800">4.8/5<br><span class="text-xs">Tingkat Kepuasan</span></span>
                </div>

                {{-- Badge 2: 100+ Kursus --}}
                <div class="absolute top-16 right-[-40px] bg-white px-3 py-1 rounded shadow flex items-center gap-2">
                    <span class="text-yellow-600">🎓</span>
                    <span class="text-sm font-semibold text-gray-800">100+<br><span class="text-xs">Kursus Pilihan</span></span>
                </div>

                {{-- Badge 3: Gear Icon --}}
                <div class="absolute bottom-[-20px] left-1/2 transform -translate-x-1/2 bg-white p-2 rounded-full shadow">
                    <span class="text-blue-600 text-lg">⚙️</span>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Gamelab Academy Section --}}
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-10">Gamelab Academy</h2>

        {{-- Carousel --}}
        <div class="relative">
            <div class="overflow-hidden">
                <div id="carousel-track" class="flex transition-transform duration-500 ease-in-out space-x-6">
                    {{-- Card 1 --}}
                    <div class="bg-white p-6 rounded-lg shadow w-60 flex-shrink-0 text-center">
                        <img src="{{ asset('images/game-dev.png') }}" alt="Game Development" class="w-20 mx-auto mb-4">
                        <h3 class="font-semibold text-lg">Game Development</h3>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-white p-6 rounded-lg shadow w-60 flex-shrink-0 text-center">
                        <img src="{{ asset('images/web-dev.png') }}" alt="Web Development" class="w-20 mx-auto mb-4">
                        <h3 class="font-semibold text-lg">Web Development</h3>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-white p-6 rounded-lg shadow w-60 flex-shrink-0 text-center">
                        <img src="{{ asset('images/app-dev.png') }}" alt="App Development" class="w-20 mx-auto mb-4">
                        <h3 class="font-semibold text-lg">App Development</h3>
                    </div>

                    {{-- Card 4 --}}
                    <div class="bg-white p-6 rounded-lg shadow w-60 flex-shrink-0 text-center">
                        <img src="{{ asset('images/dev-ops.png') }}" alt="Dev Ops" class="w-20 mx-auto mb-4">
                        <h3 class="font-semibold text-lg">Dev Ops</h3>
                    </div>

                    {{-- Card 5 --}}
                    <div class="bg-white p-6 rounded-lg shadow w-60 flex-shrink-0 text-center">
                        <img src="{{ asset('images/2d-design.png') }}" alt="2D Design" class="w-20 mx-auto mb-4">
                        <h3 class="font-semibold text-lg">2D Design</h3>
                    </div>

                    {{-- Card 6 --}}
                    <div class="bg-white p-6 rounded-lg shadow w-60 flex-shrink-0 text-center">
                        <img src="{{ asset('images/3d-design.png') }}" alt="3D Design" class="w-20 mx-auto mb-4">
                        <h3 class="font-semibold text-lg">3D Design</h3>
                    </div>
                </div>
            </div>

            {{-- Navigasi --}}
            <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-yellow-400 hover:bg-yellow-500 text-black p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-yellow-400 hover:bg-yellow-500 text-black p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</section>

{{-- Mitra GAMELAB --}}
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-10">Mitra <span class="text-blue-600">GAMELAB</span> by Educa</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            {{-- Kolom Judul Kategori --}}
            <div class="bg-white shadow rounded-lg p-6 text-blue-600 font-semibold text-center">
                <p class="text-2xl">500+</p>
                <p>SMA/K Binaan</p>
            </div>

            {{-- Logo Sekolah --}}
            @foreach ([
                'smk-wahid.png', 'smk-2-demak.png', 'smk-gema.png', 'smk-sidoarjo.png',
                'smk-mutiara.png', 'smk-alishlah.png', 'smk-cilacap.png'
            ] as $img)
                <div class="bg-white shadow rounded-lg p-3 flex justify-center items-center">
                    <img src="{{ asset('images/mitra/' . $img) }}" alt="Logo Sekolah" class="max-h-16">
                </div>
            @endforeach

            {{-- Tambahan Card --}}
            <div class="bg-white shadow rounded-lg p-6 flex flex-col justify-center items-center">
                <img src="{{ asset('images/mitra/lainnya.png') }}" alt="lainnya" class="w-10 mb-2">
                <p class="text-center text-sm">dan ratusan sekolah lainnya</p>
            </div>

            {{-- Judul Mitra Kampus --}}
            <div class="bg-white shadow rounded-lg p-6 text-blue-600 font-semibold text-center">
                <p class="text-2xl">30+</p>
                <p>Mitra Kampus</p>
            </div>

            {{-- Logo Kampus --}}
            @foreach ([
                'undip.png', 'polines.png', 'amikom.png', 'udinus.png',
                'isi.png', 'mercu.png', 'polije.png'
            ] as $img)
                <div class="bg-white shadow rounded-lg p-3 flex justify-center items-center">
                    <img src="{{ asset('images/mitra/' . $img) }}" alt="Logo Kampus" class="max-h-16">
                </div>
            @endforeach

            {{-- Tambahan Kampus --}}
            <div class="bg-white shadow rounded-lg p-6 flex flex-col justify-center items-center">
                <img src="{{ asset('images/mitra/lainnya.png') }}" alt="lainnya" class="w-10 mb-2">
                <p class="text-center text-sm">dan ratusan kampus lainnya</p>
            </div>

            {{-- Judul Mitra Industri --}}
            <div class="bg-white shadow rounded-lg p-6 text-blue-600 font-semibold text-center">
                <p class="text-2xl">50+</p>
                <p>Mitra Industri</p>
            </div>

            {{-- Logo Industri --}}
            @foreach ([
                'educa.png', 'qasir.png', 'cicil.png', 'komerce.png',
                'cloudhost.png', 'zahir.png', 'suitmedia.png'
            ] as $img)
                <div class="bg-white shadow rounded-lg p-3 flex justify-center items-center">
                    <img src="{{ asset('images/mitra/' . $img) }}" alt="Logo Industri" class="max-h-16">
                </div>
            @endforeach

            {{-- Tambahan Industri --}}
            <div class="bg-white shadow rounded-lg p-6 flex flex-col justify-center items-center">
                <img src="{{ asset('images/mitra/lainnya.png') }}" alt="lainnya" class="w-10 mb-2">
                <p class="text-center text-sm">dan puluhan industri lainnya</p>
            </div>
        </div>
    </div>
</section>

{{-- Bagian berikutnya seperti "Ekosistem Gamelab" bisa ditambahkan di bawah sini --}}
@endsection
