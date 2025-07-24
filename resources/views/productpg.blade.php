@extends('layouts.app')

@section('title', 'SerendibMade - Products')

@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    
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
                        <img src="{{ asset('Images_used/ProductPage_images/art4.png') }}" alt="Sacred Buddha Painting" class="w-full h-64 object-cover">
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
                        <img src="{{ asset('Images_used/ProductPage_images/art1.png') }}" alt="Elephant Wood Carving" class="w-full h-64 object-cover">
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
                        <img src="{{ asset('Images_used/ProductPage_images/art2.png') }}" alt="Traditional Mask" class="w-full h-64 object-cover">
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
                        <img src="{{ asset('Images_used/ProductPage_images/art3.png') }}" alt="Temple Scene Canvas" class="w-full h-64 object-cover">
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
                        <img src="{{ asset('Images_used/ProductPage_images/batik1.png') }}" alt="Batik Artisan" class="w-full h-64 object-cover">
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
                        <img src="{{ asset('Images_used/ProductPage_images/batik2.png') }}" alt="Traditional Batik Dress" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Traditional Batik Dress</h4>
                            <p class="text-gray-600 text-sm mb-4">Handcrafted luxury silk batik dress featuring peacock motifs, perfect for special occasions or as a statement piece.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$156.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card bg-gray-50 rounded-xl shadow-lg overflow-hidden">
                        <img src="{{ asset('Images_used/ProductPage_images/batik3.png') }}" alt="Batik Mens Shirt" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">Batik Mens Shirt</h4>
                            <p class="text-gray-600 text-sm mb-4">Stylish batik luxury shirt for men, featuring intricate patterns and a comfortable fit, perfect for casual outings.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-600">$78.99</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card bg-gray-50 rounded-xl shadow-lg overflow-hidden">
                        <img src="{{ asset('Images_used/ProductPage_images/batik4.png') }}" alt="Batik Scarf" class="w-full h-64 object-cover">
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
                        <img src="{{ asset('Images_used/ProductPage_images/spice1.png') }}" alt="Ceylon Cinnamon" class="w-full h-64 object-cover">
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
                        <img src="{{ asset('Images_used/ProductPage_images/spice2.png') }}" alt="Ceylon Cardamom" class="w-full h-64 object-cover">
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
                        <img src="{{ asset('Images_used/ProductPage_images/spice3.png') }}" alt="Curry Spice Mix" class="w-full h-64 object-cover">
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
                        <img src="{{ asset('Images_used/ProductPage_images/tea1.png') }}" alt="Ceylon Earl Grey" class="w-full h-64 object-cover">
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
                        <img src="{{ asset('Images_used/ProductPage_images/tea2.png') }}" alt="Orange Pekoe" class="w-full h-64 object-cover">
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
                        <img src="{{ asset('Images_used/ProductPage_images/tea3.png') }}" alt="Ceylon Green Tea" class="w-full h-64 object-cover">
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

@endsection

        
