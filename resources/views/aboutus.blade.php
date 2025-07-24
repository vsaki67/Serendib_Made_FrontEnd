@extends('layouts.app')

@section('title', 'SerendibMade - About Us')

@section('content')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS -->
    <style>
        /* Add the missing animate-in class */
        .animate-in {
            opacity: 1 !important;
            transform: none !important;
        }

        /* Your other styles... */
        /* [Keep your gradient-bg, floating, fade-in, slide-in, pulse-glow, tooltip, map styles...] */
    </style>

    <!-- Page Content -->
    <div class="gradient-bg text-white py-20">
        <!-- Hero section -->
        ...
    </div>

    <div class="py-16 bg-white">
        <!-- About section -->
        ...
    </div>

    <div class="py-16 bg-gray-50">
        <!-- Map section + Craft Cards -->
        ...
    </div>

    <div class="py-16 bg-white">
        <!-- Values section -->
        ...
    </div>

    <!-- Scripts -->
    <script>
        // Tooltip functions
        function showTooltip(event, text) {
            const tooltip = document.getElementById('tooltip');
            tooltip.textContent = text;
            tooltip.style.left = (event.pageX + 10) + 'px';
            tooltip.style.top = (event.pageY - 40) + 'px';
            tooltip.style.opacity = '1';
        }

        function hideTooltip() {
            document.getElementById('tooltip').style.opacity = '0';
        }

        // Animation Observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(el => observer.observe(el));

        // Hover effect on cards
        document.querySelectorAll('.bg-white.rounded-2xl').forEach(card => {
            card.addEventListener('mouseenter', () => card.style.transform = 'translateY(-5px)');
            card.addEventListener('mouseleave', () => card.style.transform = 'translateY(0)');
        });

        // Dropdown + Mobile menu
        document.addEventListener('DOMContentLoaded', () => {
            const dropdownBtns = document.querySelectorAll('.dropdown-btn');
            dropdownBtns.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    const menu = this.closest('.dropdown').querySelector('.dropdown-menu');
                    document.querySelectorAll('.dropdown-menu').forEach(m => m !== menu && m.classList.add('hidden'));
                    menu.classList.toggle('hidden');
                });
            });

            document.addEventListener('click', () => {
                document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.add('hidden'));
            });

            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenuButton.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));

            const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
            mobileDropdownBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const menu = document.getElementById('mobileProductsMenu');
                    menu.classList.toggle('hidden');
                });
            });

            window.changeLang = function (lang) {
                document.getElementById('currentLang').textContent = lang;
                document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.add('hidden'));
            };
        });
    </script>
@endsection
