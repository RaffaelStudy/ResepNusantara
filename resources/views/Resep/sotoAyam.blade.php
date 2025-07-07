@extends('layouts.app')

@section('title', 'Resep Nasi Kuning - Resep Nusantara')

@php
    $hideNavbar = true; // Sembunyikan navbar di halaman ini
@endphp

@section('content')

    <section class="bg-gray-50 py-12 md:py-16 px-4 min-h-screen flex flex-col justify-center items-center relative overflow-hidden">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 bg-repeat opacity-5" style="background-image: url('{{ asset('Assets/pattern-dots.png') }}'); background-size: 50px;"></div>

        {{-- Tombol Kembali --}}
        <div class="absolute top-6 left-6 md:top-8 md:left-8 z-20" data-aos="fade-right">
            <a href="{{ route('resep') }}" class="inline-flex items-center justify-center w-12 h-12 md:w-14 md:h-14
                       bg-gradient-to-br from-amber-500 to-amber-700 text-white rounded-full
                       shadow-xl hover:shadow-2xl transition-all duration-300
                       transform hover:-translate-y-1 hover:scale-110
                       focus:outline-none focus:ring-4 focus:ring-amber-300 focus:ring-opacity-75">
                <svg class="w-7 h-7 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
        </div>

        <div class="max-w-4xl mx-auto w-full z-10 relative flex-grow flex flex-col justify-center">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden p-6 md:p-10 lg:p-12 border-t-4 border-amber-500 w-full" data-aos="fade-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-amber-800 mb-6 text-center leading-tight">
                    Resep Soto Ayam
                </h1>
                <p class="text-md md:text-lg text-gray-700 leading-relaxed text-center mb-8 max-w-2xl mx-auto">
                    Nasi gurih nan cantik dengan warna kuning cerah, dimasak dengan kunyit, santan, dan rempah pilihan. Sempurna untuk hidangan istimewa atau perayaan.
                </p>

                {{-- Gambar Resep Utama --}}
                <div class="relative w-full h-64 md:h-80 lg:h-96 rounded-2xl overflow-hidden shadow-lg mb-8 group" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Assets/sotoAyam.jpg') }}" alt="Rendang Daging Sapi" class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                        <span class="text-white text-xl md:text-2xl font-bold">Soto Ayam</span>
                    </div>
                </div>

                {{-- Bagian Info Resep (Waktu, Porsi, Tingkat Kesulitan) --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center text-gray-700 mb-10">
                    <div class="bg-amber-50 p-4 rounded-xl shadow-sm" data-aos="fade-right" data-aos-delay="300">
                        <i class="far fa-clock text-amber-600 text-2xl mb-2"></i>
                        <p class="font-semibold">Waktu Memasak</p>
                        <p>~90 Menit</p>
                    </div>
                    <div class="bg-amber-50 p-4 rounded-xl shadow-sm" data-aos="fade-up" data-aos-delay="400">
                        <i class="fas fa-users text-amber-600 text-2xl mb-2"></i>
                        <p class="font-semibold">Porsi</p>
                        <p>~4 - 6 Orang</p>
                    </div>
                    <div class="bg-amber-50 p-4 rounded-xl shadow-sm" data-aos="fade-left" data-aos-delay="500">
                        <i class="fas fa-star text-amber-600 text-2xl mb-2"></i>
                        <p class="font-semibold">Tingkat</p>
                        <p>Sulit</p>
                    </div>
                </div>

                {{-- Konten Bahan-Bahan --}}
                 <div class="bg-amber-50 rounded-2xl p-6 md:p-8 mb-8 shadow-md" data-aos="fade-up" data-aos-delay="600">
                    <h2 class="text-3xl font-bold text-amber-800 mb-5 border-b pb-3 border-amber-300">Bahan-Bahan</h2>
                    <ul class="list-none text-gray-700 leading-relaxed space-y-3">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>1 ekor ayam (sekitar 800 gr - 1 kg), potong menjadi 4 bagian</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>2 liter air</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>2 lembar daun salam</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>2 batang serai, memarkan</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>1 ruas lengkuas, memarkan</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>2 lembar daun jeruk</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>Garam dan gula secukupnya</span>
                        </li>
                        <li><span class="font-semibold text-gray-900">Bumbu Halus:</span></li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>8 siung bawang merah</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>4 siung bawang putih</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>1 ruas jahe</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>1 ruas kunyit, bakar sebentar</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>1/2 sdt merica butiran</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>2 butir kemiri, sangrai</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M10 12l2 2 4-4"></path></svg>
                            <span>1 sdt ketumbar bubuk</span>
                        </li>
                    </ul>
                </div>


                {{-- Konten Cara Memasak --}}
                 <div class="bg-amber-50 rounded-2xl p-6 md:p-8 shadow-md" data-aos="fade-up" data-aos-delay="700">
                    <h2 class="text-3xl font-bold text-amber-800 mb-5 border-b pb-3 border-amber-300">Cara Memasak</h2>
                    <ol class="list-decimal list-inside text-gray-700 leading-relaxed space-y-4 text-base md:text-lg">
                        <li class="pl-2">
                            <span class="font-semibold text-gray-900">1. Rebus Ayam:</span> Rebus potongan ayam dalam air hingga matang dan empuk. Angkat ayam, sisihkan. Saring kaldu ayam dan sisihkan (sekitar 1.5 liter).
                        </li>
                        <li class="pl-2">
                            <span class="font-semibold text-gray-900">2. Siapkan Bumbu:</span> Haluskan semua bahan bumbu halus.
                        </li>
                        <li class="pl-2">
                            <span class="font-semibold text-gray-900">3. Tumis Bumbu:</span> Panaskan sedikit minyak dalam wajan. Tumis bumbu halus hingga harum dan matang. Masukkan serai, lengkuas, daun salam, dan daun jeruk. Aduk rata hingga layu dan harum.
                        </li>
                        <li class="pl-2">
                            <span class="font-semibold text-gray-900">4. Masak Kuah Soto:</span> Masukkan tumisan bumbu ke dalam kaldu ayam yang sudah disaring. Didihkan kembali. Bumbui dengan garam, gula, dan merica secukupnya. Koreksi rasa.
                        </li>
                        <li class="pl-2">
                            <span class="font-semibold text-gray-900">5. Suwir Ayam:</span> Goreng ayam yang sudah direbus sebentar hingga kuning keemasan (opsional, untuk aroma lebih kuat dan tekstur). Suwir-suwir daging ayam.
                        </li>
                        <li class="pl-2">
                            <span class="font-semibold text-gray-900">6. Tata Bahan Pelengkap:</span> Siapkan mangkuk saji. Tata soun yang sudah diseduh, tauge, dan suwiran ayam di dalamnya.
                        </li>
                        <li class="pl-2">
                            <span class="font-semibold text-gray-900">7. Sajikan:</span> Siram dengan kuah soto panas. Taburi dengan irisan seledri, daun bawang, dan bawang goreng. Sajikan soto ayam hangat dengan jeruk nipis dan sambal.
                        </li>
                    </ol>
                </div>
                {{-- Bagian Baru: Video Tutorial (dengan Thumbnail yang bisa diklik) --}}
                <div class="bg-gray-50 rounded-2xl p-6 md:p-8 shadow-md mt-8" data-aos="fade-up" data-aos-delay="800">
                    <h2 class="text-3xl font-bold text-amber-800 mb-5 border-b pb-3 border-amber-300">Video Tutorial</h2>
                    <div class="relative aspect-w-16 aspect-h-9 w-full rounded-lg overflow-hidden shadow-lg group">
                        {{-- Ganti 'YOUR_YOUTUBE_VIDEO_ID' dengan ID video YouTube Rendang Anda --}}
                        @php
                            $youtubeVideoId = 'YOUR_YOUTUBE_VIDEO_ID'; // Contoh: 'dQw4w9WgXcQ'
                            $youtubeThumbnailUrl = "https://img.youtube.com/vi/I6KKPcDV5PQ/hqdefault.jpg"; // Kualitas tinggi default
                            $youtubeVideoUrl = "https://www.youtube.com/watch?v=I6KKPcDV5PQ";
                        @endphp

                        <a href="https://www.youtube.com/watch?v=I6KKPcDV5PQ" target="_blank" rel="noopener noreferrer" class="block w-full h-full relative">
                            <img src="https://img.youtube.com/vi/I6KKPcDV5PQ/hqdefault.jpg" alt="Video Tutorial Rendang" class="w-full h-full object-cover object-center transition-transform duration-300 group-hover:scale-105">
                            {{-- Overlay dan Tombol Play --}}
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-100 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-20 h-20 text-white opacity-90 group-hover:opacity-100 transition-opacity duration-300 transform group-hover:scale-110" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <p class="text-gray-600 text-sm mt-4 text-center">
                        Klik gambar di atas untuk menonton video tutorial langkah demi langkah membuat Soto Ayam yang sempurna di YouTube!
                    </p>
                </div>


                {{-- Tombol Kembali ke Daftar Resep (tetap di bagian paling bawah) --}}
                <div class="mt-12 text-center" data-aos="fade-up" data-aos-delay="900"> {{-- Sesuaikan delay AOS --}}
                    <a href="{{ route('resep') }}" class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-md">
                        Kembali ke Daftar Resep
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    {{-- JavaScript spesifik halaman ini (jika ada) --}}
@endsection