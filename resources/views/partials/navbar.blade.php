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
                <a href="/homeindex" class="text-gray-700 hover:text-[#007D7D] transition">Home</a>
                
                <!-- Products Dropdown -->
                <div class="relative dropdown">
                    <button class="text-gray-700 hover:text-[#007D7D] transition flex items-center dropdown-btn">
                        Products <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                    </button>
                    <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden">
                        <a href="/productpg" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Traditional Art</a>
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Batik</a>
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Spices</a>
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Tea</a>
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Masks</a>
                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Gems</a>
                    </div>
                </div>

                <a href="/aboutus" class="text-gray-700 hover:text-[#007D7D] transition">About Us</a>
                <a href="/artisanpg" class="text-gray-700 hover:text-[#007D7D] transition">Artisan</a>
                <a href="/contactus" class="text-gray-700 hover:text-[#007D7D] transition">Contact Us</a>
                
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
                
                <!-- Updated Cart Link -->
                <a href="/cart" class="flex items-center text-gray-700 hover:text-[#007D7D] transition relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span id="cart-counter" class="ml-1">0</span>
                </a>
                
                <!-- Mobile Menu Button -->
                <button class="lg:hidden text-gray-700 hover:text-[#007D7D]" id="mobileMenuButton">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="lg:hidden hidden border-t">
            <div class="py-4 space-y-4">
                <a href="/homeindex" class="block text-gray-700 hover:text-[#007D7D]">Home</a>
                <div>
                    <button onclick="toggleProductsMenu()" class="flex items-center justify-between w-full text-gray-700 hover:text-[#007D7D]">
                        Products <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                    </button>
                    <div id="mobileProductsMenu" class="hidden ml-4 mt-2 space-y-2">
                        <a href="/productpg" class="block text-sm text-gray-600 hover:text-[#007D7D]">Traditional Art</a>
                        <a href="" class="block text-sm text-gray-600 hover:text-[#007D7D]">Batik</a>
                        <a href="" class="block text-sm text-gray-600 hover:text-[#007D7D]">Spices</a>
                        <a href="" class="block text-sm text-gray-600 hover:text-[#007D7D]">Tea</a>
                        <a href="" class="block text-sm text-gray-600 hover:text-[#007D7D]">Masks</a>
                        <a href="" class="block text-sm text-gray-600 hover:text-[#007D7D]">Gems</a>
                    </div>
                </div>
                <a href="/aboutus" class="block text-gray-700 hover:text-[#007D7D]">About Us</a>
                <a href="/artisanpg" class="block text-gray-700 hover:text-[#007D7D]">Artisan</a>
                <a href="/contactus" class="block text-gray-700 hover:text-[#007D7D]">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- Cart Notification -->
    <div id="cart-notification" class="fixed top-20 right-4 bg-green-500 text-white px-4 py-2 rounded-md shadow-lg flex items-center space-x-2 hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <span id="notification-message">Item added to cart</span>
    </div>
</nav>

<style>
    /* Cart Notification Styles */
    #cart-notification {
        transition: all 0.3s ease;
        z-index: 1000;
    }
    
    /* Dropdown styles */
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>

<script>
    // Mobile menu toggle
    document.getElementById('mobileMenuButton').addEventListener('click', function() {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });

    // Mobile products menu toggle
    function toggleProductsMenu() {
        document.getElementById('mobileProductsMenu').classList.toggle('hidden');
    }

    // Language change function
    function changeLang(lang) {
        document.getElementById('currentLang').textContent = lang;
        // Add your language change logic here
    }

    // Cart notification function (to be called when adding items to cart)
    function showCartNotification(message = 'Item added to cart') {
        const notification = document.getElementById('cart-notification');
        notification.querySelector('#notification-message').textContent = message;
        notification.classList.remove('hidden');
        
        setTimeout(() => {
            notification.classList.add('hidden');
        }, 3000);
    }

    // Update cart counter
    function updateCartCounter(count) {
        document.getElementById('cart-counter').textContent = count;
    }
</script>