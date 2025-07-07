<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Resep Nusantara')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="assets/logo_resep.ico" type="image/x-icon">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Custom CSS untuk animasi typewriter */
        .typewriter-effect h2 span.cursor {
            display: inline-block;
            background-color: #f59e0b; /* Warna amber-500 */
            margin-left: 0.1em;
            width: 3px;
            animation: blink 0.7s infinite;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

        /* Animasi Fade-In on Scroll */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
        }

        /* Animasi Modal */
        #member-modal.hidden {
            display: none;
        }
        #member-modal.opacity-0 {
            opacity: 0;
        }
        #member-modal > div { /* Target the modal content */
            transition: transform 0.3s ease-out, opacity 0.3s ease-out;
        }
        #member-modal.opacity-0 > div {
            transform: translateY(-20px); /* Initial position off-screen */
            opacity: 0;
        }
        #member-modal:not(.opacity-0) > div {
            transform: translateY(0); /* Final position on-screen */
            opacity: 1;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-900">

    {{-- KONDISIONAL UNTUK NAVBAR --}}
    @if (!isset($hideNavbar) || !$hideNavbar)
    <nav class="bg-amber-700 p-4 shadow-md text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('menu') }}" class="text-2xl font-bold">Resep Nusantara</a>
            <div class="hidden md:flex space-x-6">
                <a href="{{ route('menu') }}#hero" class="hover:text-amber-200 transition">Beranda</a>
                <a href="{{ route('menu') }}#resep" class="hover:text-amber-200 transition">Resep</a>
                <a href="{{ route('about') }}" class="hover:text-amber-200 transition">Tentang Kami</a>
                <a href="{{ route('menu') }}#comment-section" class="hover:text-amber-200 transition">Komentar</a>
                <a href="{{ route('menu') }}#contact" class="hover:text-amber-200 transition">Kontak</a>
            </div>
            <button id="menu-toggle" class="md:hidden text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
    </nav>

    <div id="mobile-menu" class="fixed inset-y-0 right-0 w-64 bg-amber-800 text-white p-4 shadow-lg transform translate-x-full transition-transform duration-300 z-40">
        <button id="close-sidebar" class="absolute top-4 right-4 text-white text-xl">
            &times;
        </button>
        <nav class="flex flex-col space-y-4 mt-8">
            <a href="{{ route('menu') }}#hero" class="hover:text-amber-200 transition">Beranda</a>
            <a href="{{ route('menu') }}#resep" class="hover:text-amber-200 transition">Resep</a>
            <a href="{{ route('about') }}" class="hover:text-amber-200 transition">Tentang Kami</a>
            <a href="{{ route('menu') }}#comment-section" class="hover:text-amber-200 transition">Komentar</a>
            <a href="{{ route('menu') }}#contact" class="hover:text-amber-200 transition">Kontak</a>
        </nav>
    </div>
    @endif {{-- AKHIR KONDISIONAL NAVBAR --}}

    {{-- Ini adalah tempat konten unik setiap halaman akan disuntikkan --}}
    @yield('content')

    <footer id="contact" class="bg-amber-800 text-white py-12 px-4 fade-in">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            <div>
                <h3 class="text-2xl font-bold mb-4">Resep Nusantara</h3>
                <p class="text-gray-300 text-sm leading-relaxed">Jelajahi kelezatan masakan Indonesia dari Sabang sampai Merauke. Resep mudah, hasil sempurna, siap memanjakan lidah Anda.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('menu') }}#hero" class="text-gray-300 hover:text-amber-300 transition duration-300">Beranda</a></li>
                    <li><a href="{{ route('menu') }}#resep" class="text-gray-300 hover:text-amber-300 transition duration-300">Resep</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-amber-300 transition duration-300">Tentang Kami</a></li>
                    <li><a href="{{ route('menu') }}#comment-section" class="text-gray-300 hover:text-amber-300 transition duration-300">Komentar</a></li>
                    <li><a href="{{ route('menu') }}#contact" class="text-gray-300 hover:text-amber-300 transition duration-300">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Hubungi Kami</h3>
                <p class="text-gray-300 mb-2">Email: info@resepnusantara.com</p>
                <p class="text-gray-300 mb-4">Telepon: +62 812-3456-7890</p>
                <h3 class="text-xl font-bold mb-4">Ikuti Kami</h3>
                <div class="flex justify-center md:justify-start space-x-5">
                    <a href="#" class="text-gray-300 hover:text-amber-300 transition duration-300 transform hover:scale-110">
                        <i class="fab fa-facebook-f text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-amber-300 transition duration-300 transform hover:scale-110">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-amber-300 transition duration-300 transform hover:scale-110">
                        <i class="fab fa-twitter text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-amber-700 text-center text-sm text-gray-400">
            &copy; 2025 Resep Nusantara. Semua hak dilindungi.
        </div>
    </footer>

    <script>
        // --- Sidebar Mobile Toggle (hanya aktif jika navbar tidak disembunyikan) ---
        @if (!isset($hideNavbar) || !$hideNavbar)
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const closeSidebar = document.getElementById('close-sidebar');

            if (menuToggle && mobileMenu && closeSidebar) {
                menuToggle.addEventListener('click', () => {
                    mobileMenu.classList.toggle('translate-x-full');
                });
                closeSidebar.addEventListener('click', () => {
                    mobileMenu.classList.add('translate-x-full');
                });
                mobileMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('translate-x-full');
                    });
                });
            }
        @endif

        // --- Animasi Fade-In on Scroll (Global) ---
        const fadeInElements = document.querySelectorAll('.fade-in');
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('appear');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        fadeInElements.forEach(el => observer.observe(el));

        // AOS Initialization (jika pakai CDN, ini juga di layout)
        // Jika pakai NPM, pastikan app.js Anda sudah menginisialisasi AOS
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

    {{-- JavaScript spesifik halaman --}}
    @yield('scripts')

</body>
</html>