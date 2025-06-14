@props(['posts'])

<div class="flex flex-col pt-12 md:pt-20 -mt-15 px-6 sm:px-12 lg:px-20 pb-20">
    {{-- Judul Section --}}
    <div class="flex flex-col items-center justify-center text-center">
        <h2 class="font-bold text-3xl md:text-4xl text-gray-800 mb-3">Pilihan Lowongan Magang</h2>
        <div class="w-24 h-1 bg-yellow-400 rounded-full"></div>
    </div>

    {{-- Search & Filter Bar --}}
    <div class="bg-blue-50 p-4 sm:p-5 rounded-xl my-8 sm:my-10 shadow-sm border border-blue-100">
        <form action="#list-perusahaan" class="flex flex-col sm:flex-row items-center gap-3 sm:gap-4">
            {{-- Input Pencarian Utama --}}
            <div class="relative w-full flex-grow">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" name="search" placeholder="Cari posisi atau perusahaan..." class="w-full pl-11 pr-4 py-3 border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>

            {{-- Dropdown Filter (Contoh) --}}
            <div class="w-full sm:w-auto">
                <select name="location" class="w-full bg-white border-gray-300 rounded-lg py-3 pr-8 pl-4 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                    <option value="">Semua Lokasi</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="bandung">Bandung</option>
                    <option value="wfh">Work From Home</option>
                </select>
            </div>

            {{-- Tombol Cari --}}
            <div class="w-full sm:w-auto">
                <button type="submit" class="btn btn-primary w-full py-3 text-base font-semibold">Cari</button>
            </div>
        </form>
    </div>

    {{-- Grid untuk List Lowongan --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        {{-- CARD LOWONGAN (Contoh 1) --}}

        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            {{-- Bagian Gambar --}}
            <div class="md:w-1/3 flex-shrink-0">
                <img class="w-full h-48 md:h-full object-cover" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop" alt="Foto suasana kerja">
            </div>

            {{-- Bagian Konten Teks --}}
            <div class="p-6 flex flex-col justify-between flex-grow">
                <div>
                    <p class="text-sm font-semibold text-blue-600">Nama Perusahaan Keren</p>
                    <h3 class="mt-1 text-xl font-bold text-gray-900">
                        <a href="#" class="hover:underline">Backend Developer Intern (Golang)</a>
                    </h3>
                    <p class="text-sm text-gray-500 mt-1">Jakarta Selatan, DKI Jakarta</p>

                    {{-- Tags --}}
                    <div class="flex flex-wrap gap-2 my-4">
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-1 rounded-full">Hybrid</span>
                        <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 rounded-full">3 Bulan</span>
                    </div>

                    <p class="text-sm text-gray-600 line-clamp-3">
                        Mencari intern yang bersemangat untuk belajar dan berkontribusi dalam pengembangan backend service kami menggunakan Golang, gRPC, dan arsitektur microservices...
                    </p>
                </div>

                {{-- Aksi (Tombol) --}}
                <div class="pt-4 mt-4 border-t border-gray-200">
                    <a href="#" class="btn btn-warning w-full">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>


        {{-- Tambahkan card lain di sini --}}

    </div>
</div>
