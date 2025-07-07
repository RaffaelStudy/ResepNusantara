import './bootstrap';

import Alpine from 'alpinejs';

import AOS from 'aos';
import 'aos/dist/aos.css'; // Jangan lupa import CSS-nya juga

AOS.init({
    duration: 800,
    once: true
});

window.Alpine = Alpine;

Alpine.start();
