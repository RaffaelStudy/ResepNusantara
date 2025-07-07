@extends('layouts.app')

@section('title', 'Tentang Kami - Resep Nusantara')

@section('content')

    <section id="about" class="bg-white py-16 px-4 mt-8">
        <div class="max-w-6xl mx-auto">

            <div class="text-center mb-16 typewriter-effect ">
                <h2 class="text-4xl font-extrabold text-amber-800 mb-6">
                    <span id="typewriter-text"></span><span class="cursor">|</span>
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed max-w-3xl mx-auto">
                    **Resep Nusantara** adalah platform digital yang kami kembangkan sebagai proyek kelompok, didedikasikan untuk **merayakan kekayaan kuliner Indonesia**. Kami berkomitmen untuk menyajikan resep-resep autentik dari berbagai daerah, disajikan dengan cara yang mudah diikuti untuk semua kalangan.
                </p>
                <p class="text-md text-gray-600 mt-4 max-w-3xl mx-auto">
                    Visi kami adalah menjadi sumber inspirasi masakan Nusantara terpercaya yang mudah diakses, sementara misi kami adalah menyediakan resep lengkap, tips memasak praktis, dan membangun komunitas pecinta kuliner.
                </p>
            </div>

            <hr class="border-t-2 border-amber-300 w-24 mx-auto mb-16">

            <div class="mb-16 fade-in">
                <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center">Tim di Balik Resep Nusantara</h2>
                <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
                    Kami adalah sekelompok mahasiswa yang bersemangat dalam dunia kuliner dan pengembangan web. Proyek ini adalah wujud kolaborasi dan pembelajaran kami.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-10">

                    <div class="member-card bg-white rounded-xl shadow-lg p-8 text-center cursor-pointer transform transition-transform hover:scale-105 hover:shadow-xl fade-in"
                         data-name="Rifky Raffael"
                         data-role="Web Developer"
                         data-description="Rifky Raffael adalah pengembang web serbaguna yang bertanggung jawab pada UI/UX dari website yang di buat Ia bisa menggunakan beberapa framework, misal: Laravel dan tailwind."
                         data-quote="Bersemangat menciptakan sistem yang efisien untuk pengalaman pengguna terbaik."
                         data-img="{{ asset ('assets/Raffael.png') }}">
                      <img src="{{ asset ('assets/Raffael.png') }}" alt="Foto Anggota 1" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-amber-500">
                      <h3 class="text-xl font-bold text-gray-800 mb-1">Rifky Raffael</h3>
                      <p class="text-amber-600 font-semibold text-sm">Web Developer</p>
                    </div>

                    <div class="member-card bg-white rounded-xl shadow-lg p-8 text-center cursor-pointer transform transition-transform hover:scale-105 hover:shadow-xl fade-in"
                         data-name="Muhammad Al-qahfi"
                         data-role="Desainer Presentasi"
                         data-description="Muhammad Al-qahfi memiliki mata tajam untuk estetika, memvisualisasikan ide-ide kompleks menjadi presentasi yang memukau dan mudah dicerna, memastikan pesan tersampaikan dengan dampak maksimal."
                         data-quote="Menciptakan antarmuka yang intuitif dan visual menarik adalah passion saya."
                         data-img="{{ asset ('assets/qahfi.png') }}">
                      <img src="{{ asset ('assets/qahfi.png') }}" alt="Foto Anggota 2" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-amber-500">
                      <h3 class="text-xl font-bold text-gray-800 mb-1">Muhammad Alqahfi</h3>
                      <p class="text-amber-600 font-semibold text-sm">Desainer Presentasi</p>
                    </div>

                    <div class="member-card bg-white rounded-xl shadow-lg p-8 text-center cursor-pointer transform transition-transform hover:scale-105 hover:shadow-xl fade-in"
                         data-name="Yufika"
                         data-role="Penulis Makalah Proyek"
                         data-description="Yufika Aufa adalah tulang punggung dokumentasi, bertugas menyusun dan merangkum seluruh proses, temuan, serta hasil proyek ke dalam makalah yang komprehensif dan mudah dimengerti."
                         data-quote="Menjelajahi dan menyajikan resep autentik adalah hal yang paling saya nikmati."
                         data-img="{{ asset('Assets/aufa.png') }}">
                      <img src="{{ asset('Assets/aufa.png') }}" alt="Foto Anggota 3" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-amber-500">
                      <h3 class="text-xl font-bold text-gray-800 mb-1">Yufika Aufa</h3>
                      <p class="text-amber-600 font-semibold text-sm">Penulis Makalah</p>
                    </div>

                    <div class="member-card bg-white rounded-xl shadow-lg p-8 text-center cursor-pointer transform transition-transform hover:scale-105 hover:shadow-xl fade-in"
                         data-name="Bagus Saputra"
                         data-role="Koordinator Dukungan Tim"
                         data-description="Bagus Saputra berperan sebagai pendukung multifungsi, siap membantu di berbagai area yang dibutuhkan untuk kelancaran proyek, memastikan setiap anggota tim mendapat support yang optimal dan lingkungan kerja yang kolaboratif."
                         data-quote="Kolaborasi adalah kunci kesuksesan setiap proyek."
                         data-img="{{ asset ('assets/bagus.png') }}">
                      <img src="{{ asset ('assets/bagus.png') }}" alt="Foto Anggota 4" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-amber-500">
                      <h3 class="text-xl font-bold text-gray-800 mb-1">Bagus Saputra</h3>
                      <p class="text-amber-600 font-semibold text-sm">Dukungan Tim</p>
                    </div>
                </div>
            </div>

            <hr class="border-t-2 border-amber-300 w-24 mx-auto mb-16">

            <div class="text-center fade-in">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Mari Berkontribusi & Berinteraksi!</h2>
                <p class="text-lg text-gray-700 leading-relaxed max-w-3xl mx-auto mb-8">
                    Kami sangat menghargai setiap masukan dan kontribusi dari Anda. Jelajahi resep kami, tinggalkan komentar, atau hubungi kami untuk berbagi ide!
                </p>
                <a href="{{ route('menu') }}#resep" class="inline-block bg-white border border-amber-600 text-amber-600 font-bold py-3 px-8 rounded-full ml-2 transition duration-300 transform hover:scale-105 shadow-md mt-4 md:mt-0">
                    Lihat Resep
                </a>
                <a href="mailto:yossandallas@gmail.com?subject=Pertanyaan%20dari%20Website&body=Halo%20tim%20Resep%20Nusantara," class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-md ml-3">
                    Hubungi Kami
                </a>
                
                <a href="{{ route('menu') }}" class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-md mt-5">
                    Kembali ke beranda
                </a>
            </div>
        </div>
    </section>

    <div id="member-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 hidden opacity-0 transition-opacity duration-300">
        <div class="bg-white rounded-lg shadow-xl p-8 max-w-md w-full relative transform -translate-y-4 opacity-0 transition-all duration-300 ease-out">
            <button id="close-modal" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl font-bold">
                &times;
            </button>

            <img id="modal-img" src="" alt="Foto Anggota" class="w-28 h-28 rounded-full mx-auto mb-6 object-cover border-4 border-amber-500">
            <h3 id="modal-name" class="text-2xl font-bold text-gray-800 mb-1 text-center"></h3>
            <p id="modal-role" class="text-amber-600 font-semibold mb-4 text-center"></p>
            <p id="modal-description" class="text-gray-700 text-base leading-relaxed mb-4 text-center"></p>
            <p id="modal-quote" class="text-gray-500 text-sm italic text-center"></p>
        </div>
    </div>

