@extends('layouts.sidebar')

@section('title', 'Edit Program Magang')

@section('content')
<div class="p-6 md:p-8">
    <!-- Header Halaman -->
    <header class="mb-8">
        <div class="flex items-center gap-4">
            {{-- <a href="{{ route('mitra.kelola') }}" class="btn btn-circle btn-ghost">
                <i class="fa-solid fa-arrow-left"></i>
            </a> --}}
            <div>
                <h1 class="text-3xl font-extrabold text-gray-800">Edit Program Magang</h1>
                <p class="text-gray-500 mt-1">Perbarui detail untuk program: <strong>{{ $program->judul }}</strong></p>
            </div>
        </div>
    </header>

    @if ($errors->any())
        <div>
            <strong>Kesalahan:</strong>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Edit Program -->
    <div class="card bg-base-100 shadow-xl">
        <form method="POST" action="{{ route('mitra.program.update', $program) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-2">
                    <!-- Kolom Kiri Form -->
                    <div class="space-y-4">
                        <div class="divider lg:hidden text-sm font-semibold">Info Dasar</div>
                        <div class="form-control w-full">
                            <label class="label"><span class="label-text font-semibold">Judul Program</span></label>
                            <input type="text" name="judul" value="{{ $program->judul }}" class="input input-bordered w-full" />
                        </div>
                        <div class="form-control w-full">
                            <label class="label"><span class="label-text font-semibold">Kategori Program</span></label>
                            <select name="id_category" class="select select-bordered w-full">
                                <option disabled>Pilih Kategori</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @selected($program->id_category == $category->id)>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-control w-full">
                            <label class="label"><span class="label-text font-semibold">Kuota Peserta</span></label>
                            <input type="number" name="kuota" value="{{ $program->kuota }}" class="input input-bordered w-full" />
                        </div>
                    </div>
                    <!-- Kolom Kanan Form -->
                    <div class="space-y-4">
                         <div class="divider lg:hidden text-sm font-semibold">Deskripsi & Kualifikasi</div>
                         <div class="form-control flex flex-col w-full">
                            <label class="label"><span class="label-text font-semibold">Deskripsi Program</span></label>
                            {{-- PERBAIKAN: name diubah dari 'deskripsi_program' menjadi 'deskripsi' --}}
                            <textarea name="deskripsi" class="textarea textarea-bordered w-full" rows="5">{{ $program->deskripsi }}</textarea>
                        </div>
                        <div class="form-control flex flex-col w-full">
                            <label class="label"><span class="label-text font-semibold">Kualifikasi</span></label>
                            <textarea name="kualifikasi" class="textarea textarea-bordered w-full" rows="5" placeholder="Garis baru untuk setiap syarat yang akan dibuat">{{ $program->kualifikasi }}</textarea>
                        </div>
                    </div>
                    <!-- Bagian Jadwal & Banner (Full Width) -->
                    <div class="lg:col-span-2">
                        <div class="divider text-sm font-semibold">Penjadwalan & Media</div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Batas Pendaftaran</span></label>
                                <input type="date" name="batas_pendaftaran" value="{{  \Carbon\Carbon::parse($program->batas_pendaftaran)->format('Y-m-d') }}" class="input input-bordered w-full" />
                            </div>
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Awal Magang</span></label>
                                <input type="date" name="awal_magang" value="{{ \Carbon\Carbon::parse($program->awal_magang)->format('Y-m-d') }}" class="input input-bordered w-full" />
                            </div>
                            <div class="form-control w-full">
                                <label class="label"><span class="label-text font-semibold">Selesai Magang</span></label>
                                {{-- PERBAIKAN: name diubah dari 'selesai_magang' menjadi 'akhir_magang' --}}
                                <input type="date" name="akhir_magang" value="{{ \Carbon\Carbon::parse($program->akhir_magang)->format('Y-m-d') }}" class="input input-bordered w-full" />
                            </div>
                        </div>
                         <div class="form-control w-full mt-4">
                            <label class="label"><span class="label-text font-semibold">Ubah Gambar Banner (Opsional)</span></label>
                            <input type="file" name="gambar" class="file-input file-input-bordered w-full" />
                            <div class="label"><span class="label-text-alt">Kosongkan jika tidak ingin mengubah gambar.</span></div>
                        </div>
                    </div>
                </div>
                 <div class="card-actions justify-end mt-6">
                    <a href="{{ route('mitra.kelola') }}" class="btn">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
