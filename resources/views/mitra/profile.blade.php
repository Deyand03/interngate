@extends('layouts.sidebar')

@section('content')
    <div class="relative h-56 md:h-72 w-full">
        <!-- SPACE-BACKEND: Ganti src dengan 'mitra->banner_perusahaan' dari DB -->
        <img src="{{ Auth::user()->mitra->banner ? asset('storage/' . Auth::user()->mitra->banner) : asset('img/placeholder.jpg') }}"
            alt="Banner Perusahaan" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <!-- Konten -->
    <main class="container mx-auto px-6 lg:px-8 -mt-20 relative z-20 pb-16">

        <!-- Kartu Profil Utama -->
        <div class="card bg-base-100 shadow-xl mb-8">
            <div class="card-body p-6 md:p-8">
                <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8">
                    <div class="avatar -mt-16 md:-mt-24">
                        <div class="w-32 h-32 rounded-full ring ring-[#187DAB] ring-offset-base-100 ring-offset-4">
                            <!-- SPACE-BACKEND: Hubungkan dengan path logo dari storage -->
                            <img src="{{ Auth::user()->mitra->logo_perusahaan ? asset('storage/' . Auth::user()->mitra->logo_perusahaan) : asset('img/placeholder.jpg') }}"
                                alt="Logo Perusahaan" />
                        </div>
                    </div>
                        <div class="text-center md:text-left flex-grow">
                            <h1 class="text-3xl font-extrabold text-gray-900">{{ Auth::user()->mitra->nama_perusahaan }}</h1>
                            <p class="text-gray-600 mt-1">{{ Auth::user()->email }}</p>
                        </div>
                    <div class="md:ml-auto flex-shrink-0">
                        <button class="btn btn-primary" onclick="edit_profil_modal.showModal()">
                            <i class="fa-solid fa-pen-to-square"></i>
                            Edit Profil
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detail Perusahaan & Pengaturan Media -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Kolom Kiri: Detail Perusahaan -->
            <div class="lg:col-span-2 card bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-xl">Detail Perusahaan</h2>
                    <div class="divider my-2"></div>
                    <div class="space-y-4 text-base">
                        <div>
                            <div class="font-semibold text-gray-500">Alamat Lengkap</div>
                            {{-- <!-- SPACE-BACKEND: Ganti dengan {{ $mitra->alamat_perusahaan ?? 'Belum diisi' }} --> --}}
                            <p class="text-gray-800">{{ Auth::user()->mitra->alamat_perusahaan }}</p>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-500">Deskripsi Perusahaan</div>
                            {{-- <!-- SPACE-BACKEND: Ganti dengan {{ $mitra->deskripsi ?? 'Belum diisi' }} --> --}}
                            <p class="text-gray-800">{{ Auth::user()->mitra->deskripsi }} </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Pengaturan Media -->
            <div class="lg:col-span-1 card bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-xl">Pengaturan Media</h2>
                    <div class="divider my-2"></div>

                    <!-- Form Upload Logo -->
                    <form action="{{ route('mitra.foto.update', Auth::user()->mitra->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        @method('patch')
                        <div>
                            <label class="label"><span class="label-text font-semibold">Logo Perusahaan</span></label>
                            <input type="file" name="logo_perusahaan"
                                class="file-input file-input-bordered file-input-primary w-full" />
                            <div class="label"><span class="label-text-alt">Rekomendasi: 1:1, maks 1MB.</span></div>
                        </div>

                        <!-- Form Upload Banner -->
                        <div>
                            <label class="label"><span class="label-text font-semibold">Banner Perusahaan</span></label>
                            <input type="file" name="banner"
                                class="file-input file-input-bordered file-input-primary w-full" />
                            <div class="label"><span class="label-text-alt">Rekomendasi: 1200x400, maks 2MB.</span></div>
                        </div>

                        <button type="submit" class="btn btn-primary w-full mt-4">Simpan Media</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
@section('modals')
    @if (session('success'))
        <div id="success-message" data-message="{{ session('success') }}" class="hidden"></div>
    @endif
    <dialog id="edit_profil_modal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box w-11/12 max-w-3xl">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-2xl mb-6 border-b pb-3">Edit Profil Perusahaan</h3>

            <form method="post" action="{{ route('mitra.update', Auth::user()->mitra->id) }}" class="space-y-4">
                @csrf
                @method('patch')

                <div class="form-control w-full">
                    <label class="label"><span class="label-text font-semibold">Nama Perusahaan</span></label>
                    {{-- <!-- SPACE-BACKEND: Ganti value dengan {{ old('nama_perusahaan', $mitra->nama_perusahaan) }} --> --}}
                    <input type="text" name="nama_perusahaan" value="{{ Auth::user()->mitra->nama_perusahaan }}"
                        class="input input-bordered w-full" />
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text font-semibold">Email Kontak</span></label>
                    <input type="email" value="{{Auth::user()->email}}" class="input input-bordered w-full" disabled />
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text font-semibold">Alamat Lengkap</span></label>
                    <textarea name="alamat_perusahaan" class="textarea textarea-bordered h-24"
                        placeholder="Masukkan alamat lengkap perusahaan">{{Auth::user()->mitra->alamat_perusahaan}}</textarea>
                </div>
                <div class="form-control w-full">
                    <label class="label"><span class="label-text font-semibold">Deskripsi Perusahaan</span></label>
                    {{-- <!-- SPACE-BACKEND: Isi dengan {{ old('deskripsi', $mitra->deskripsi) }} --> --}}
                    <textarea name="deskripsi" class="textarea textarea-bordered h-32"
                        placeholder="Jelaskan secara singkat mengenai perusahaan Anda...">{{Auth::user()->mitra->deskripsi}}</textarea>
                </div>

                <div class="modal-action pt-4">
                    <button type="button" class="btn" onclick="edit_profil_modal.close()">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
@endsection
