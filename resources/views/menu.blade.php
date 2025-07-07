@extends('layouts.app') {{-- Ini memberitahu Blade untuk menggunakan layout app.blade.php --}}

@section('title', 'Beranda - Resep Nusantara') {{-- Mengatur judul halaman --}}
  <link rel="icon" href="assets/logo_resep.ico" type="image/x-icon">


@section('content') {{-- Semua kode di sini akan masuk ke @yield('content') di layout --}}

<style>
    .card:hover {
transform: scale(1.05);
transition: transform 0.3s;
 }

 html {
scroll-behavior: smooth;
 }

   #home {
            background-image: url('{{ asset('assets/bg_mobile.png') }}'); /* Ganti dengan path gambar mobile kamu */
        }

        /* Untuk desktop (layar lebih lebar dari 768px) */
        @media (min-width: 768px) {
            #home {
                background-image: url('{{ asset('assets/bg_dekstop.png') }}'); /* Ganti dengan path gambar desktop kamu */
            }
        }
</style>

 {{-- Main section --}}


   <section id="home" class="firstPage home-sectionhome-section min-h-screen w-full bg-cover bg-center bg-no-repeat flex items-center justify-center opacity-75">
    <div data-aos = "fade-up">
    <div class="relative z-10 items-center justify-center w-full max-w-4xl p-8">
    <div class="flex items-center justify-center mb-6 md:mb-0 md:mr-8 pb-6">
    <img src="{{ asset('dummyLogo.png') }}" alt="Dummy Book"
    class="w-48 h-48 object-contain rounded-xl shadow-lg transition-all duration-500 ease-in-out hover:scale-105 hover:shadow-2xl bg-white" />
    </div>
    <div class="text-center">
    <h1 class="text-3xl md:text-4xl font-bold text-yellow-800 opacity-100">Jelajahi Ribuan Resep Lezat untuk Setiap Selera</h1>
    <p class="mt-2 text-amber-800">Temukan inspirasi masakan harian Anda di sini! Dari hidangan klasik hingga kreasi modern.</p>
    <a href="#resep"
    class="mt-4 inline-block bg-amber-800 text-white py-2 px-4 rounded hover:bg-amber-600 hover:shadow-xl transition-transform transform hover:scale-105">
    Lihat Resep
 </a>
 </div>
</div>
    </div>
</section>

 {{-- Resep section --}}

