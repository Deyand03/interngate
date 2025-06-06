@extends('layouts.base')

@section('title', 'Beranda')
@section('content')
<div class="text-white py-16" style="background-color: #578FCA;">
  <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center justify-between px-40">
    <div class="lg:w-1/2">
      <h1 class="text-4xl font-bold leading-snug mb-4">
        Siap Magang, Siap Kerja<br> Bersama InternGate
      </h1>
      <p class="mb-6 text-lg">
        InternGate adalah platform pendaftaran magang Universitas Jambi untuk menghubungkan mahasiswa dengan mitra industri IT terbaik di Indonesia.
      </p>
      <div class="flex gap-4">
        <a href="#" class="btn btn-warning text-black">Daftar Sekarang</a>
        
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


{{-- InternGate Academy Section --}}
<section class="bg-gray-100 py-10">
  <div class="container mx-auto px-6 md:px-16 lg:px-32">
    <h2 class="text-3xl font-bold text-center mb-12">
      Bidang <span class="text-blue-600">InternGate</span>
    </h2>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
      @foreach ([
        ['title' => 'Game Development', 'img' => 'https://www.gamelab.id/img/home/icon_academy/Icon_Academy_Broadcasting.png?v=1.0'],
        ['title' => 'Web Development', 'img' => asset('images/web-dev.png')],
        ['title' => 'App Development', 'img' => asset('images/app-dev.png')],
        ['title' => 'Dev Ops', 'img' => asset('images/dev-ops.png')],
        ['title' => '2D Design', 'img' => asset('images/2d-design.png')],
        ['title' => '3D Design', 'img' => asset('images/3d-design.png')],
      ] as $field)
      <div class="card bg-white shadow-md hover:shadow-xl transition duration-300 p-5 items-center text-center rounded-xl">
        <img src="{{ $field['img'] }}" alt="{{ $field['title'] }}" class="w-20 h-20 object-contain mb-4" />
        <h3 class="font-semibold text-base text-gray-800">{{ $field['title'] }}</h3>
        <div class="badge badge-info mt-2">Tersedia</div>
      </div>
      @endforeach
    </div>
  </div>
</section>

</section>

{{-- Mitra InterGate --}}
<section class="bg-gray-100 py-20">
  <div class="container mx-auto px-6 md:px-16 lg:px-32">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold mb-2">Mitra <span class="text-blue-600">InternGate</span></h2>
      <p class="text-gray-600 text-lg">Bekerja sama dengan berbagai perusahaan industri ternama.</p>
    </div>

    @foreach ([
      'Mitra Industri' => ['50+', ['educa.png', 'qasir.png', 'cicil.png', 'komerce.png', 'cloudhost.png', 'zahir.png', 'suitmedia.png']],
    ] as $kategori => [$jumlah, $logos])
    <div class="mb-16">
      {{-- Info kategori --}}
      <div class="text-center mb-8">
        <p class="text-2xl font-bold text-blue-600">{{ $jumlah }}</p>
        <p class="text-base font-semibold text-gray-700">{{ $kategori }}</p>
      </div>

      {{-- Grid logo --}}
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 place-items-center">
        @foreach ($logos as $img)
        <div class="bg-white p-4 rounded-xl shadow-sm hover:shadow-lg border border-gray-200 transition w-full h-28 flex items-center justify-center">
          <img src="{{ asset('images/mitra/' . $img) }}" alt="Logo {{ $img }}" class="max-h-16 object-contain">
        </div>
        @endforeach
      </div>
    </div>
    @endforeach

    {{-- Tombol lihat selengkapnya --}}
    <div class="text-center mt-10">
      <a href="#perusahaan" class="btn btn-outline btn-warning rounded-full px-8 text-base font-medium">
        Lihat Selengkapnya
      </a>
    </div>
  </div>
</section>


{{-- FAQ Section --}}
<section class="bg-gray-100 py-10">
  <div class="container mx-auto px-6 md:px-20 lg:px-40">
    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
      Pertanyaan Umum (FAQ)
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      {{-- FAQ Card --}}
      <div class="p-6 bg-white border border-blue-100 rounded-2xl shadow-md hover:shadow-lg transition duration-300">
        <div class="flex items-start space-x-4">
          <div class="text-blue-500 mt-1">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 14h.01M16 10h.01M21 12c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8z" />
            </svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">Apa itu InternGate?</h3>
            <p class="mt-1 text-gray-600">
              InternGate adalah platform resmi magang dari Universitas Jambi untuk menghubungkan mahasiswa dengan industri IT terbaik.
            </p>
          </div>
        </div>
      </div>

      <div class="p-6 bg-white border border-blue-100 rounded-2xl shadow-md hover:shadow-lg transition duration-300">
        <div class="flex items-start space-x-4">
          <div class="text-blue-500 mt-1">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.88 18.09A10 10 0 1011.91 2.12 10 10 0 0020.88 18.09z" />
            </svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">Siapa saja yang bisa mendaftar?</h3>
            <p class="mt-1 text-gray-600">
              Semua mahasiswa aktif Universitas Jambi dari berbagai program studi dapat mendaftar magang di InternGate.
            </p>
          </div>
        </div>
      </div>

      <div class="p-6 bg-white border border-blue-100 rounded-2xl shadow-md hover:shadow-lg transition duration-300">
        <div class="flex items-start space-x-4">
          <div class="text-blue-500 mt-1">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 118 0v2M12 11v.01" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 20h12a2 2 0 002-2V8a2 2 0 00-2-2h-5l-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">Apa saja dokumen yang dibutuhkan?</h3>
            <p class="mt-1 text-gray-600">
              Umumnya CV, transkrip nilai, surat pengantar, dan portofolio (jika ada). Beberapa mitra mungkin meminta tambahan.
            </p>
          </div>
        </div>
      </div>

      <div class="p-6 bg-white border border-blue-100 rounded-2xl shadow-md hover:shadow-lg transition duration-300">
        <div class="flex items-start space-x-4">
          <div class="text-blue-500 mt-1">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4 -4" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 12A9 9 0 113 12a9 9 0 0118 0z" />
            </svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-800">Bagaimana proses seleksinya?</h3>
            <p class="mt-1 text-gray-600">
              Setelah mendaftar, mitra akan menilai kelengkapan dokumen dan kecocokan pelamar sebelum memberikan konfirmasi diterima.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
