@extends('layouts.app')

@section('title', 'SerendibMade - Cart')

@section('content')
    <style>
        .text-custom-teal { color: #007D7D; }
        .bg-custom-teal { background-color: #007D7D; }
        .hover\:bg-custom-dark-teal:hover { background-color: #005D5D; }

        .quantity-btn {
            transition: all 0.2s ease;
        }

        .quantity-btn:hover {
            background-color: #e2e8f0;
        }
    </style>


    <main class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-custom-teal mb-8 text-center">Your Shopping Cart</h1>

        <div id="cart-items" class="space-y-6 mb-8">
            <!-- Cart items will appear here -->
        </div>

        <div class="cart-summary border-t pt-6">
            <div class="flex justify-between items-center mb-3">
                <span class="font-medium text-lg">Subtotal:</span>
                <span id="cart-subtotal" class="font-semibold text-lg">$0.00</span>
            </div>
            <div class="flex justify-between items-center mb-3">
                <span class="font-medium text-lg">Shipping:</span>
                <span id="cart-shipping" class="text-gray-600 text-base">Calculated at checkout</span>
            </div>
            <div class="flex justify-between items-center text-xl font-bold border-t pt-4">
                <span>Total:</span>
                <span id="cart-total" class="text-custom-teal">$0.00</span>
            </div>

            <button id="checkout-btn" class="w-full mt-8 bg-custom-teal hover:bg-custom-dark-teal text-white py-3 rounded-md transition duration-300">
                Proceed to Checkout
            </button>
        </div>
         <!-- Custom Modal -->
        <div id="checkout-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-xl shadow-xl p-6 max-w-md w-full text-center">
                <h2 class="text-xl font-bold text-custom-teal mb-4">Checkout Notice</h2>
                <p class="text-gray-700 mb-6">This is a demo only. In a real website, you'd now proceed to the payment gateway.</p>
                <button id="close-modal" class="bg-custom-teal text-white px-6 py-2 rounded hover:bg-custom-dark-teal transition">
                    Got it!
                </button>
            </div>
        </div>
    </main>

    <script>
        function displayCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartItemsEl = document.getElementById('cart-items');
            const cartSubtotalEl = document.getElementById('cart-subtotal');
            const cartTotalEl = document.getElementById('cart-total');
            const checkoutBtn = document.getElementById('checkout-btn');

            if (cart.length === 0) {
                cartItemsEl.innerHTML = `
                    <div class="text-center py-16 text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <h3 class="text-xl font-semibold">Your cart is empty</h3>
                        <p class="text-gray-500 mt-2">Browse our products to add items.</p>
                        <a href="/productpg" class="inline-block mt-6 px-6 py-2 bg-custom-teal text-white rounded hover:bg-custom-dark-teal transition">
                            Continue Shopping
                        </a>
                    </div>
                `;
                cartSubtotalEl.textContent = '$0.00';
                cartTotalEl.textContent = '$0.00';
                checkoutBtn.style.display = 'none';
                return;
            }

            let subtotal = 0;
            let html = '';

            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;

                html += `
                    <div class="flex items-start border-b pb-4 gap-4">
                        <img src="/Images_used/ProductPage_images/${item.image}" class="w-24 h-24 object-cover rounded-md">
                        <div class="flex-1 space-y-2">
                            <div class="flex justify-between">
                                <h3 class="font-semibold text-lg">${item.name}</h3>
                                <span class="font-bold">$${itemTotal.toFixed(2)}</span>
                            </div>
                            <p class="text-sm text-gray-500">$${item.price.toFixed(2)} × ${item.quantity}</p>
                            <div class="flex items-center gap-1 mt-2">
                                <button onclick="updateQuantity('${item.id}', -1)" class="quantity-btn bg-gray-200 px-3 py-1 rounded-l">−</button>
                                <span class="bg-gray-100 px-4 py-1">${item.quantity}</span>
                                <button onclick="updateQuantity('${item.id}', 1)" class="quantity-btn bg-gray-200 px-3 py-1 rounded-r">+</button>
                                <button onclick="removeItem('${item.id}')" class="ml-auto text-red-500 hover:text-red-700 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Remove
                                </button>
                            </div>
                        </div>
                    </div>
                `;
            });

            cartItemsEl.innerHTML = html;
            cartSubtotalEl.textContent = `$${subtotal.toFixed(2)}`;
            cartTotalEl.textContent = `$${subtotal.toFixed(2)}`;
            checkoutBtn.style.display = 'block';
        }

        function updateQuantity(id, change) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const index = cart.findIndex(item => item.id === id);
            if (index !== -1) {
                const newQty = cart[index].quantity + change;
                if (newQty < 1) {
                    removeItem(id);
                    return;
                }
                cart[index].quantity = newQty;
                localStorage.setItem('cart', JSON.stringify(cart));
                displayCart();
                updateCartCounter();
            }
        }

        function removeItem(id) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart = cart.filter(item => item.id !== id);
            localStorage.setItem('cart', JSON.stringify(cart));
            displayCart();
            updateCartCounter();
        }

        function updateCartCounter() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const count = cart.reduce((total, item) => total + item.quantity, 0);
            const counter = document.getElementById('cart-counter');
            if (counter) counter.textContent = count;
        }

        document.addEventListener('DOMContentLoaded', () => {
            displayCart();
            updateCartCounter();

            document.getElementById('checkout-btn')?.addEventListener('click', () => {
                alert('Proceeding to checkout (demo only).');
            });
        });
    </script>

@endsection