<section id="resep" class="bg-orange-200 py-8 px-4 min-h-screen flex flex-col justify-center items-center md:py-8 md:px-2 sm:py-6 sm:px-1">

 <div class="max-w-7xl mx-auto px-4 " data-aos="fade-up"> <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Resep Makanan</h2>

 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-auto">
 <div class="bg-white rounded-xl flex flex-col justify-center items-center text-center shadow-md hover:shadow-xl transition-transform transform hover:scale-105 data-aos="zoom-in" data-aos-delay="100"">
 <img src="{{ asset('Assets/lele.png') }}" alt="Card Image" class="w-64 h-auto object-contain mb-4 mx-auto mt-4">
 <div class="p-6 text-center">
 <h3 class="text-xl font-semibold text-gray-800 mb-2 line-clamp-2">Pecel lele</h3>
 <p class="text-gray-600 text-sm mb-4 line-clamp-3">
  Ikan lele goreng yang renyah disajikan dengan nasi hangat, sambal terasi pedas dan lalapan segar.
 </p>
 <a href="/resep-pecelLele" class="inline-flex items-center gap-2 px-4 py-2 border bg-white text-amber-700 rounded-full hover:bg-amber-700 hover:text-white transition">
  Lihat Resep
  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
 <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
  </svg>
 </a>
 </div>
 </div>

 <div class="bg-white rounded-xl flex flex-col justify-center items-center text-center shadow-md hover:shadow-xl transition-transform transform hover:scale-105 data-aos="zoom-in" data-aos-delay="100"">
 <img src="{{ asset('Assets/rendang.png') }}" alt="Card Image" class="w-64 h-auto object-contain mb-4 mx-auto mt-4">
 <div class="p-6 text-center">
 <h3 class="text-xl font-semibold text-gray-800 mb-2 line-clamp-2">Rendang</h3>
 <p class="text-gray-600 text-sm mb-4 line-clamp-3">
  Masakan daging sapi yang kaya rempah, dimasak perlahan dengan santan hingga bumbu meresap sempurna.
 </p>
 <a href="/resep-rendang" class="inline-flex items-center gap-2 px-4 py-2 border bg-white text-amber-700 rounded-full hover:bg-amber-700 hover:text-white transition">
  Lihat Resep
  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
 <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
  </svg>
 </a>
 </div>
 </div>

 <div class="bg-white rounded-xl flex flex-col justify-center items-center text-center shadow-md hover:shadow-xl transition-transform transform hover:scale-105 data-aos="zoom-in" data-aos-delay="100"">
 <img src="{{ asset('Assets/nasikuning.png') }}" alt="Card Image" class="w-64 h-auto object-contain mb-4 mx-auto mt-4">
 <div class="p-6 text-center">
 <h3 class="text-xl font-semibold text-gray-800 mb-2 line-clamp-2">Nasi Kuning</h3>
 <p class="text-gray-600 text-sm mb-4 line-clamp-3">
 Nasi gurih berwarna kuning cerah, dimasak dengan kunyit dan santan dengan pelengkap hidangan istimewa.
 </p>
 <a href="/resep-nasiKuning" class="inline-flex items-center gap-2 px-4 py-2 border bg-white text-amber-700 rounded-full hover:bg-amber-700 hover:text-white transition">
  Lihat Resep
  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
 <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
  </svg>
 </a>
 </div>
 </div>
  </div>

            <div class="mt-16 text-center">
                <a href="{{ route('resep') }}" class="inline-block bg-amber-700 hover:bg-amber-800 text-white font-bold py-4 px-10 rounded-full transition duration-300 transform hover:scale-105 shadow-lg">
                    Lihat Resep Lainnya
                    <svg class="w-5 h-5 inline-block ml-2 -mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
 </div>
</section>

        {{-- Commment section\ --}}

    <section id="comment" class="bg-gray-100 py-16 px-4">
        <div class="max-w-4xl mx-auto" data-aos= "fade-left">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Apa Kata Mereka? Bagikan Pendapat Anda!</h2>

            <div id="comment-list" class="bg-white rounded-lg shadow-md p-6 mb-8 max-h-96 overflow-y-auto">
                <div class="border-b border-gray-200 pb-4 mb-4 last:border-b-0 last:pb-0 last:mb-0">
                    <p class="font-semibold text-gray-800">Budi Santoso</p>
                    <p class="text-sm text-gray-500 mb-2">25 Juni 2025</p>
                    <p class="text-gray-700">"Resepnya sangat jelas dan mudah diikuti. Saya berhasil membuat rendang yang lezat berkat website ini!"</p>
                </div>
                <div class="border-b border-gray-200 pb-4 mb-4 last:border-b-0 last:pb-0 last:mb-0">
                    <p class="font-semibold text-gray-800">Siti Aminah</p>
                    <p class="text-sm text-gray-500 mb-2">24 Juni 2025</p>
                    <p class="text-gray-700">"Suka sekali dengan variasi resep di sini! Nasi kuningnya pas banget buat acara keluarga."</p>
                </div>
                <div class="border-b border-gray-200 pb-4 mb-4 last:border-b-0 last:pb-0 last:mb-0">
                    <p class="font-semibold text-gray-800">Dewi Lestari</p>
                    <p class="text-sm text-gray-500 mb-2">23 Juni 2025</p>
                    <p class="text-gray-700">"Tim di balik Resep Nusantara sangat kreatif! Salut dengan kerja keras kalian."</p>
                </div>
            </div>

            <div id="comment-form-container" class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Tinggalkan Komentar Anda</h3>
                <form>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Anda</label>
                        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-amber-500" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-6">
                        <label for="comment" class="block text-gray-700 text-sm font-bold mb-2">Komentar Anda</label>
                        <textarea id="comment" name="comment" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-amber-500 resize-y" placeholder="Tulis komentar Anda di sini..."></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300 ease-in-out">
                            Kirim Komentar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

{{-- Tidak ada JavaScript spesifik di home.blade.php karena semua sudah di layout master --}}