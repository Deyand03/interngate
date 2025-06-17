@extends('layouts.base')
@section('title', 'Perusahaan')

@section('content')
<div>
    <section class="text-center mt-10">
        <h1 class="text-3xl font-bold text-gray-800">Perusahaan Sponsor</h1>
        <p class="text-gray-600 mt-2">
            Perusahaan sponsor adalah jembatan antara dunia pendidikan dan dunia kerja melalui program magang berkualitas.
        </p>
    </section>

    @if($mitras->isNotEmpty())
    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 p-10">
        @foreach ($mitras as $mitra)
            <div class="bg-white shadow-md rounded-lg p-4">
                <img src="{{ $mitra->logo_perusahaan ? asset('storage/' . $mitra->logo_perusahaan) : asset('img/placeholder.jpg') }}"
                    alt="{{ $mitra->nama_perusahaan }}" class="mx-auto h-28 object-contain" />
                <h2 class="mt-3 font-semibold text-gray-800 text-lg text-center">{{ $mitra->nama_perusahaan }}</h2>
                <p class="text-gray-500 text-sm mt-1 line-clamp-3">{{ $mitra->deskripsi }}</p>
            </div>
        @endforeach
    </section>
    @else
        <div class="w-full text-center font-bold text-2xl p-24">
            Belum ada Mitra
        </div>
    @endif
    <div class="flex flex-col w-full px-10 pb-10">
        {{ $mitras->links('pagination::tailwind')  }}
    </div>

</div>
@endsection
