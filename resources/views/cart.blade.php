<div class="cart-container">
  <h2>Your Cart</h2>
  <div id="cart-items"></div>
  <div class="cart-total">
    Total: $<span id="cart-total">0.00</span>
  </div>
  <button id="checkout-btn">Proceed to Checkout</button>
</div>

<script>
  // Display cart items
  function displayCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItemsEl = document.getElementById('cart-items');
    const cartTotalEl = document.getElementById('cart-total');

    if (cart.length === 0) {
      cartItemsEl.innerHTML = '<p>Your cart is empty</p>';
      cartTotalEl.textContent = '0.00';
      return;
    }

    let html = '';
    let total = 0;

    cart.forEach(item => {
      total += item.price * item.quantity;
      html += `
        <div class="cart-item">
          <img src="Images_used/ProductPage_images/${item.image}" width="50">
          <div>
            <h3>${item.name}</h3>
            <p>$${item.price} × ${item.quantity}</p>
            <button onclick="removeItem('${item.id}')">Remove</button>
          </div>
        </div>
      `;
    });

    cartItemsEl.innerHTML = html;
    cartTotalEl.textContent = total.toFixed(2);
  }

  // Remove item function
  function removeItem(id) {
    let cart = JSON.parse(localStorage.getItem('cart'));
    cart = cart.filter(item => item.id !== id);
    localStorage.setItem('cart', JSON.stringify(cart));
    displayCart();
    updateCartCounter();
  }

  // Initialize cart display
  displayCart();
</script>