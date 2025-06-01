@extends('layouts.base')
@section('title', 'Lowongan')

@section('content')
    <div class="h-[800vh]">
        <div class="flex flex-col bg-header text-white h-fit py-16 px-40 gap-16">
            <div class="flex justify-evenly">
                <div class="flex flex-col justify-between">
                    <h1 class="text-[2.5rem] font-semibold">Temukan Tempat Magang <br> Favorit Mu Disini!</h1>
                    <h2 class="text-lg font-medium">
                        InternGate hadir untuk mahasiswa dan fresh graduate <br>
                        yang ingin dapat pengalaman nyata di dunia kerja.<br>
                        Yuk, mulai petualanganmu!</h2>
                    <a href="#" class="btn btn-warning w-fit mt-2"><span class="font-semibold">Jelajahi Program
                            Sekarang</span></a>
                </div>
                <div>
                    <img src="{{ asset('img/hero-image-lowongan.png') }}" alt="" class="w-80">
                </div>
            </div>
            <div class="flex flex-col">
                <x-data-header></x-data-header>
            </div>
        </div>

        <div class="flex items-center justify-evenly bg-header-2 text-white h-[8rem]">
            <div>
                asomaso
            </div>
            <div>
                asomaso
            </div>
            <div>
                asomaso
            </div>
        </div>

        {{-- List Perusahaan --}}
        <x-list-perusahaan></x-list-perusahaan>
    </div>
@endsection
