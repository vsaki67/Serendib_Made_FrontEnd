<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SerendibMade - Authentic Sri Lankan Crafts & Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .product-card {
            transition: all 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .category-section {
            scroll-margin-top: 100px;
        }
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background: #5E3023;
            bottom: -10px;
            left: 25%;
            border-radius: 2px;
        }
        
        /* Testimonial animations */
        .testimonial-card {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .testimonial-card.animated {
            opacity: 1;
            transform: translateY(0);
        }        
        /* Staggered delays */
        .testimonial-card:nth-child(1) { transition-delay: 0.1s; }
        .testimonial-card:nth-child(2) { transition-delay: 0.3s; }
        .testimonial-card:nth-child(3) { transition-delay: 0.5s; }        
        /* Section styling */
        .testimonials-section {
            scroll-margin-top: 100px;
        }
    </style>
</head>
<body class="bg-gray-50">
        
        <!-- Navigation -->
        <nav class="bg-white shadow-lg sticky top-0 z-50">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <!-- Logo -->
                    <div class="flex items-center space-x-2">
                        <a href="/" class="flex items-center">
                            <img 
                                src="{{ asset('Images_used/homepage_images/SERENDIB-Made(1).png') }}" 
                                alt="SerendibMade Logo"
                                class="h-10 w-auto mr-2"
                            >
                            <div class="text-2xl font-bold">
                                <span style="font-family: 'Cinzel Decorative', serif; color: #007D7D">Serendib</span>
                                <span style="font-family: 'Raleway', sans-serif; color: #7b8b8e">MADE</span>
                            </div>
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden lg:flex items-center space-x-8">
                        <a href="#" class="text-gray-700 hover:text-[#007D7D] transition">Home</a>
                        
                        <!-- Products Dropdown -->
                        <div class="relative dropdown">
                            <button class="text-gray-700 hover:text-[#007D7D] transition flex items-center dropdown-btn">
                                Products <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                            </button>
                            <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Traditional Art</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Batik</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Spices</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Tea</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Masks</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Gems</a>
                            </div>
                        </div>

                        <a href="#" class="text-gray-700 hover:text-[#007D7D] transition">About Us</a>
                        <a href="#" class="text-gray-700 hover:text-[#007D7D] transition">Artisan</a>
                        <a href="#" class="text-gray-700 hover:text-[#007D7D] transition">Contact Us</a>
                        <a href="#" class="text-gray-700 hover:text-[#007D7D] transition">Gift</a>
                        
                        <!-- Language Button -->
                        <div class="relative dropdown">
                            <button class="text-gray-700 hover:text-[#007D7D] transition flex items-center dropdown-btn">
                                <span id="currentLang">EN</span> <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                            </button>
                            <div class="dropdown-menu absolute right-0 mt-2 w-24 bg-white rounded-md shadow-lg py-1 hidden">
                                <button onclick="changeLang('EN')" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">English</button>
                                <button onclick="changeLang('JP')" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">日本語</button>
                            </div>
                        </div>
                    </div>

                    <!-- Icons -->
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-700 hover:text-[#007D7D] transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path></svg>
                        </button>
                        <button class="text-gray-700 hover:text-[#007D7D] transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </button>
                        <button class="text-gray-700 hover:text-[#007D7D] transition relative">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </button>
                        <button class="text-gray-700 hover:text-[#007D7D] transition relative">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.293 2.293A1 1 0 0 0 5.414 17H19M7 13v4a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-4m-8 6h8"></path></svg>
                        </button>
                        
                        <!-- Mobile Menu Button -->
                        <button class="lg:hidden text-gray-700 hover:text-[#007D7D]" id="mobileMenuButton">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div id="mobileMenu" class="lg:hidden hidden border-t">
                    <div class="py-4 space-y-4">
                        <a href="#" class="block text-gray-700 hover:text-[#007D7D]">Home</a>
                        <div>
                            <button onclick="toggleProductsMenu()" class="flex items-center justify-between w-full text-gray-700 hover:text-[#007D7D]">
                                Products <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                            </button>
                            <div id="mobileProductsMenu" class="hidden ml-4 mt-2 space-y-2">
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Traditional Art</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Batik</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Spices</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Tea</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Masks</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Gems</a>
                            </div>
                        </div>
                        <a href="#" class="block text-gray-700 hover:text-[#007D7D]">About Us</a>
                        <a href="#" class="block text-gray-700 hover:text-[#007D7D]">Artisan</a>
                        <a href="#" class="block text-gray-700 hover:text-[#007D7D]">Contact Us</a>
                        <a href="#" class="block text-gray-700 hover:text-[#007D7D]">Gift</a>
                    </div>
                </div>
            </div>
        </nav>

        <script>
            // Dropdown functionality for desktop
            document.addEventListener('DOMContentLoaded', function() {
                // Desktop dropdowns
                const dropdownBtns = document.querySelectorAll('.dropdown-btn');
                
                dropdownBtns.forEach(btn => {
                    btn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        const dropdown = this.closest('.dropdown');
                        const menu = dropdown.querySelector('.dropdown-menu');
                        
                        // Close all other dropdowns first
                        document.querySelectorAll('.dropdown-menu').forEach(m => {
                            if (m !== menu) m.classList.add('hidden');
                        });
                        
                        // Toggle current dropdown
                        menu.classList.toggle('hidden');
                    });
                });
                
                // Close dropdowns when clicking outside
                document.addEventListener('click', function() {
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.add('hidden');
                    });
                });
                
                // Mobile menu toggle
                const mobileMenuButton = document.getElementById('mobileMenuButton');
                const mobileMenu = document.getElementById('mobileMenu');
                
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
                
                // Mobile dropdown toggle
                const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
                
                mobileDropdownBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        const menu = document.getElementById('mobileProductsMenu');
                        menu.classList.toggle('hidden');
                    });
                });
                
                // Language change function
                window.changeLang = function(lang) {
                    document.getElementById('currentLang').textContent = lang;
                    // Close the dropdown
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.add('hidden');
                    });
                };
            });
        </script>

        <!-- Hero Section -->
        <!--<section class="hero-gradient text-white py-20 md:py-28">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Discover Sri Lankan Heritage</h1>
                <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto leading-relaxed">Experience the rich craftsmanship of Sri Lanka through our authentic handcrafted products. Each piece tells a story of tradition, culture, and artistry passed down through generations.</p>
                <div class="flex justify-center gap-4">
                    <a href="#traditional-art" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors">
                        Explore Collections
                    </a>
                    <a href="#" class="border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                        Meet Our Artisans
                    </a>
                </div>
            </div>
        </section>-->


        <!-- Traditional Art Section -->
        <section id="traditional-art" class="py-16 bg-[#F2E6D8]">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="section-title text-3xl md:text-4xl font-bold text-[#5E3023]">Traditional Art Collection</h2>
                    <p class="text-[#5E3023] max-w-3xl mx-auto">Our traditional art pieces are created by master artisans using techniques passed down through generations, capturing the essence of Sri Lankan culture and spirituality.</p>
                </div>
                
                <!-- Featured Product -->
                <div class="mb-16 bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/2">
                            <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=800&fit=crop" alt="Featured Traditional Art" class="w-full h-full object-cover">
                        </div>
                        <div class="md:w-1/2 p-8 flex flex-col justify-center">
                            <div class="flex items-center mb-4">
                                <div class="flex text-[#FFCC00]">
                                    ★ ★ ★ ★ ★
                                </div>
                                <span class="text-sm text-gray-500 ml-2">(42 customer reviews)</span>
                            </div>
                            <h3 class="text-3xl font-bold text-[#5E3023] mb-4">Sacred Buddha Painting</h3>
                            <p class="text-gray-600 mb-6">This exquisite painting depicts the Buddha in meditation, created using traditional natural pigments on handmade paper. The gold leaf detailing adds a luminous quality that changes with the light.</p>
                            <div class="mb-6">
                                <span class="text-3xl font-bold text-[#007D7D]">$129.99</span>
                                <span class="text-lg text-gray-500 line-through ml-2">$159.99</span>
                                <span class="ml-4 bg-[#CC3333] text-white text-sm font-semibold px-2 py-1 rounded">20% OFF</span>
                            </div>
                            <div class="mb-6">
                                <h4 class="font-semibold text-[#5E3023] mb-2">Artisan Story:</h4>
                                <p class="text-gray-600">Created by Master Artist Sarath Wijesinghe from Kandy, who has been practicing this art form for over 35 years. Each painting takes approximately 3 weeks to complete.</p>
                            </div>
                            <button class="bg-[#007D7D] text-white px-6 py-3 rounded-lg hover:bg-[#006666] transition-colors font-semibold flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Product Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Product Card 1 -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1576398289164-c48dc021b4e1?w=600&fit=crop" alt="Elephant Wood Carving" class="w-full h-64 object-cover">
                            <div class="absolute top-2 right-2">
                                <button class="p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#CC3333]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-1">
                                <div class="flex text-[#FFCC00]">
                                    ★ ★ ★ ★ ☆
                                </div>
                                <span class="text-xs text-gray-500 ml-1">(18)</span>
                            </div>
                            <h4 class="text-xl font-semibold text-[#5E3023] mb-2">Elephant Wood Carving</h4>
                            <p class="text-gray-600 text-sm mb-4">Handcrafted from sustainably sourced teak wood, this 12" carving symbolizes wisdom and strength in Sri Lankan culture.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-[#007D7D]">$124.99</span>
                                <button class="bg-[#007D7D] text-white px-4 py-2 rounded-lg hover:bg-[#006666] transition-colors flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=600&fit=crop" alt="Traditional Mask" class="w-full h-64 object-cover">
                            <div class="absolute top-2 right-2">
                                <button class="p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <span class="absolute top-2 left-2 bg-[#663399] text-white text-xs font-semibold px-2 py-1 rounded">NEW</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-1">
                                <div class="flex text-[#FFCC00]">
                                    ★ ★ ★ ★ ☆
                                </div>
                                <span class="text-xs text-gray-500 ml-1">(9)</span>
                            </div>
                            <h4 class="text-xl font-semibold text-[#5E3023] mb-2">Kolam Mask</h4>
                            <p class="text-gray-600 text-sm mb-4">Authentic Sri Lankan ceremonial mask, hand-carved and painted using traditional techniques from Ambalangoda.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-[#007D7D]">$95.50</span>
                                <button class="bg-[#007D7D] text-white px-4 py-2 rounded-lg hover:bg-[#006666] transition-colors flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=600&fit=crop" alt="Temple Scene Canvas" class="w-full h-64 object-cover">
                            <div class="absolute top-2 right-2">
                                <button class="p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </button>
                            </div>
                            <span class="absolute top-2 left-2 bg-[#339966] text-white text-xs font-semibold px-2 py-1 rounded">ECO-FRIENDLY</span>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-1">
                                <div class="flex text-[#FFCC00]">
                                    ★ ★ ★ ★ ★
                                </div>
                                <span class="text-xs text-gray-500 ml-1">(32)</span>
                            </div>
                            <h4 class="text-xl font-semibold text-[#5E3023] mb-2">Temple Scene Canvas</h4>
                            <p class="text-gray-600 text-sm mb-4">Traditional Sri Lankan temple artwork with gold leaf details, depicting the famous Temple of the Tooth in Kandy.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-[#007D7D]">$67.99</span>
                                <button class="bg-[#007D7D] text-white px-4 py-2 rounded-lg hover:bg-[#006666] transition-colors flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View More Button -->
                <div class="mt-12 text-center">
                    <a href="#" class="inline-block border-2 border-[#5E3023] text-[#5E3023] font-semibold px-8 py-3 rounded-lg hover:bg-[#5E3023] hover:text-white transition-colors">
                        View All Traditional Art
                    </a>
                </div>
            </div>
        </section>

        <!-- Batik Section -->
        <section id="batik" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800">Batik Collection</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto">Discover the vibrant world of Sri Lankan batik, where wax-resist dyeing techniques create stunning patterns on fabric, each telling a unique story.</p>
                </div>
                
                <!-- Batik Story -->
                <div class="mb-12 bg-gray-50 rounded-xl p-8 md:p-12">
                    <div class="md:flex items-center">
                        <div class="md:w-1/3 mb-6 md:mb-0 md:pr-8">
                            <img src="https://images.unsplash.com/photo-1594736797933-d0b22cad7de1?w=600&fit=crop" alt="Batik Artisan" class="w-full rounded-lg shadow-md">
                        </div>
                        <div class="md:w-2/3">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">The Art of Sri Lankan Batik</h3>
                            <p class="text-gray-600 mb-4">Batik in Sri Lanka is more than just fabric - it's a cultural heritage. Our artisans use traditional methods of applying wax and dyes to create intricate designs that often depict local flora, fauna, and cultural motifs.</p>
                            <p class="text-gray-600">Each piece is unique, with the characteristic "crackle" effect that occurs when dye penetrates the wax-resist lines. This labor-intensive process can take weeks to complete for a single piece.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Batik Products -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="product-card bg-gray-50 rounded-xl shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1594736797933-d0b22cad7de1?w=600&fit=crop" alt="Batik Dress" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Traditional Batik Dress</h4>
                            <p class="text-gray-600 text-sm mb-4">Handcrafted silk batik dress featuring peacock motifs, perfect for special occasions or as a statement piece.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$156.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card bg-gray-50 rounded-xl shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1594736797933-d0b22cad7de1?w=600&fit=crop" alt="Batik Wall Art" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Batik Wall Hanging</h4>
                            <p class="text-gray-600 text-sm mb-4">Large decorative batik art piece depicting elephants in procession, a common Sri Lankan cultural theme.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$78.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card bg-gray-50 rounded-xl shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1594736797933-d0b22cad7de1?w=600&fit=crop" alt="Batik Scarf" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Silk Batik Scarf</h4>
                            <p class="text-gray-600 text-sm mb-4">Luxurious silk scarf with intricate batik print in vibrant colors, lightweight and perfect for any season.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$42.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- View More Button -->
                <div class="mt-12 text-center">
                    <a href="#" class="inline-block border-2 border-blue-600 text-blue-600 font-semibold px-8 py-3 rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                        Explore More Batik
                    </a>
                </div>
            </div>
        </section>

        <!-- Spices Section -->
        <section id="spices" class="py-16 bg-[#F8F5F0]">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800">Ceylon Spices</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto">Experience the aromatic spices from the lush gardens of Sri Lanka, known for their exceptional quality and flavor.</p>
                </div>
                
                <!-- Spice Benefits -->
                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Premium Quality</h3>
                        <p class="text-gray-600">Our spices are handpicked at peak freshness and carefully processed to preserve their essential oils and flavors.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Direct from Source</h3>
                        <p class="text-gray-600">We work directly with small-scale farmers to bring you the freshest spices while supporting local communities.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Sustainable Packaging</h3>
                        <p class="text-gray-600">Our spices come in eco-friendly packaging that preserves freshness while minimizing environmental impact.</p>
                    </div>
                </div>
                
                <!-- Spice Products -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?w=600&fit=crop" alt="Ceylon Cinnamon" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Cinnamon</h4>
                            <p class="text-gray-600 text-sm mb-4">Premium quality true cinnamon (Cinnamomum verum) with delicate flavor and low coumarin content.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$24.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?w=600&fit=crop" alt="Cardamom" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Cardamom</h4>
                            <p class="text-gray-600 text-sm mb-4">Aromatic green cardamom pods with citrusy, floral notes, perfect for both sweet and savory dishes.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$18.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?w=600&fit=crop" alt="Spice Mix" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Curry Spice Mix</h4>
                            <p class="text-gray-600 text-sm mb-4">Authentic Sri Lankan curry blend with 12 spices, including coriander, cumin, fennel, and mustard seeds.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$16.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Spice Guide CTA -->
                <div class="mt-12 bg-[#5E3023] rounded-xl p-8 text-white">
                    <div class="md:flex items-center justify-between">
                        <div class="md:w-2/3 mb-6 md:mb-0">
                            <h3 class="text-2xl font-bold mb-2">Discover the Spice of Life</h3>
                            <p>Download our free guide to Sri Lankan spices, including recipes, health benefits, and usage tips.</p>
                        </div>
                        <div class="md:w-1/3 text-right">
                            <button class="bg-white text-[#5E3023] px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                Get Your Free Guide
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tea Section -->
        <section id="tea" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800">Ceylon Tea</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto">World-renowned tea from the misty highlands of Sri Lanka, celebrated for its bright flavor and aromatic qualities.</p>
                </div>
                
                <!-- Tea Types -->
                <div class="mb-12">
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Black Tea -->
                        <div class="group relative overflow-hidden rounded-xl h-96">
                            <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600&fit=crop" alt="Black Tea" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                            <div class="absolute bottom-0 left-0 p-6 text-white">
                                <h3 class="text-2xl font-bold mb-2">Black Tea</h3>
                                <p class="mb-4">Full-bodied and robust, perfect for morning energy.</p>
                                <a href="#" class="text-white font-semibold hover:underline">Explore Black Teas →</a>
                            </div>
                        </div>
                        
                        <!-- Green Tea -->
                        <div class="group relative overflow-hidden rounded-xl h-96">
                            <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600&fit=crop" alt="Green Tea" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                            <div class="absolute bottom-0 left-0 p-6 text-white">
                                <h3 class="text-2xl font-bold mb-2">Green Tea</h3>
                                <p class="mb-4">Delicate and refreshing with antioxidant benefits.</p>
                                <a href="#" class="text-white font-semibold hover:underline">Explore Green Teas →</a>
                            </div>
                        </div>
                        
                        <!-- White Tea -->
                        <div class="group relative overflow-hidden rounded-xl h-96">
                            <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600&fit=crop" alt="White Tea" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                            <div class="absolute bottom-0 left-0 p-6 text-white">
                                <h3 class="text-2xl font-bold mb-2">White Tea</h3>
                                <p class="mb-4">Rare and delicate, handpicked from young tea buds.</p>
                                <a href="#" class="text-white font-semibold hover:underline">Explore White Teas →</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Tea Products -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="product-card bg-gray-50 rounded-xl shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600&fit=crop" alt="Earl Grey Tea" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Earl Grey</h4>
                            <p class="text-gray-600 text-sm mb-4">Premium black tea with natural bergamot oil, creating a distinctive citrusy aroma.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$19.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card bg-gray-50 rounded-xl shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600&fit=crop" alt="Pekoe Tea" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Orange Pekoe</h4>
                            <p class="text-gray-600 text-sm mb-4">High-grade Ceylon black tea from Nuwara Eliya with bright flavor and golden liquor.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$15.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card bg-gray-50 rounded-xl shadow-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600&fit=crop" alt="Green Tea" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Green Tea</h4>
                            <p class="text-gray-600 text-sm mb-4">Organic green tea leaves with a light, refreshing taste and high antioxidant content.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$22.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tea Subscription CTA -->
                <div class="mt-12 bg-gradient-to-r from-green-700 to-green-900 rounded-xl p-8 text-white">
                    <div class="md:flex items-center justify-between">
                        <div class="md:w-2/3 mb-6 md:mb-0">
                            <h3 class="text-2xl font-bold mb-2">Tea Lover's Subscription</h3>
                            <p class="mb-4">Never run out of your favorite Ceylon tea. Our subscription service delivers fresh tea to your door every month.</p>
                            <ul class="space-y-2">
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-300" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Free shipping on all orders
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-300" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    15% discount on subscription teas
                                </li>
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-300" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Flexible plans - cancel anytime
                                </li>
                            </ul>
                        </div>
                        <div class="md:w-1/3 text-center">
                            <button class="bg-white text-green-800 px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition-colors text-lg">
                                Start Your Tea Journey
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gems Section -->
        <section id="gems" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800">Ceylon Gems</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto">Sri Lanka, the "Jewel Box of the Indian Ocean," is renowned for its spectacular gemstones, including some of the world's finest sapphires.</p>
                </div>
                
                <!-- Gemstone Guide --> 
                <div class="mb-12 bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">About Ceylon Gemstones</h3>
                            <p class="text-gray-600 mb-4">Sri Lanka has been a leading source of fine gemstones for over 2,500 years. The island's unique geological conditions produce gems of exceptional clarity and color.</p>
                            <p class="text-gray-600 mb-6">Our gemstones are ethically sourced through fair trade practices, supporting local miners and lapidaries while ensuring the highest quality for our customers.</p>
                            <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">
                                Learn more about our ethical sourcing
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                        <div class="md:w-1/2">
                            <img src="{{ asset('Images_used/ProductPage_images/gem1.png') }}" alt="Ceylon Gemstones" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>


                
                <!-- Gemstone Products -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Blue Sapphire -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                        <img src="{{ asset('Images_used/ProductPage_images/gem2.png') }}" alt="Blue Sapphire" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Blue Sapphire</h4>
                            <p class="text-gray-600 text-sm mb-4">2.5 carat natural blue sapphire with excellent clarity and cornflower blue color, set in sterling silver.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$1,299.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Star Ruby -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                        <img src="{{ asset('Images_used/ProductPage_images/gem3.png') }}" alt="Star Ruby" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Star Ruby</h4>
                            <p class="text-gray-600 text-sm mb-4">Rare star ruby displaying sharp asterism (star effect) when viewed under direct light.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$899.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Yellow Sapphire -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                        <img src="{{ asset('Images_used/ProductPage_images/gem4.png') }}" alt="Yellow Sapphire" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Yellow Sapphire</h4>
                            <p class="text-gray-600 text-sm mb-4">Brilliant yellow sapphire stone with excellent cut and clarity, perfect for custom jewelry.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$756.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- Certification Info -->
                <div class="mt-12 bg-gray-100 rounded-xl p-8">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Gemstone Certification</h3>
                        <p class="text-gray-600 max-w-3xl mx-auto mb-6">All our gemstones come with a certificate of authenticity from recognized gemological laboratories, guaranteeing their natural origin and quality.</p>
                        <div class="flex flex-wrap justify-center gap-6">
                            <img src="https://via.placeholder.com/120x60?text=GIA" alt="GIA" class="h-12 object-contain opacity-80 hover:opacity-100 transition-opacity">
                            <img src="https://via.placeholder.com/120x60?text=AGTA" alt="AGTA" class="h-12 object-contain opacity-80 hover:opacity-100 transition-opacity">
                            <img src="https://via.placeholder.com/120x60?text=GSL" alt="GSL" class="h-12 object-contain opacity-80 hover:opacity-100 transition-opacity">
                            <img src="https://via.placeholder.com/120x60?text=NGJA" alt="NGJA" class="h-12 object-contain opacity-80 hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Artisan Spotlight -->
        <!--<section class="py-16 bg-[#5E3023] text-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="section-title text-3xl md:text-4xl font-bold">Meet Our Artisans</h2>
                    <p class="max-w-3xl mx-auto opacity-90">Behind every SerendibMade product is a skilled artisan preserving Sri Lanka's cultural heritage.</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="order-2 md:order-1">
                        <h3 class="text-2xl font-bold mb-4">Master Batik Artist: Nimali Fernando</h3>
                        <p class="mb-6 opacity-90">With over 25 years of experience, Nimali is one of Sri Lanka's foremost batik artists. Her work has been exhibited internationally, yet she remains committed to teaching traditional techniques to the next generation in her small workshop near Colombo.</p>
                        <p class="mb-6 opacity-90">"Batik is more than art—it's a meditation. Each piece carries the energy and intention of the artist. When you own a batik, you're not just buying fabric, you're preserving a piece of our culture."</p>
                        <a href="#" class="inline-block border-2 border-white text-white font-semibold px-6 py-3 rounded-lg hover:bg-white hover:text-[#5E3023] transition-colors">
                            Read More Artisan Stories
                        </a>
                    </div>
                    <div class="order-1 md:order-2">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=600&fit=crop" alt="Artisan Nimali Fernando" class="w-full rounded-xl shadow-2xl">
                    </div>
                </div>
            </div>
        </section>-->

        <!-- Sustainability Commitment -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800">Our Commitment</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto">At SerendibMade, we're dedicated to ethical practices, sustainability, and preserving Sri Lanka's artistic heritage.</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Ethical Sourcing -->
                    <div class="bg-gray-50 p-8 rounded-xl">
                        <div class="text-green-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Ethical Sourcing</h3>
                        <p class="text-gray-600">We work directly with artisans and small-scale producers, ensuring fair wages and safe working conditions. Our partnerships help preserve traditional crafts while providing sustainable livelihoods.</p>
                    </div>
                    
                    <!-- Sustainable Materials -->
                    <div class="bg-gray-50 p-8 rounded-xl">
                        <div class="text-green-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Sustainable Materials</h3>
                        <p class="text-gray-600">From organic cotton to sustainably harvested wood and natural dyes, we prioritize eco-friendly materials. Our packaging is minimal, recyclable, and often reusable.</p>
                    </div>
                    
                    <!-- Cultural Preservation -->
                    <div class="bg-gray-50 p-8 rounded-xl">
                        <div class="text-green-600 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Cultural Preservation</h3>
                        <p class="text-gray-600">A portion of every sale funds workshops and apprenticeships to ensure traditional Sri Lankan crafts continue to thrive for future generations.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials with Animation -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800">What Our Customers Say</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto">Don't just take our word for it - hear from those who've experienced SerendibMade products.</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card bg-white p-8 rounded-xl shadow-md transform transition-all duration-500 ease-in-out opacity-0 translate-y-10">
                        <div class="flex text-[#FFCC00] mb-4">
                            ★ ★ ★ ★ ★
                        </div>
                        <p class="text-gray-600 italic mb-6">"The batik scarf I purchased is absolutely stunning. The colors are vibrant and the quality is exceptional. I've received countless compliments every time I wear it!"</p>
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop" alt="Sarah J." class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-semibold text-gray-800">Sarah J.</h4>
                                <p class="text-sm text-gray-500">New York, USA</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="testimonial-card bg-white p-8 rounded-xl shadow-md transform transition-all duration-500 ease-in-out opacity-0 translate-y-10 delay-200">
                        <div class="flex text-[#FFCC00] mb-4">
                            ★ ★ ★ ★ ★
                        </div>
                        <p class="text-gray-600 italic mb-6">"As a tea connoisseur, I can confidently say SerendibMade's Ceylon Orange Pekoe is among the finest I've tasted. The flavor profile is complex yet balanced, and the aroma is divine."</p>
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1542103749-8ef59b94f47e?w=100&h=100&fit=crop" alt="Michael T." class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-semibold text-gray-800">Michael T.</h4>
                                <p class="text-sm text-gray-500">London, UK</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="testimonial-card bg-white p-8 rounded-xl shadow-md transform transition-all duration-500 ease-in-out opacity-0 translate-y-10 delay-400">
                        <div class="flex text-[#FFCC00] mb-4">
                            ★ ★ ★ ★ ☆
                        </div>
                        <p class="text-gray-600 italic mb-6">"The cinnamon I ordered arrived fresh and fragrant. It's noticeably different from what I find locally - sweeter and more complex. I'll definitely be ordering more spices!"</p>
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop" alt="Emily R." class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-semibold text-gray-800">Emily R.</h4>
                                <p class="text-sm text-gray-500">Toronto, Canada</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            /* Animation styles */
            .testimonial-card {
                transition: opacity 0.5s ease, transform 0.5s ease;
            }
            
            .testimonial-card.animate {
                opacity: 1;
                transform: translateY(0);
            }
            
            .delay-200 {
                transition-delay: 200ms;
            }
            
            .delay-400 {
                transition-delay: 400ms;
            }
        </style>

        <script>
            // Animate testimonials when they come into view
            document.addEventListener('DOMContentLoaded', function() {
                const testimonialCards = document.querySelectorAll('.testimonial-card');
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate');
                        }
                    });
                }, { threshold: 0.1 });
                
                testimonialCards.forEach(card => {
                    observer.observe(card);
                });
            });
        </script>

        <!-- Final CTA -->
        <section class="py-16 bg-gradient-to-r from-blue-700 to-blue-900 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Experience Sri Lankan Craftsmanship?</h2>
                <p class="text-xl mb-8 max-w-3xl mx-auto">Join thousands of satisfied customers who've brought a piece of Sri Lanka's heritage into their homes.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="bg-white text-blue-600 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition-colors text-lg">
                        Shop Our Collections
                    </a>
                    <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-blue-600 transition-colors text-lg">
                        Contact Our Experts
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="text-2xl font-bold">
                                <span style="font-family: 'Cinzel Decorative', serif; color: #004d40">Serendib</span>
                                <span style="font-family: 'Raleway', sans-serif; color: #7b8b8e">MADE</span>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-4">Bringing authentic Sri Lankan crafts to the world, supporting local artisans and preserving traditional techniques.</p>
                        <div class="flex space-x-4">
                            <button class="text-gray-300 hover:text-primary transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </button>
                            <button class="text-gray-300 hover:text-primary transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/></svg>
                            </button>
                            <button class="text-gray-300 hover:text-primary transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.042-3.441.219-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.221.083.343-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/></svg>
                            </button>
                            <button class="text-gray-300 hover:text-primary transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">About Us</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Our Artisans</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Quality Promise</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Shipping Info</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Returns</a></li>
                        </ul>
                    </div>
                    
                    <!-- Categories -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Categories</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Traditional Art</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Batik</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Ceylon Tea</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Spices</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Gemstones</a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                        <div class="space-y-2 text-gray-300">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Colombo, Sri Lanka</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span>+94 11 123 4567</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span>hello@serendibmade.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Footer -->
                <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-300 text-sm">
                        © 2025 SerendibMade. All rights reserved.
                    </div>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-300 hover:text-primary text-sm transition">Privacy Policy</a>
                        <a href="#" class="text-gray-300 hover:text-primary text-sm transition">Terms of Service</a>
                        <a href="#" class="text-gray-300 hover:text-primary text-sm transition">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>