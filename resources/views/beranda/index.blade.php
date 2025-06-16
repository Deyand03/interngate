@extends('layouts.base')

@section('title', 'Beranda - Platform Magang Universitas Jambi')

@section('content')
<div class="bg-[#187DAB] text-white" data-theme="light">
    <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center justify-between gap-12 px-6 lg:px-20 py-20 lg:py-10">

        <div class="lg:w-1/2 text-center lg:text-left">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold !leading-tight mb-4 animate-fade-in-down">
                Siap Magang, Siap Kerja<br> Bersama <span class="text-[#F5C219]">InternGate</span>
            </h1>
            <p class="mb-8 text-lg max-w-xl mx-auto lg:mx-0 opacity-90 animate-fade-in-up">
                InternGate adalah platform pendaftaran magang resmi yang menghubungkan talenta mahasiswa dengan mitra industri IT terbaik di Indonesia.
            </p>
            <div class="flex gap-4 justify-center lg:justify-start">
                <a href="{{ route('lowongan') }}" class="btn bg-[#F5C219] hover:bg-[#eab308] border-none text-black font-bold h-14 px-8 text-lg transform hover:-translate-y-1 transition-all duration-300 shadow-lg">
                    Cari Program
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                </a>
            </div>
        </div>

        <div class="lg:w-1/2 relative mb-12 lg:mb-0">
            <div class="relative w-full max-w-md lg:max-w-lg mx-auto">
                <div class="absolute -top-4 -left-4 w-full h-full bg-[#6692D3] bg-opacity-20 rounded-3xl transform rotate-[-3deg]"></div>
                <img src="{{ asset('img/hero-image-beranda-page.png') }}" class="w-full rounded-2xl shadow-2xl relative transform hover:scale-105 transition-transform duration-300" alt="Mahasiswa sedang diskusi untuk magang" />
                <div class="absolute top-8 left-[-24px] badge badge-lg bg-white text-gray-800 shadow-lg p-4 transform hover:scale-110 transition-transform cursor-pointer">
                    <span class="text-yellow-500 mr-2">⭐</span> <strong>4.9/5</strong>&nbsp; <span class="hidden sm:inline">- Kepuasan Mitra</span>
                </div>
                <div class="absolute bottom-8 right-[-24px] badge badge-lg bg-white text-gray-800 shadow-lg p-4 transform hover:scale-110 transition-transform cursor-pointer">
                    <span class="text-blue-500 mr-2">🎓</span> <strong>150+</strong>&nbsp; <span class="hidden sm:inline">- Program Tersedia</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg-white py-10">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-3 text-gray-800">Kenapa Memilih <span class="text-[#187DAB]">InternGate</span>?</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Platform kami dirancang untuk memberikan kemudahan dan peluang terbaik bagi karir Anda.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Card Keunggulan 1 --}}
            <div class="card bg-base-100 border border-gray-200 shadow-sm hover:shadow-xl hover:border-[#187DAB] transition-all duration-300 p-8">
                <div class="flex-shrink-0 mb-4">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#187DAB]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Mitra Terverifikasi</h3>
                <p class="text-gray-600">Kami bekerja sama secara eksklusif dengan perusahaan dan startup terkemuka yang telah terverifikasi untuk memberikan pengalaman magang berkualitas.</p>
            </div>
            {{-- Card Keunggulan 2 --}}
            <div class="card bg-base-100 border border-gray-200 shadow-sm hover:shadow-xl hover:border-[#187DAB] transition-all duration-300 p-8">
                 <div class="flex-shrink-0 mb-4">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#187DAB]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Proses Terintegrasi</h3>
                <p class="text-gray-600">Mulai dari pendaftaran, seleksi dokumen, hingga pengumuman, semuanya dilakukan dalam satu platform yang mudah diakses dan transparan.</p>
            </div>
            {{-- Card Keunggulan 3 --}}
            <div class="card bg-base-100 border border-gray-200 shadow-sm hover:shadow-xl hover:border-[#187DAB] transition-all duration-300 p-8">
                 <div class="flex-shrink-0 mb-4">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#187DAB]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 14l9-5-9-5-9 5 9 5z" /><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-9.998 12.078 12.078 0 01.665-6.479L12 14z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0v-2m0 2v2m0-2l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-9.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222 4 2.222V20" /></svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Sesuai Kurikulum</h3>
                <p class="text-gray-600">Program magang yang tersedia telah disesuaikan dengan kebutuhan kurikulum, memastikan relevansi studi dengan industri.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-base-200 py-10 lg:px-20">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-3">Bidang Magang Populer</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Temukan bidang yang paling sesuai dengan minat dan keahlianmu di industri IT.</p>
        </div>
    </div>

    {{-- Container untuk efek marquee --}}
    <div class="w-full overflow-hidden marquee-container ">
        <div class="flex marquee-content py-2">
            @foreach ($categories as $field)
            <div class="flex-shrink-0 mx-4" style="width: 200px;">
                <div class="card bg-base-100 shadow-md hover:shadow-xl transition-all duration-300 p-5 items-center text-center rounded-2xl cursor-pointer h-full">
                    <img src="{{ asset('img/icon-category/' . $field->slug . '.gif') }}" alt="" class="w-24 h-24 object-contain mb-4" onerror="this.onerror=null;this.src='https://placehold.co/100x100/E0E0E0/757575?text=Icon';" />
                    <h3 class="font-bold text-base text-gray-800 h-12 flex items-center justify-center">{{ $field->name }}</h3>
                    <div class="badge bg-blue-100 text-[#146C94] font-semibold border-0 mt-2 p-3">Tersedia</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
