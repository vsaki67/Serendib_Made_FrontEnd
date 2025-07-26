@extends('layouts.app')

@section('title', 'SerendibMade - About Us')

@section('content')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS -->
    <style>
        /* Add the missing animate-in class */
        .animate-in {
            opacity: 1 !important;
            transform: none !important;
        }

         .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .slide-in-left {
            animation: slideInLeft 1s ease-out;
        }
        
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        .slide-in-right {
            animation: slideInRight 1s ease-out;
        }
        
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        .pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite;
        }
        
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 20px rgba(99, 102, 241, 0.3); }
            50% { box-shadow: 0 0 40px rgba(99, 102, 241, 0.6); }
        }
        
        .location-marker {
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .location-marker:hover {
            transform: scale(1.2);
        }
        
        .tooltip {
            position: absolute;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 12px;
            pointer-events: none;
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .map-container {
            position: relative;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .sri-lanka-path {
            fill: #10b981;
            stroke: #059669;
            stroke-width: 2;
            transition: all 0.3s ease;
        }
        
        .sri-lanka-path:hover {
            fill: #34d399;
        }
    </style>

    <!-- Page Content -->
    <div class="gradient-bg text-white py-20">
        <div class="container mx-auto px-6">
            <div class="text-center fade-in">
                <h1 class="text-5xl font-bold mb-6 floating">Serendib Made</h1>
                <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                    Celebrating the rich heritage and exquisite craftsmanship of Sri Lanka, 
                    where ancient traditions meet modern artistry.
                </p>
            </div>
        </div>
    </div>

    <!-- About section -->
    <div class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12 fade-in">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Our Story</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Serendib Made is more than just a brand – it's a celebration of Sri Lanka's 
                        incredible artistic legacy. From the ancient kingdoms to modern workshops, 
                        we showcase the finest traditional crafts that have been passed down through generations.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="slide-in-left">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Preserving Traditions</h3>
                        <p class="text-gray-600 mb-6">
                            Every piece in our collection tells a story of skilled artisans who have 
                            dedicated their lives to perfecting their craft. We work directly with 
                            craftspeople across the island to ensure authentic quality and fair trade practices.
                        </p>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                                <span class="text-indigo-600 text-xl">🎨</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Authentic Craftsmanship</h4>
                                <p class="text-sm text-gray-600">Traditional techniques passed down through generations</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="slide-in-right">
                        <div class="bg-gradient-to-br from-indigo-50 to-purple-50 p-8 rounded-2xl pulse-glow">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h3>
                            <p class="text-gray-600">
                                To bridge the gap between Sri Lankan artisans and the global market, 
                                ensuring that these beautiful traditional crafts continue to thrive 
                                and reach appreciative audiences worldwide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map section + Craft Cards -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Crafts Across Sri Lanka</h2>
                <p class="text-lg text-gray-600">
                    Discover the regions famous for their unique traditional crafts
                </p>
            </div>
            
            <div class="map-container">
                
                    <!-- Sri Lanka outline (simplified) -->
                    <svg viewBox="0 0 523 1024" class="w-full max-w-md mx-auto h-auto">
                        <path
                            d="M258.7,3.6C201.5,3.6,147.7,42.7,108.3,95.3
                            C67.1,151.4,44.7,217.6,40.6,286.8c-4.5,74.6,12.5,149.4,49.6,212.7
                            c27.9,47.1,40.2,103.1,33.4,157.6c-5.7,44.2-22.1,84.5-37.6,122.5
                            c-15.5,38.1-28.2,75.7-28.6,117.3c-0.3,25.6,6.7,51.2,21.2,73.6
                            c15.2,23.6,37.1,43.4,63.7,55.4c26.6,12,57.7,16.2,87,11.7
                            c35.4-5.5,66.7-26.1,94.5-49.3c31.6-26.2,62.7-59.2,83.6-95.1
                            c18.7-32.4,29.6-68.4,32.1-105.3c1.9-28.2-2.8-56.5-13.6-82.8
                            c-15.8-38.6-22.1-84.4-15.2-126.3c6.3-37.8,21.3-71.2,41.2-103
                            c28.5-46.1,48.3-96.6,55.4-149c6.2-46.2,2.9-93.8-9.4-138.5
                            c-10.5-38.9-28.4-76.2-53.5-108.7C409.4,36.6,346.8,3.6,258.7,3.6z"
                            fill="#cbd5e1" stroke="#1e293b" stroke-width="3"
                        />
                        </svg>

                    
                    <!-- Location markers -->
                    
                    <!-- Ambalangoda - Masks -->
                    <circle class="location-marker" cx="200" cy="550" r="8" fill="#ef4444" 
                            onmouseover="showTooltip(event, 'Ambalangoda - Famous for Traditional Masks')"
                            onmouseout="hideTooltip()" />
                    <text x="210" y="555" font-size="12" fill="#374151" font-weight="bold">Ambalangoda</text>
                    
                    <!-- Kandy - Tea -->
                    <circle class="location-marker" cx="320" cy="300" r="8" fill="#10b981" 
                            onmouseover="showTooltip(event, 'Kandy - Heart of Ceylon Tea Country')"
                            onmouseout="hideTooltip()" />
                    <text x="330" y="305" font-size="12" fill="#374151" font-weight="bold">Kandy</text>
                    
                    <!-- Ratnapura - Gems -->
                    <circle class="location-marker" cx="250" cy="450" r="8" fill="#8b5cf6" 
                            onmouseover="showTooltip(event, 'Ratnapura - City of Gems')"
                            onmouseout="hideTooltip()" />
                    <text x="260" y="455" font-size="12" fill="#374151" font-weight="bold">Ratnapura</text>
                    
                    <!-- Maharagama - Batik -->
                    <circle class="location-marker" cx="280" cy="500" r="8" fill="#f59e0b" 
                            onmouseover="showTooltip(event, 'Maharagama - Traditional Batik Center')"
                            onmouseout="hideTooltip()" />
                    <text x="290" y="505" font-size="12" fill="#374151" font-weight="bold">Maharagama</text>
                    
                    <!-- Matale - Spices -->
                    <circle class="location-marker" cx="300" cy="250" r="8" fill="#dc2626" 
                            onmouseover="showTooltip(event, 'Matale - Spice Garden Capital')"
                            onmouseout="hideTooltip()" />
                    <text x="310" y="255" font-size="12" fill="#374151" font-weight="bold">Matale</text>
                </svg>
                
                <div id="tooltip" class="tooltip"></div>
            </div>
            
            <!-- Craft Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 fade-in">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">🎭</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Traditional Masks</h3>
                    <p class="text-gray-600 mb-4">Ambalangoda's carved wooden masks used in traditional Kandyan and devil dances.</p>
                    <span class="text-sm text-red-600 font-medium">Ambalangoda Region</span>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 fade-in">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">🍃</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Tea</h3>
                    <p class="text-gray-600 mb-4">World-renowned tea from the hill country, particularly around Kandy and Nuwara Eliya.</p>
                    <span class="text-sm text-green-600 font-medium">Central Highlands</span>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 fade-in">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">💎</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Precious Gems</h3>
                    <p class="text-gray-600 mb-4">Sapphires, rubies, and other precious stones from the gem capital of Ratnapura.</p>
                    <span class="text-sm text-purple-600 font-medium">Ratnapura</span>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 fade-in">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">🎨</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Batik Art</h3>
                    <p class="text-gray-600 mb-4">Hand-painted and wax-resist dyed textiles with intricate patterns and vibrant colors.</p>
                    <span class="text-sm text-yellow-600 font-medium">Maharagama & Beyond</span>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 fade-in">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">🌶️</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Exotic Spices</h3>
                    <p class="text-gray-600 mb-4">Cinnamon, cardamom, cloves, and nutmeg grown in the spice gardens of Matale.</p>
                    <span class="text-sm text-red-600 font-medium">Matale District</span>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 fade-in">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">🏺</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Heritage Crafts</h3>
                    <p class="text-gray-600 mb-4">From pottery to woodcarving, Sri Lanka's diverse traditional crafts span the entire island.</p>
                    <span class="text-sm text-indigo-600 font-medium">Island-wide</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Values section -->
    <div class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-12 fade-in">Our Values</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="slide-in-left">
                        <div class="w-20 h-20 bg-gradient-to-br from-indigo-400 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl">🤝</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Fair Trade</h3>
                        <p class="text-gray-600">Supporting artisan communities with fair wages and sustainable practices.</p>
                    </div>
                    
                    <div class="fade-in">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl">♻️</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Sustainability</h3>
                        <p class="text-gray-600">Eco-friendly practices and materials that respect our environment.</p>
                    </div>
                    
                    <div class="slide-in-right">
                        <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl">✨</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Authenticity</h3>
                        <p class="text-gray-600">Genuine traditional crafts with verified heritage and quality.</p>
                    </div>
                </div>
            </div>
        </div>
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

    @include('partials.footer')
@endsection
