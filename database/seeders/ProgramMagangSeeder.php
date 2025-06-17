<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramMagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program_magangs')->insert([
            [
                'id' => 1,
                'judul' => 'Program Magang Backend Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'backend-developer-cv-kreasi-digital-nusantara-1',
                'deskripsi' => 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 15,
                'gambar' => 'images/program-magang/backend-developer-cv-kreasi-digital-nusantara-1.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Backend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-10',
                'awal_magang' => '2025-08-18',
                'akhir_magang' => '2025-11-07',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'judul' => 'Program Magang Backend Developer di PT. Teknologi Maju Bersama',
                'slug' => 'backend-developer-pt-teknologi-maju-bersama-2',
                'deskripsi' => 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 3,
                'gambar' => 'images/program-magang/backend-developer-pt-teknologi-maju-bersama-2.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Backend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-28',
                'awal_magang' => '2025-08-04',
                'akhir_magang' => '2025-10-27',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'judul' => 'Program Magang Quality Assurance di PT. Teknologi Maju Bersama',
                'slug' => 'quality-assurance-pt-teknologi-maju-bersama-3',
                'deskripsi' => 'Posisi magang untuk Quality Assurance yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 11,
                'gambar' => 'images/program-magang/quality-assurance-pt-teknologi-maju-bersama-3.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Quality Assurance
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-20',
                'awal_magang' => '2025-07-31',
                'akhir_magang' => '2025-10-22',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'judul' => 'Program Magang Fullstack Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'fullstack-developer-cv-kreasi-digital-nusantara-4',
                'deskripsi' => 'Posisi magang untuk Fullstack Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 5,
                'gambar' => 'images/program-magang/fullstack-developer-cv-kreasi-digital-nusantara-4.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Fullstack Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-31',
                'awal_magang' => '2025-08-14',
                'akhir_magang' => '2025-11-05',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'judul' => 'Program Magang Frontend Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'frontend-developer-cv-kreasi-digital-nusantara-5',
                'deskripsi' => 'Posisi magang untuk Frontend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 11,
                'gambar' => 'images/program-magang/frontend-developer-cv-kreasi-digital-nusantara-5.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Frontend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-04',
                'awal_magang' => '2025-07-14',
                'akhir_magang' => '2025-09-25',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'judul' => 'Program Magang Backend Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'backend-developer-cv-kreasi-digital-nusantara-6',
                'deskripsi' => 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 9,
                'gambar' => 'images/program-magang/backend-developer-cv-kreasi-digital-nusantara-6.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Backend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-26',
                'awal_magang' => '2025-08-07',
                'akhir_magang' => '2025-10-26',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'judul' => 'Program Magang Data Analyst di PT. Teknologi Maju Bersama',
                'slug' => 'data-analyst-pt-teknologi-maju-bersama-7',
                'deskripsi' => 'Posisi magang untuk Data Analyst yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 6,
                'gambar' => 'images/program-magang/data-analyst-pt-teknologi-maju-bersama-7.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Data Analyst
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-02',
                'awal_magang' => '2025-08-10',
                'akhir_magang' => '2025-10-31',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'judul' => 'Program Magang Human Resources di PT. Teknologi Maju Bersama',
                'slug' => 'human-resources-pt-teknologi-maju-bersama-8',
                'deskripsi' => 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 5,
                'gambar' => 'images/program-magang/human-resources-pt-teknologi-maju-bersama-8.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Human Resources
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-14',
                'awal_magang' => '2025-07-25',
                'akhir_magang' => '2025-10-17',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'judul' => 'Program Magang Data Analyst di CV. Kreasi Digital Nusantara',
                'slug' => 'data-analyst-cv-kreasi-digital-nusantara-9',
                'deskripsi' => 'Posisi magang untuk Data Analyst yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 13,
                'gambar' => 'images/program-magang/data-analyst-cv-kreasi-digital-nusantara-9.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Data Analyst
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-14',
                'awal_magang' => '2025-08-28',
                'akhir_magang' => '2025-11-03',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'judul' => 'Program Magang UI/UX Designer di CV. Kreasi Digital Nusantara',
                'slug' => 'uiux-designer-cv-kreasi-digital-nusantara-10',
                'deskripsi' => 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 14,
                'gambar' => 'images/program-magang/uiux-designer-cv-kreasi-digital-nusantara-10.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar UI/UX Designer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-13',
                'awal_magang' => '2025-07-24',
                'akhir_magang' => '2025-10-04',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'judul' => 'Program Magang Human Resources di PT. Teknologi Maju Bersama',
                'slug' => 'human-resources-pt-teknologi-maju-bersama-11',
                'deskripsi' => 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 15,
                'gambar' => 'images/program-magang/human-resources-pt-teknologi-maju-bersama-11.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Human Resources
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-27',
                'awal_magang' => '2025-08-08',
                'akhir_magang' => '2025-10-26',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'judul' => 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama',
                'slug' => 'uiux-designer-pt-teknologi-maju-bersama-12',
                'deskripsi' => 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 8,
                'gambar' => 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-12.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar UI/UX Designer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-02',
                'awal_magang' => '2025-07-11',
                'akhir_magang' => '2025-09-26',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'judul' => 'Program Magang Digital Marketing Specialist di CV. Kreasi Digital Nusantara',
                'slug' => 'digital-marketing-specialist-cv-kreasi-digital-nusantara-13',
                'deskripsi' => 'Posisi magang untuk Digital Marketing Specialist yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 11,
                'gambar' => 'images/program-magang/digital-marketing-specialist-cv-kreasi-digital-nusantara-13.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Digital Marketing Specialist
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-12',
                'awal_magang' => '2025-07-26',
                'akhir_magang' => '2025-10-22',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'judul' => 'Program Magang Mobile App Developer di PT. Teknologi Maju Bersama',
                'slug' => 'mobile-app-developer-pt-teknologi-maju-bersama-14',
                'deskripsi' => 'Posisi magang untuk Mobile App Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 5,
                'gambar' => 'images/program-magang/mobile-app-developer-pt-teknologi-maju-bersama-14.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Mobile App Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-20',
                'awal_magang' => '2025-08-01',
                'akhir_magang' => '2025-10-16',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'judul' => 'Program Magang Backend Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'backend-developer-cv-kreasi-digital-nusantara-15',
                'deskripsi' => 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 15,
                'gambar' => 'images/program-magang/backend-developer-cv-kreasi-digital-nusantara-15.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Backend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-21',
                'awal_magang' => '2025-08-02',
                'akhir_magang' => '2025-10-16',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'judul' => 'Program Magang Frontend Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'frontend-developer-cv-kreasi-digital-nusantara-16',
                'deskripsi' => 'Posisi magang untuk Frontend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 4,
                'gambar' => 'images/program-magang/frontend-developer-cv-kreasi-digital-nusantara-16.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Frontend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-09',
                'awal_magang' => '2025-08-21',
                'akhir_magang' => '2025-11-06',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 17,
                'judul' => 'Program Magang Content Writer di CV. Kreasi Digital Nusantara',
                'slug' => 'content-writer-cv-kreasi-digital-nusantara-17',
                'deskripsi' => 'Posisi magang untuk Content Writer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 8,
                'gambar' => 'images/program-magang/content-writer-cv-kreasi-digital-nusantara-17.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Content Writer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-26',
                'awal_magang' => '2025-08-04',
                'akhir_magang' => '2025-10-12',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 18,
                'judul' => 'Program Magang Human Resources di PT. Teknologi Maju Bersama',
                'slug' => 'human-resources-pt-teknologi-maju-bersama-18',
                'deskripsi' => 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 13,
                'gambar' => 'images/program-magang/human-resources-pt-teknologi-maju-bersama-18.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Human Resources
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-07',
                'awal_magang' => '2025-08-14',
                'akhir_magang' => '2025-10-13',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 19,
                'judul' => 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama',
                'slug' => 'uiux-designer-pt-teknologi-maju-bersama-19',
                'deskripsi' => 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 9,
                'gambar' => 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-19.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar UI/UX Designer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-13',
                'awal_magang' => '2025-07-24',
                'akhir_magang' => '2025-09-22',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 20,
                'judul' => 'Program Magang Data Analyst di CV. Kreasi Digital Nusantara',
                'slug' => 'data-analyst-cv-kreasi-digital-nusantara-20',
                'deskripsi' => 'Posisi magang untuk Data Analyst yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 9,
                'gambar' => 'images/program-magang/data-analyst-cv-kreasi-digital-nusantara-20.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Data Analyst
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-29',
                'awal_magang' => '2025-08-12',
                'akhir_magang' => '2025-10-28',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 21,
                'judul' => 'Program Magang Human Resources di CV. Kreasi Digital Nusantara',
                'slug' => 'human-resources-cv-kreasi-digital-nusantara-21',
                'deskripsi' => 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 14,
                'gambar' => 'images/program-magang/human-resources-cv-kreasi-digital-nusantara-21.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Human Resources
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-18',
                'awal_magang' => '2025-07-28',
                'akhir_magang' => '2025-10-05',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 22,
                'judul' => 'Program Magang Content Writer di CV. Kreasi Digital Nusantara',
                'slug' => 'content-writer-cv-kreasi-digital-nusantara-22',
                'deskripsi' => 'Posisi magang untuk Content Writer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 7,
                'gambar' => 'images/program-magang/content-writer-cv-kreasi-digital-nusantara-22.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Content Writer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-24',
                'awal_magang' => '2025-07-31',
                'akhir_magang' => '2025-10-03',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 23,
                'judul' => 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama',
                'slug' => 'uiux-designer-pt-teknologi-maju-bersama-23',
                'deskripsi' => 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 12,
                'gambar' => 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-23.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar UI/UX Designer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-26',
                'awal_magang' => '2025-08-08',
                'akhir_magang' => '2025-10-14',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 24,
                'judul' => 'Program Magang Data Analyst di PT. Teknologi Maju Bersama',
                'slug' => 'data-analyst-pt-teknologi-maju-bersama-24',
                'deskripsi' => 'Posisi magang untuk Data Analyst yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 12,
                'gambar' => 'images/program-magang/data-analyst-pt-teknologi-maju-bersama-24.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Data Analyst
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-11',
                'awal_magang' => '2025-07-24',
                'akhir_magang' => '2025-10-14',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 25,
                'judul' => 'Program Magang Human Resources di PT. Teknologi Maju Bersama',
                'slug' => 'human-resources-pt-teknologi-maju-bersama-25',
                'deskripsi' => 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 11,
                'gambar' => 'images/program-magang/human-resources-pt-teknologi-maju-bersama-25.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Human Resources
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-01',
                'awal_magang' => '2025-08-09',
                'akhir_magang' => '2025-11-03',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 26,
                'judul' => 'Program Magang Fullstack Developer di PT. Teknologi Maju Bersama',
                'slug' => 'fullstack-developer-pt-teknologi-maju-bersama-26',
                'deskripsi' => 'Posisi magang untuk Fullstack Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 9,
                'gambar' => 'images/program-magang/fullstack-developer-pt-teknologi-maju-bersama-26.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Fullstack Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-08',
                'awal_magang' => '2025-08-18',
                'akhir_magang' => '2025-10-17',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 27,
                'judul' => 'Program Magang Backend Developer di PT. Teknologi Maju Bersama',
                'slug' => 'backend-developer-pt-teknologi-maju-bersama-27',
                'deskripsi' => 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 4,
                'gambar' => 'images/program-magang/backend-developer-pt-teknologi-maju-bersama-27.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Backend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-14',
                'awal_magang' => '2025-08-28',
                'akhir_magang' => '2025-10-31',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 28,
                'judul' => 'Program Magang Mobile App Developer di PT. Teknologi Maju Bersama',
                'slug' => 'mobile-app-developer-pt-teknologi-maju-bersama-28',
                'deskripsi' => 'Posisi magang untuk Mobile App Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 4,
                'gambar' => 'images/program-magang/mobile-app-developer-pt-teknologi-maju-bersama-28.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Mobile App Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-02',
                'awal_magang' => '2025-07-16',
                'akhir_magang' => '2025-10-14',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 29,
                'judul' => 'Program Magang Content Writer di PT. Teknologi Maju Bersama',
                'slug' => 'content-writer-pt-teknologi-maju-bersama-29',
                'deskripsi' => 'Posisi magang untuk Content Writer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 12,
                'gambar' => 'images/program-magang/content-writer-pt-teknologi-maju-bersama-29.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Content Writer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-27',
                'awal_magang' => '2025-08-05',
                'akhir_magang' => '2025-10-10',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 30,
                'judul' => 'Program Magang Fullstack Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'fullstack-developer-cv-kreasi-digital-nusantara-30',
                'deskripsi' => 'Posisi magang untuk Fullstack Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 13,
                'gambar' => 'images/program-magang/fullstack-developer-cv-kreasi-digital-nusantara-30.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Fullstack Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-13',
                'awal_magang' => '2025-08-27',
                'akhir_magang' => '2025-11-02',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 31,
                'judul' => 'Program Magang Frontend Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'frontend-developer-cv-kreasi-digital-nusantara-31',
                'deskripsi' => 'Posisi magang untuk Frontend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 10,
                'gambar' => 'images/program-magang/frontend-developer-cv-kreasi-digital-nusantara-31.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Frontend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-06',
                'awal_magang' => '2025-07-20',
                'akhir_magang' => '2025-09-20',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 32,
                'judul' => 'Program Magang Fullstack Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'fullstack-developer-cv-kreasi-digital-nusantara-32',
                'deskripsi' => 'Posisi magang untuk Fullstack Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 6,
                'gambar' => 'images/program-magang/fullstack-developer-cv-kreasi-digital-nusantara-32.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Fullstack Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-22',
                'awal_magang' => '2025-08-01',
                'akhir_magang' => '2025-10-15',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 33,
                'judul' => 'Program Magang Quality Assurance di CV. Kreasi Digital Nusantara',
                'slug' => 'quality-assurance-cv-kreasi-digital-nusantara-33',
                'deskripsi' => 'Posisi magang untuk Quality Assurance yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 9,
                'gambar' => 'images/program-magang/quality-assurance-cv-kreasi-digital-nusantara-33.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Quality Assurance
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-29',
                'awal_magang' => '2025-08-11',
                'akhir_magang' => '2025-10-14',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 34,
                'judul' => 'Program Magang Digital Marketing Specialist di PT. Teknologi Maju Bersama',
                'slug' => 'digital-marketing-specialist-pt-teknologi-maju-bersama-34',
                'deskripsi' => 'Posisi magang untuk Digital Marketing Specialist yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 11,
                'gambar' => 'images/program-magang/digital-marketing-specialist-pt-teknologi-maju-bersama-34.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Digital Marketing Specialist
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-12',
                'awal_magang' => '2025-07-21',
                'akhir_magang' => '2025-10-05',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 35,
                'judul' => 'Program Magang Frontend Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'frontend-developer-cv-kreasi-digital-nusantara-35',
                'deskripsi' => 'Posisi magang untuk Frontend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 5,
                'gambar' => 'images/program-magang/frontend-developer-cv-kreasi-digital-nusantara-35.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Frontend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-03',
                'awal_magang' => '2025-07-15',
                'akhir_magang' => '2025-10-13',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 36,
                'judul' => 'Program Magang Backend Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'backend-developer-cv-kreasi-digital-nusantara-36',
                'deskripsi' => 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 15,
                'gambar' => 'images/program-magang/backend-developer-cv-kreasi-digital-nusantara-36.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Backend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-06',
                'awal_magang' => '2025-08-20',
                'akhir_magang' => '2025-11-03',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 37,
                'judul' => 'Program Magang Quality Assurance di CV. Kreasi Digital Nusantara',
                'slug' => 'quality-assurance-cv-kreasi-digital-nusantara-37',
                'deskripsi' => 'Posisi magang untuk Quality Assurance yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 12,
                'gambar' => 'images/program-magang/quality-assurance-cv-kreasi-digital-nusantara-37.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Quality Assurance
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-22',
                'awal_magang' => '2025-08-04',
                'akhir_magang' => '2025-10-04',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 38,
                'judul' => 'Program Magang Backend Developer di PT. Teknologi Maju Bersama',
                'slug' => 'backend-developer-pt-teknologi-maju-bersama-38',
                'deskripsi' => 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 10,
                'gambar' => 'images/program-magang/backend-developer-pt-teknologi-maju-bersama-38.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Backend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-08',
                'awal_magang' => '2025-07-15',
                'akhir_magang' => '2025-09-16',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 39,
                'judul' => 'Program Magang Digital Marketing Specialist di PT. Teknologi Maju Bersama',
                'slug' => 'digital-marketing-specialist-pt-teknologi-maju-bersama-39',
                'deskripsi' => 'Posisi magang untuk Digital Marketing Specialist yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 3,
                'gambar' => 'images/program-magang/digital-marketing-specialist-pt-teknologi-maju-bersama-39.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Digital Marketing Specialist
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-28',
                'awal_magang' => '2025-08-04',
                'akhir_magang' => '2025-10-25',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 40,
                'judul' => 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama',
                'slug' => 'uiux-designer-pt-teknologi-maju-bersama-40',
                'deskripsi' => 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 12,
                'gambar' => 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-40.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar UI/UX Designer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-31',
                'awal_magang' => '2025-08-07',
                'akhir_magang' => '2025-11-01',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 41,
                'judul' => 'Program Magang Frontend Developer di CV. Kreasi Digital Nusantara',
                'slug' => 'frontend-developer-cv-kreasi-digital-nusantara-41',
                'deskripsi' => 'Posisi magang untuk Frontend Developer yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 10,
                'gambar' => 'images/program-magang/frontend-developer-cv-kreasi-digital-nusantara-41.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Frontend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-07',
                'awal_magang' => '2025-07-21',
                'akhir_magang' => '2025-09-29',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 42,
                'judul' => 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama',
                'slug' => 'uiux-designer-pt-teknologi-maju-bersama-42',
                'deskripsi' => 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 8,
                'gambar' => 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-42.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar UI/UX Designer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-31',
                'awal_magang' => '2025-08-10',
                'akhir_magang' => '2025-10-16',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 43,
                'judul' => 'Program Magang Mobile App Developer di PT. Teknologi Maju Bersama',
                'slug' => 'mobile-app-developer-pt-teknologi-maju-bersama-43',
                'deskripsi' => 'Posisi magang untuk Mobile App Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 13,
                'gambar' => 'images/program-magang/mobile-app-developer-pt-teknologi-maju-bersama-43.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Mobile App Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-12',
                'awal_magang' => '2025-08-24',
                'akhir_magang' => '2025-11-16',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 44,
                'judul' => 'Program Magang Human Resources di CV. Kreasi Digital Nusantara',
                'slug' => 'human-resources-cv-kreasi-digital-nusantara-44',
                'deskripsi' => 'Posisi magang untuk Human Resources yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 4,
                'gambar' => 'images/program-magang/human-resources-cv-kreasi-digital-nusantara-44.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Human Resources
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-11',
                'awal_magang' => '2025-08-20',
                'akhir_magang' => '2025-11-16',
                'status' => 'tutup',
                'id_mitra' => 2,
                'id_category' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 45,
                'judul' => 'Program Magang UI/UX Designer di PT. Teknologi Maju Bersama',
                'slug' => 'uiux-designer-pt-teknologi-maju-bersama-45',
                'deskripsi' => 'Posisi magang untuk UI/UX Designer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 8,
                'gambar' => 'images/program-magang/uiux-designer-pt-teknologi-maju-bersama-45.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar UI/UX Designer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-15',
                'awal_magang' => '2025-07-26',
                'akhir_magang' => '2025-10-06',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 46,
                'judul' => 'Program Magang Digital Marketing Specialist di PT. Teknologi Maju Bersama',
                'slug' => 'digital-marketing-specialist-pt-teknologi-maju-bersama-46',
                'deskripsi' => 'Posisi magang untuk Digital Marketing Specialist yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 12,
                'gambar' => 'images/program-magang/digital-marketing-specialist-pt-teknologi-maju-bersama-46.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Digital Marketing Specialist
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-08',
                'awal_magang' => '2025-08-20',
                'akhir_magang' => '2025-10-24',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 47,
                'judul' => 'Program Magang Quality Assurance di CV. Kreasi Digital Nusantara',
                'slug' => 'quality-assurance-cv-kreasi-digital-nusantara-47',
                'deskripsi' => 'Posisi magang untuk Quality Assurance yang akan terlibat dalam proyek-proyek nyata di CV. Kreasi Digital Nusantara. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 5,
                'gambar' => 'images/program-magang/quality-assurance-cv-kreasi-digital-nusantara-47.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Quality Assurance
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-11',
                'awal_magang' => '2025-07-22',
                'akhir_magang' => '2025-09-29',
                'status' => 'buka',
                'id_mitra' => 2,
                'id_category' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 48,
                'judul' => 'Program Magang Backend Developer di PT. Teknologi Maju Bersama',
                'slug' => 'backend-developer-pt-teknologi-maju-bersama-48',
                'deskripsi' => 'Posisi magang untuk Backend Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 13,
                'gambar' => 'images/program-magang/backend-developer-pt-teknologi-maju-bersama-48.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Backend Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-05',
                'awal_magang' => '2025-08-14',
                'akhir_magang' => '2025-11-04',
                'status' => 'buka',
                'id_mitra' => 1,
                'id_category' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 49,
                'judul' => 'Program Magang Mobile App Developer di PT. Teknologi Maju Bersama',
                'slug' => 'mobile-app-developer-pt-teknologi-maju-bersama-49',
                'deskripsi' => 'Posisi magang untuk Mobile App Developer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 12,
                'gambar' => 'images/program-magang/mobile-app-developer-pt-teknologi-maju-bersama-49.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Mobile App Developer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-07-09',
                'awal_magang' => '2025-07-19',
                'akhir_magang' => '2025-10-11',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 50,
                'judul' => 'Program Magang Content Writer di PT. Teknologi Maju Bersama',
                'slug' => 'content-writer-pt-teknologi-maju-bersama-50',
                'deskripsi' => 'Posisi magang untuk Content Writer yang akan terlibat dalam proyek-proyek nyata di PT. Teknologi Maju Bersama. Peserta akan mendapatkan bimbingan dari mentor profesional dan pengalaman kerja yang berharga.',
                'kuota' => 11,
                'gambar' => 'images/program-magang/content-writer-pt-teknologi-maju-bersama-50.jpg',
                'kualifikasi' => 'Mahasiswa/i aktif minimal semester 5
Jurusan terkait (Teknik Informatika, DKV, dll)
Memahami dasar-dasar Content Writer
Mampu bekerja dalam tim dan memiliki inisiatif tinggi
Bersedia mengikuti program magang selama 3 bulan',
                'batas_pendaftaran' => '2025-08-15',
                'awal_magang' => '2025-08-25',
                'akhir_magang' => '2025-11-20',
                'status' => 'tutup',
                'id_mitra' => 1,
                'id_category' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
