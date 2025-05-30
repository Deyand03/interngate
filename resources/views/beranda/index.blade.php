@extends('layouts.base')

@section('title', 'Beranda')
@section('content')
<div class="text-white py-16" style="background-color: #C43670;">
  <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center justify-between px-8">
    <div class="lg:w-1/2">
      <h1 class="text-4xl font-bold leading-snug mb-4">
        Siap Magang, Siap Kerja<br> Bersama InternGate
      </h1>
      <p class="mb-6 text-lg">
        InternGate adalah platform pendaftaran magang Universitas Jambi untuk menghubungkan mahasiswa dengan mitra industri IT terbaik di Indonesia.
      </p>
      <div class="flex gap-4">
        <a href="#" class="btn btn-warning text-black">Daftar Sekarang</a>
        <a href="#" class="btn btn-outline btn-accent">Gabung Mitra</a>
      </div>
    </div>
    <div class="lg:w-1/2 relative mb-12 lg:mb-0">
      <div class="relative w-full max-w-sm mx-auto">
        <img src="{{ asset('images/intergate-hero.png') }}" class="w-full rounded-lg shadow-xl" />
        <div class="absolute top-6 left-[-20px] badge badge-lg bg-white text-gray-800 shadow-md">
          ⭐ 4.9/5<br><span class="text-xs">Kepuasan Mitra</span>
        </div>
        <div class="absolute top-16 right-[-40px] badge badge-lg bg-white text-gray-800 shadow-md">
          🎓 150+ Program<br><span class="text-xs">Dari Mitra IT</span>
        </div>
      </div>
    </div>
  </div>
</div>


{{-- Gamelab Academy Section --}}
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-8">
        <h2 class="text-3xl font-bold text-center mb-10">Gamelab Academy</h2>

        {{-- Carousel --}}
        <div class="relative">
            <div class="overflow-hidden">
                <div id="carousel-track" class="flex transition-transform duration-500 ease-in-out space-x-6">
                    {{-- Card 1 --}}
                    <div class="bg-white p-6 rounded-lg shadow w-60 flex-shrink-0 text-center">
                        <img src="https://www.gamelab.id/img/home/icon_academy/Icon_Academy_Broadcasting.png?v=1.0" alt="Game Development" class="w-20 mx-auto mb-4">
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
    <div class="container mx-auto px-8">
        <h2 class="text-3xl font-bold text-center mb-10">Mitra <span class="text-blue-600">InterGate</span></h2>

        @foreach ([
          'Mitra Industri' => ['50+', ['educa.png', 'qasir.png', 'cicil.png', 'komerce.png', 'cloudhost.png', 'zahir.png', 'suitmedia.png']],
        ] as $kategori => [$jumlah, $logos])
        <div class="mb-10">
            <div class="text-center mb-4">
              <p class="text-2xl font-semibold text-blue-600">{{ $jumlah }}</p>
              <p class="font-medium">{{ $kategori }}</p>
            </div>
            <div class="overflow-hidden relative w-full">
                <div class="flex animate-scroll whitespace-nowrap gap-6">
                    @foreach ($logos as $img)
                    <div class="flex-shrink-0 bg-white p-3 shadow rounded flex justify-center items-center h-24 w-40">
                        <img src="{{ asset('images/mitra/' . $img) }}" alt="Logo" class="max-h-16 mx-auto">
                    </div>
                    @endforeach
                        
                    {{-- Duplikat untuk efek looping --}}
                    @foreach ($logos as $img)
                    <div class="flex-shrink-0 bg-white p-3 shadow rounded flex justify-center items-center h-24 w-40">
                        <img src="{{ asset('images/mitra/' . $img) }}" alt="Logo" class="max-h-16 mx-auto">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<style>
@keyframes scroll {
  0%   { transform: translateX(0%); }
  100% { transform: translateX(-50%); }
}

.animate-scroll {
  animation: scroll 15s linear infinite;
}
</style>
{{-- Bagian berikutnya seperti "Ekosistem Gamelab" bisa ditambahkan di bawah sini --}}
@endsection
