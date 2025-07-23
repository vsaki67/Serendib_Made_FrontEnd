@extends('layouts.app')

@section('title', 'SerendibMADE - Home')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-900 mb-6">Welcome to SerendibMADE</h1>
            <p class="text-lg text-gray-600 mb-8">Discover authentic Sri Lankan crafts and support local artisans.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Featured Product 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="Product" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Traditional Batik Art</h3>
                        <p class="text-gray-600 mt-2">Handcrafted using ancient techniques</p>
                        <button class="mt-4 bg-[#007D7D] text-white px-4 py-2 rounded hover:bg-[#006666] transition">View Details</button>
                    </div>
                </div>
                
                <!-- Featured Product 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="Product" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Ceylon Spices</h3>
                        <p class="text-gray-600 mt-2">Premium quality spices from Sri Lanka</p>
                        <button class="mt-4 bg-[#007D7D] text-white px-4 py-2 rounded hover:bg-[#006666] transition">View Details</button>
                    </div>
                </div>
                
                <!-- Featured Product 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="Product" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Handmade Jewelry</h3>
                        <p class="text-gray-600 mt-2">Unique pieces crafted with care</p>
                        <button class="mt-4 bg-[#007D7D] text-white px-4 py-2 rounded hover:bg-[#006666] transition">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Page-specific scripts can go here
</script>
@endsection