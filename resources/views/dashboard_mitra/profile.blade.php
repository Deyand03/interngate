@extends('layouts.sidebar')

@section('content')
  <div class="w-full h-56 overflow-hidden relative">
    <img id="headerBanner" src="https://via.placeholder.com/1600x300?text=Banner+Perusahaan"
        class="w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/30 flex items-center px-8">
      <div class="text-white">
        <h1 class="text-4xl font-bold">PT.Teknologi</h1>
        <p class="text-lg">Selamat datang di halaman profil mitra Anda</p>
      </div>
    </div>
  </div>

  <!-- Konten -->
  <div class="px-6 py-10 max-w-[1400px] mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

      <!-- Biodata Mitra -->
<div class="lg:col-span-2 bg-white p-8 rounded-xl shadow">
  <h2 class="text-2xl font-bold mb-6">Biodata Mitra</h2>

  <!-- Tampilan Biodata -->
  <div id="view-biodata" class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
    <p><span class="font-semibold">Nama:</span> <span id="view-nama">PT. Teknologi Maju</span></p>
    <p><span class="font-semibold">Deskripsi:</span> <span id="view-deskripsi">Perusahaan bergerak di bidang teknologi.</span></p>
    <p><span class="font-semibold">No. Telepon:</span> <span id="view-telepon">08123456789</span></p>
    <p><span class="font-semibold">Alamat:</span> <span id="view-alamat">Jl. Teknologi No. 1, Jakarta</span></p>

    <div class="pt-4">
      <button id="btn-edit" type="button" class="btn btn-primary w-full">Edit Biodata</button>
    </div>
  </div>

  <!-- Form Edit (Tersembunyi Awalnya) -->
  <form id="form-edit" class="hidden mt-6 grid-cols-1 md:grid-cols-2 gap-4" id="update-biodata">
    <input id="input-nama" class="input input-bordered w-full" placeholder="Masukkan nama">
    <input id="input-deskripsi" class="input input-bordered w-full" placeholder="Deskripsi">
    <input id="input-telepon" class="input input-bordered w-full" placeholder="Masukkan no. telepon">
    <input id="input-alamat" class="input input-bordered w-full md:col-span-2" placeholder="Masukkan alamat lengkap">
    
    <button type="submit" class="btn btn-success w-full md:col-span-2">Simpan Perubahan</button>
  </form>
</div>

  
      <!-- Foto Profil & Banner Perusahaan -->
      <div class="bg-white p-6 rounded-xl shadow flex flex-col justify-between">
        <!-- Foto Profil -->
        <div class="text-center mb-8">
          <h3 class="text-lg font-semibold mb-2">Foto Profil</h3>
          <div class="avatar mb-3 mx-auto">
            <div class="w-20 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
              <img id="fotoPreview" src="https://via.placeholder.com/100x100.png?text=Foto" />
            </div>
          </div>
          <label for="fotoInput" class="btn btn-outline w-full cursor-pointer">Ganti Foto</label>
          <input id="fotoInput" type="file" class="hidden" accept="image/*" />
        </div>

        <!-- Banner Perusahaan -->
        <div class="text-center mt-6">
          <h3 class="text-lg font-semibold mb-2">Banner Perusahaan</h3>
          <div class="w-full h-28 bg-gray-200 rounded-lg overflow-hidden mb-3">
            <img id="bannerPreview" src="https://via.placeholder.com/400x100.png?text=Banner"
                 class="object-cover w-full h-full" />
          </div>
          <label for="bannerInput" class="btn btn-outline w-full cursor-pointer">Ganti Banner</label>
          <input id="bannerInput" type="file" class="hidden" accept="image/*" />
        </div>
      </div>

    </div>
  </div>


@endsection