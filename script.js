document.addEventListener('DOMContentLoaded', function () {
  // Example: Smooth scroll for navigation links
  const links = document.querySelectorAll('nav ul li a');
  links.forEach((link) => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
    });
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const cart = [];

  document.querySelectorAll('.add-to-cart-btn').forEach((button) => {
    button.addEventListener('click', function () {
      const itemName = this.getAttribute('data-item-name');
      const itemPrice = this.getAttribute('data-item-price');

      // Add item to cart
      cart.push({ name: itemName, price: itemPrice });

      alert(`${itemName} has been added to your cart.`);
    });
  });
});
