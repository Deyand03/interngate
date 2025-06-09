@extends('layouts.base')
@section('title', 'Perusahaan')

@section('content')
<section class="text-center mt-10 lg:px-20">
  <h1 class="text-3xl font-bold text-gray-800">Perusahaan Sponsor</h1>
  <p class="text-gray-600 mt-2">
    Perusahaan sponsor adalah jembatan antara dunia pendidikan dan dunia kerja melalui program magang berkualitas.
  </p>
</section>

<section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 p-10 lg:px-20">
  <!-- Kartu 1 -->
  <div class="bg-white shadow-md rounded-lg p-4 text-center">
    <img src="{{ asset('img/hero-image-lowongan.png') }}" alt="Perusahaan A" class="mx-auto h-28 object-contain" />
    <h2 class="mt-3 font-semibold text-gray-800 text-sm">Perusahaan A</h2>
  </div>
  <!-- Kartu 1 -->
  <div class="bg-white shadow-md rounded-lg p-4 text-center">
    <img src="{{ asset('img/hero-image-lowongan.png') }}" alt="Perusahaan B" class="mx-auto h-28 object-contain" />
    <h2 class="mt-3 font-semibold text-gray-800 text-sm">Perusahaan B</h2>
  </div>
  <!-- Kartu 1 -->
  <div class="bg-white shadow-md rounded-lg p-4 text-center">
    <img src="{{ asset('img/hero-image-lowongan.png') }}" alt="Perusahaan C" class="mx-auto h-28 object-contain" />
    <h2 class="mt-3 font-semibold text-gray-800 text-sm">Perusahaan C</h2>
  </div>
  <!-- Kartu 1 -->
  <div class="bg-white shadow-md rounded-lg p-4 text-center">
    <img src="{{ asset('img/hero-image-lowongan.png') }}" alt="Perusahaan D" class="mx-auto h-28 object-contain" />
    <h2 class="mt-3 font-semibold text-gray-800 text-sm">Perusahaan D</h2>
  </div>
  <!-- Kartu 1 -->
  <div class="bg-white shadow-md rounded-lg p-4 text-center">
    <img src="{{ asset('img/hero-image-lowongan.png') }}" alt="Perusahaan E" class="mx-auto h-28 object-contain" />
    <h2 class="mt-3 font-semibold text-gray-800 text-sm">Perusahaan E</h2>
  </div>

  
</section>
@endsection
