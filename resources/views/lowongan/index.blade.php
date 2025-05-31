@extends('layouts.base')
@section('title', 'Lowongan')

@section('content')
    <div>
        <div class="bg-header text-white h-[25rem]">
            <div class="flex flex-col items-center">
                <h1 class="text-4xl mt-20 font-semibold">Temukan Tempat Magang </h1>
                <h1 class="text-4xl font-semibold">Favorit Mu Disini!</h1>
                <h2 class="text-lg text-center mt-7">
                    InternGate hadir untuk mahasiswa dan fresh graduate <br>
                    yang ingin dapat pengalaman nyata di dunia kerja.<br>
                    Yuk, mulai petualanganmu!</h2>
            </div>
            <x-header-lowongan></x-header-lowongan>
        </div>
        <div class="flex items-center justify-center gap-16 bg-header-2 text-white h-[8rem]">
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
    </div>
@endsection
