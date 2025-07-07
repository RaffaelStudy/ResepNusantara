@extends('layouts.app')

@section('title', 'Resep Pecel Lele - Resep Nusantara')

@php
    $hideNavbar = true; // Set variabel ini menjadi true
@endphp

@section('content')

   <section class="bg-amber-700 py-10 px-4 relative">
          {{-- Background Pattern (Opsional, untuk visual lebih kaya) --}}
        <div class="absolute inset-0 bg-repeat opacity-5" style="background-image: url('{{ asset('Assets/pattern-dots.png') }}'); background-size: 50px;"></div>

        {{-- Tombol Kembali ke Beranda --}}
        <div class="absolute top-6 left-6 md:top-8 md:left-8 z-20" data-aos="fade-right">
            <a href="{{ route('menu') }}" class="inline-flex items-center justify-center w-8 h-8 md:w-10 md:h-10
                        text-white rounded-full 
                       shadow-xl hover:shadow-2xl transition-all duration-300 
                       transform hover:-translate-y-1 hover:scale-110 
                        pb-5">
                <svg class="w-7 h-7 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
        </div>

          
    </section>


    <section class="bg-orange-50 py-16 px-4">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-amber-800 mb-12 text-center" data-aos="fade-down">
                Koleksi Resep Lengkap Kami
            </h1>
            <

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mx-auto">
                
                {{-- Card Resep 1: Pecel Lele --}}
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('Assets/pecelLele.jpg') }}" alt="Pecel Lele" class="w-full h-48 object-cover object-center rounded-t-2xl">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 line-clamp-2">Pecel Lele</h3>
                        
                        {{-- Link ke file Pecel Lele Blade --}}
                        <a href="{{ route('pecelLele') }}" class="mt-auto inline-flex items-center gap-2 px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition duration-300 transform hover:-translate-y-0.5 shadow-md">
                            Lihat Resep
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Card Resep 2: Rendang --}}
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Assets/rendangReal1.jpg') }}" alt="Rendang" class="w-full h-48 object-cover object-center rounded-t-2xl">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 line-clamp-2">Rendang</h3>
                        
                        {{-- Link ke file Rendang Blade --}}
                        <a href="{{ route('rendang') }}" class="mt-auto inline-flex items-center gap-2 px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition duration-300 transform hover:-translate-y-0.5 shadow-md">
                            Lihat Resep
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Card Resep 3: Nasi Kuning --}}
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('Assets/nasiKuning.jpg') }}" alt="Nasi Kuning" class="w-full h-48 object-cover object-center rounded-t-2xl">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 line-clamp-2">Nasi Kuning</h3>
                       
                        {{-- Link ke file Nasi Kuning Blade --}}
                        <a href="{{ route('nasiKuning') }}" class="mt-auto inline-flex items-center gap-2 px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition duration-300 transform hover:-translate-y-0.5 shadow-md">
                            Lihat Resep
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Assets/ayamBakar.jpg') }}" alt="Rendang" class="w-full h-48 object-cover object-center rounded-t-2xl">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 line-clamp-2">Ayam Bakar</h3>
                        
                        {{-- Link ke file Rendang Blade --}}
                        <a href="{{ route('ayamBakar') }}" class="mt-auto inline-flex items-center gap-2 px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition duration-300 transform hover:-translate-y-0.5 shadow-md">
                            Lihat Resep
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Assets/ayamGoreng.jpg') }}" alt="Rendang" class="w-full h-48 object-cover object-center rounded-t-2xl">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 line-clamp-2">Ayam Goreng</h3>
                        
                        {{-- Link ke file Rendang Blade --}}
                        <a href="{{ route('ayamGoreng') }}" class="mt-auto inline-flex items-center gap-2 px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition duration-300 transform hover:-translate-y-0.5 shadow-md">
                            Lihat Resep
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Assets/orekTempe.jpg') }}" alt="Rendang" class="w-full h-48 object-cover object-center rounded-t-2xl">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 line-clamp-2">Orek Tempe</h3>
                        
                        {{-- Link ke file Rendang Blade --}}
                        <a href="{{ route('orekTempe') }}" class="mt-auto inline-flex items-center gap-2 px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition duration-300 transform hover:-translate-y-0.5 shadow-md">
                            Lihat Resep
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Assets/sayurAsem.jpg') }}" alt="Rendang" class="w-full h-48 object-cover object-center rounded-t-2xl">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 line-clamp-2">Sayur Asem</h3>
                        
                        {{-- Link ke file Rendang Blade --}}
                        <a href="{{ route('sayurAsem') }}" class="mt-auto inline-flex items-center gap-2 px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition duration-300 transform hover:-translate-y-0.5 shadow-md">
                            Lihat Resep
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Assets/sopAyam.jpg') }}" alt="Rendang" class="w-full h-48 object-cover object-center rounded-t-2xl">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 line-clamp-2">Sop Ayam</h3>
                        
                        {{-- Link ke file Rendang Blade --}}
                        <a href="{{ route('sopAyam') }}" class="mt-auto inline-flex items-center gap-2 px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition duration-300 transform hover:-translate-y-0.5 shadow-md">
                            Lihat Resep
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Assets/sotoAyam.jpg') }}" alt="Rendang" class="w-full h-48 object-cover object-center rounded-t-2xl">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 line-clamp-2">Soto Ayam</h3>
                        
                        {{-- Link ke file Rendang Blade --}}
                        <a href="{{ route('sotoAyam') }}" class="mt-auto inline-flex items-center gap-2 px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition duration-300 transform hover:-translate-y-0.5 shadow-md">
                            Lihat Resep
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col items-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Assets/tempeGoreng.jpg') }}" alt="Rendang" class="w-full h-48 object-cover object-center rounded-t-2xl">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 line-clamp-2">Tempe Goreng</h3>
                        
                        {{-- Link ke file Rendang Blade --}}
                        <a href="{{ route('tempeGoreng') }}" class="mt-auto inline-flex items-center gap-2 px-6 py-3 bg-amber-600 text-white rounded-full hover:bg-amber-700 transition duration-300 transform hover:-translate-y-0.5 shadow-md">
                            Lihat Resep
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Tambahkan lebih banyak kartu resep di sini dengan struktur yang sama --}}
                {{-- Pastikan data-aos-delay ditingkatkan untuk setiap kartu baru (misal: 400, 500, dst.) --}}

            </div>

            {{-- Karena tidak pakai database, tidak ada pagination otomatis --}}
            {{-- Jika ada banyak resep, Anda bisa membuat link manual ke halaman resep lain (misal: /resep/page2) --}}

        </div>
    </section>

@endsection

@section('scripts')
    {{-- Tidak ada JavaScript spesifik di sini karena semua AOS sudah di layout master --}}
@endsection