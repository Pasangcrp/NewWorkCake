document.addEventListener('DOMContentLoaded', () => {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  updateCartIcon(cart.length);

  document.querySelectorAll('.add-to-cart-btn').forEach((button) => {
    button.addEventListener('click', () => {
      const itemName = button.getAttribute('data-item-name');
      const itemPrice = parseFloat(button.getAttribute('data-item-price'));
      const itemImage = button.getAttribute('data-item-image'); // Add image path

      const item = { name: itemName, price: itemPrice, image: itemImage };
      cart.push(item);
      localStorage.setItem('cart', JSON.stringify(cart));
      updateCartIcon(cart.length);

      // Send cart data to the server
      fetch('cart_update.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(cart),
      })
        .then((response) => response.json())
        .then((data) => console.log('Cart updated on server', data))
        .catch((error) => console.error('Error:', error));
    });
  });

  document.getElementById('view-cart').addEventListener('click', () => {
    window.location.href = 'cart_view.php';
  });
});

function updateCartIcon(itemCount) {
  const cartIcon = document.querySelector('#cart-count');
  cartIcon.textContent = `(${itemCount})`;
}