@endsection

@section('scripts') {{-- Semua JS spesifik halaman ini akan masuk ke @yield('scripts') di layout --}}
    <script>
        // --- Animasi Typewriter di Section About Us ---
        const typewriterTextElement = document.getElementById('typewriter-text');
        const textToType = "Tentang Resep Nusantara";
        let charIndex = 0;
        let typingInterval;

        function typeWriter() {
            if (charIndex < textToType.length) {
                typewriterTextElement.textContent += textToType.charAt(charIndex);
                charIndex++;
                typingInterval = setTimeout(typeWriter, 80);
            }
        }

        const typewriterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    typeWriter();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.8 });

        const typewriterElementContainer = document.querySelector('.typewriter-effect');
        if (typewriterElementContainer) {
            typewriterObserver.observe(typewriterElementContainer);
        }

        // --- Fungsionalitas Modal Anggota Tim ---
        const memberCards = document.querySelectorAll('.member-card');
        const memberModal = document.getElementById('member-modal');
        const closeModalBtn = document.getElementById('close-modal');

        const modalImg = document.getElementById('modal-img');
        const modalName = document.getElementById('modal-name');
        const modalRole = document.getElementById('modal-role');
        const modalDescription = document.getElementById('modal-description');
        const modalQuote = document.getElementById('modal-quote');

        function openModal() {
            memberModal.classList.remove('hidden');
            setTimeout(() => {
                memberModal.classList.remove('opacity-0');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            memberModal.classList.add('opacity-0');
            document.body.style.overflow = '';
            setTimeout(() => {
                memberModal.classList.add('hidden');
            }, 300);
        }

        memberCards.forEach(card => {
            card.addEventListener('click', () => {
                modalImg.src = card.dataset.img;
                modalName.textContent = card.dataset.name;
                modalRole.textContent = card.dataset.role;
                modalDescription.textContent = card.dataset.description;
                modalQuote.textContent = card.dataset.quote;
                openModal();
            });
        });

        closeModalBtn.addEventListener('click', closeModal);

        memberModal.addEventListener('click', (e) => {
            if (e.target === memberModal) {
                closeModal();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !memberModal.classList.contains('hidden')) {
                closeModal();
            }
        });
    </script>
@endsection