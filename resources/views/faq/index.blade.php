@extends('layouts.base')

@section('title', 'FAQ - Frequently Ask Question')

@section('content')
<div class="bg-base-200 relative overflow-hidden">
    {{-- Elemen dekoratif di latar belakang --}}
    <div class="absolute top-0 left-0 w-full h-full opacity-5" style="background-image: radial-gradient(#187dab 1px, transparent 1px); background-size: 16px 16px;"></div>
    <div class="absolute -bottom-32 -left-20 w-80 h-80 border-8 border-[#F5C219] rounded-full opacity-20"></div>
    <div class="absolute -top-24 -right-20 w-80 h-80 border-8 border-[#187DAB] rounded-full opacity-20"></div>
    
    <div class="container mx-auto px-6 lg:px-8 py-20 lg:py-24 text-center relative z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">Punya Pertanyaan?</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
            Kami di sini untuk membantu. Kami telah merangkum beberapa pertanyaan yang paling sering diajukan untuk memberikan Anda jawaban secepat mungkin.
        </p>
        <div class="flex justify-center gap-4">
             <a href="#pertanyaan-umum" class="btn bg-[#19A7CE] text-black hover:bg-[#187DAB] rounded-full px-8">
                Lihat Pertanyaan Umum
            </a>
            <a href="" class="btn bg-[#F5C219] hover:bg-[#eab308] border-none text-black rounded-full px-8">
                Hubungi Dukungan
            </a>
        </div>
    </div>
</div>

<section class="py-20">
    <div class="container mx-auto px-6 lg:px-8">

        {{-- Kategori: Pertanyaan Umum --}}
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 border-l-4 border-[#F5C219] pl-4">Pertanyaan Umum</h2>
            <div class="space-y-4">
                {{-- Menggunakan input type="checkbox" agar setiap item bisa dibuka secara independen --}}
                <div class="collapse collapse-plus bg-white rounded-box shadow-sm border">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-xl font-semibold text-gray-800">
                        Apa itu InternGate?
                    </div>
                    <div class="collapse-content"> 
                        <p class="text-gray-600">InternGate adalah platform digital resmi untuk memfasilitasi dan menghubungkan mahasiswa dengan berbagai peluang magang berkualitas di perusahaan-perusahaan mitra, khususnya di industri IT.</p>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-white rounded-box shadow-sm border">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-xl font-semibold text-gray-800">
                        Siapa saja yang bisa mendaftar?
                    </div>
                    <div class="collapse-content"> 
                        <p class="text-gray-600">Program ini terbuka untuk semua mahasiswa aktif yang telah memenuhi persyaratan minimum SKS atau semester sesuai dengan ketentuan dari program studi masing-masing.</p>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-white rounded-box shadow-sm border">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-xl font-semibold text-gray-800">
                        Apakah program magang ini berbayar?
                    </div>
                    <div class="collapse-content"> 
                        <p class="text-gray-600">Tidak. Pendaftaran dan partisipasi dalam program magang melalui InternGate tidak dipungut biaya apapun. Terkait uang saku atau kompensasi lainnya, hal tersebut bergantung pada kebijakan masing-masing perusahaan mitra.</p>
                    </div>
                </div>
                 <div class="collapse collapse-plus bg-white rounded-box shadow-sm border">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-xl font-semibold text-gray-800">
                        Berapa lama durasi program magang?
                    </div>
                    <div class="collapse-content"> 
                        <p class="text-gray-600">Durasi magang bervariasi tergantung program dan kebijakan mitra, namun umumnya berkisar antara 3 hingga 6 bulan, sesuai dengan standar program magang MBKM.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kategori: Pendaftaran & Seleksi --}}
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 border-l-4 border-[#F5C219] pl-4">Pendaftaran & Seleksi</h2>
            <div class="space-y-4">
                <div class="collapse collapse-plus bg-white rounded-box shadow-sm border">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-xl font-semibold text-gray-800">
                        Bagaimana cara mendaftar program magang?
                    </div>
                    <div class="collapse-content"> 
                        <p class="text-gray-600">Anda dapat mendaftar dengan membuat akun di platform InternGate, melengkapi profil Anda, mencari posisi magang yang diminati, lalu klik tombol "Lamar" pada halaman detail lowongan tersebut dan ikuti instruksi selanjutnya.</p>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-white rounded-box shadow-sm border">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-xl font-semibold text-gray-800">
                        Apa saja dokumen yang dibutuhkan?
                    </div>
                    <div class="collapse-content"> 
                        <p class="text-gray-600">Dokumen standar yang wajib diunggah adalah: <br>
                            <ul class="list-disc pl-6 mt-2">
                                <li>Curriculum Vitae (CV) terbaru.</li>
                                <li>Transkrip Nilai Akademik terakhir.</li>
                                <li>Surat Rekomendasi/Pengantar dari Fakultas/Prodi.</li>
                                <li>Portofolio (sangat disarankan untuk posisi kreatif dan teknis).</li>
                            </ul>
                        <br>Beberapa mitra mungkin meminta dokumen tambahan.</p>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-white rounded-box shadow-sm border">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-xl font-semibold text-gray-800">
                        Bagaimana proses seleksinya?
                    </div>
                    <div class="collapse-content"> 
                        <p class="text-gray-600">Proses seleksi sepenuhnya menjadi wewenang perusahaan mitra. Umumnya tahapan seleksi adalah: <br>
                            <ol class="list-decimal pl-6 mt-2">
                                <li>Seleksi Administrasi (pemeriksaan berkas oleh tim InternGate dan mitra).</li>
                                <li>Tes Teknis atau Wawancara (dilakukan oleh mitra).</li>
                                <li>Pengumuman Final.</li>
                            </ol>
                        <br>Anda dapat memantau status lamaran Anda melalui dashboard akun InternGate.</p>
                    </div>
                </div>
                 <div class="collapse collapse-plus bg-white rounded-box shadow-sm border">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-xl font-semibold text-gray-800">
                        Bolehkah saya melamar lebih dari satu posisi?
                    </div>
                    <div class="collapse-content"> 
                        <p class="text-gray-600">Ya, Anda diperbolehkan melamar ke beberapa posisi atau perusahaan yang berbeda secara bersamaan. Namun, kami sarankan untuk fokus pada posisi yang paling sesuai dengan minat dan kualifikasi Anda untuk meningkatkan peluang diterima.</p>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Kategori: Teknis Platform --}}
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 border-l-4 border-[#F5C219] pl-4">Teknis Platform</h2>
             <div class="space-y-4">
                <div class="collapse collapse-plus bg-white rounded-box shadow-sm border">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-xl font-semibold text-gray-800">
                        Di mana saya bisa melihat status lamaran saya?
                    </div>
                    <div class="collapse-content"> 
                        <p class="text-gray-600">Semua riwayat dan status lamaran Anda (Ditinjau, Lolos Seleksi, Ditolak, dll.) dapat dilihat pada menu "profil".</p>
                    </div>
                </div>
                <div class="collapse collapse-plus bg-white rounded-box shadow-sm border">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-xl font-semibold text-gray-800">
                        Saya lupa password akun saya, apa yang harus dilakukan?
                    </div>
                    <div class="collapse-content"> 
                        <p class="text-gray-600">Pada halaman login, klik tautan "Lupa Password?". Masukkan email yang Anda gunakan untuk mendaftar, dan kami akan mengirimkan instruksi untuk mereset password Anda melalui email tersebut.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection