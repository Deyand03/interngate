@extends('layouts.base')
@section('title')
    {{ $program->judul }}
@endsection

@section('content')

    <!-- Header Halaman dengan Banner Perusahaan -->
    <div class="relative h-64 md:h-80 w-full">
        <img src="{{ $program->banner ? asset('storage/' . $program->banner) : asset('img/banner-placehold.png') }}"
            alt="Banner Perusahaan" class="h-full w-full object-cover">
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
                            <img src="{{ $program->mitra->logo_perusahaan ? asset('storage/' . $program->mitra->logo_perusahaan) : asset('img/placeholder.jpg') }}"
                                alt="Logo Perusahaan" />
                        </div>
                    </div>
                    <div class="flex-grow">
                        <div class="{{ $program->category->badge_class }} badge badge-md font-medium">
                            {{ $program->category->name }}
                        </div>
                        <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-800 mt-2">{{ $program->judul }}</h1>
                        <div class="flex items-center gap-2 mt-2">
                            <a href="#"
                                class="text-xl font-medium text-gray-700 cursor-auto">{{ $program->mitra->nama_perusahaan }}</a>
                            <p class="text-gray-500">• {{ $program->mitra->alamat_perusahaan }}</p>
                        </div>
                        @if($errors->any())
                            <div class="flex flex-col w-full justify-center text-center text-lg font-semibold rounded-lg bg-rose-100 text-rose-800">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li class="mb-3">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div
                        class="badge badge-xl font-semibold {{ $program->status == 'Buka' ? 'text-emerald-800 bg-emerald-100' : 'text-rose-800 bg-rose-100' }} ">
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
                                <div class="stat-value text-lg text-secondary-focus">
                                    {{ $program->batas_pendaftaran->isoFormat('D MMMM YYYY') }}
                                </div>
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
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 text-primary flex-shrink-0 mt-1" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
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
                                Batas pendaftaran:
                                <strong>{{ $program->batas_pendaftaran->isoFormat('D MMMM YYYY') }}</strong>
                            </p>
                            <div class="card-actions justify-end mt-4">
                                @guest
                                    <button disabled
                                        class="btn btn-ghost bg-[#d0a824] cursor-not-allowed border-none text-black w-full font-bold">
                                        Lamar Sekarang
                                    </button>
                                @endguest
                                @auth
                                    @if($sudahMelamar)
                                        <button disabled
                                            class="cursor-not-allowed border-none w-full font-bold bg-rose-200 text-rose-800 rounded p-3">
                                            Anda Sudah Melamar Di Program ini
                                        </button>
                                    @else
                                        <a onclick="document.getElementById('konfirmasi_lamaran_modal').showModal()"
                                            @disabled(Auth::user()->mitra || $program->status == 'Tutup')
                                            class="btn btn-ghost {{ $program->status == 'Tutup' || Auth::user()->mitra ? 'bg-[#d0a824] cursor-not-allowed' : 'bg-[#F5C219] hover:bg-[#e0ac00]' }} border-none text-black w-full font-bold">
                                            Lamar Sekarang
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                    <div class="card bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title text-lg">Tentang Mitra</h2>
                            <div class="prose max-w-none text-sm text-gray-600 mt-2">
                                <p>{{ $program->mitra->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <dialog id="konfirmasi_lamaran_modal" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-lg">Kirim Lamaran Anda</h3>
            <p class="py-2 text-sm">
                Lengkapi dokumen yang dibutuhkan untuk melamar posisi <strong>{{ $program->judul }}</strong>.
            </p>

            {{-- Form yang akan di-submit jika user mengkonfirmasi --}}
            {{-- PENTING: Tambahkan enctype untuk upload file --}}
            <form action="{{ route('lowongan.store', $program) }}" method="POST" enctype="multipart/form-data"
                class="space-y-4 mt-4">
                @csrf
                {{-- Input untuk File CV --}}
                <div>
                    <label class="label">
                        <span class="label-text">Curriculum Vitae (CV)</span>
                    </label>
                    <div class="flex items-center gap-4">
                        <label for="cv_input" class="btn btn-outline btn-primary btn-sm">Pilih File</label>
                        <span id="cv_filename" class="text-sm text-gray-500 truncate">Belum ada file dipilih...</span>
                    </div>
                    <input type="file" name="file_cv" id="cv_input" class="hidden" accept=".pdf">
                    @error('file_cv') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                {{-- Input untuk Transkrip Nilai --}}
                <div>
                    <label class="label">
                        <span class="label-text">Transkrip Nilai Terakhir</span>
                    </label>
                    <div class="flex items-center gap-4">
                        <label for="transkrip_input" class="btn btn-outline btn-primary btn-sm">Pilih File</label>
                        <span id="transkrip_filename" class="text-sm text-gray-500 truncate">Belum ada file
                            dipilih...</span>
                    </div>
                    <input type="file" name="transkrip_nilai" id="transkrip_input" class="hidden" accept=".pdf">
                    @error('transkrip_nilai') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                {{-- Tombol Aksi --}}
                <div class="modal-action">
                    <a class="btn" onclick="document.getElementById('konfirmasi_lamaran_modal').close()">Batal</a>
                    <button type="submit" class="btn btn-primary">Ya, Lamar Sekarang!</button>
                </div>
            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    @if (session('success'))
        <div id="success-message" data-message="{{ session('success') }}" class="hidden"></div>
    @elseif (session('error'))
        <div id="error-message" data-message="{{ session('error') }}" class="hidden"></div>
    @endif
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        function handleFileChange(inputId, filenameId) {
            const input = document.getElementById(inputId);
            const filenameSpan = document.getElementById(filenameId);

            if (input) {
                input.addEventListener('change', function (event) {
                    if (event.target.files && event.target.files.length > 0) {
                        filenameSpan.textContent = event.target.files[0].name;
                    } else {
                        filenameSpan.textContent = 'Belum ada file dipilih...';
                    }
                });
            }
        }

        // Terapkan fungsi ke kedua input file kita
        handleFileChange('cv_input', 'cv_filename');
        handleFileChange('transkrip_input', 'transkrip_filename');
    });
    const successMessageElement = document.getElementById('success-message');
    const errorMessageElement = document.getElementById('error-message');
    console.log(successMessageElement);
    if (successMessageElement) {
        const message = successMessageElement.getAttribute('data-message');
        console.log(message);
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 7000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        Toast.fire({
            icon: 'success',
            title: `${message}`
        });
    }
    if (errorMessageElement) {
        const message = errorMessageElement.getAttribute('data-message');
        console.log(message);
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 7000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        Toast.fire({
            icon: 'error',
            title: `${message}`
        });
    }
</script>
