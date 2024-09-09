<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$message = '';

if (isset($_GET['action']) && $_GET['action'] === 'remove' && isset($_GET['index'])) {
    $index = (int)$_GET['index'];
    if (isset($cart[$index])) {
        unset($cart[$index]);
        $_SESSION['cart'] = array_values($cart); // Re-index the array
        $message = 'Product removed successfully.';
    }
    header('Location: cart_view.php?message=' . urlencode($message));
    exit();
}

$_SESSION['cart'] = $cart;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - New York Cake</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px;
        }

        .logo p {
            margin: 0;
            font-size: 1.5em;
            font-weight: bold;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #ffab00;
        }

        .cart-section {
            background-color: #fff;
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .cart-section h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2em;
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .cart-table th, .cart-table td {
            padding: 15px;
            text-align: left;
        }

        .cart-table th {
            background-color: #333;
            color: #fff;
        }

        .cart-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .cart-table img {
            border-radius: 5px;
        }

        .remove-btn {
            color: #ffab00;
            text-decoration: none;
            font-weight: bold;
        }

        .remove-btn:hover {
            color: #e69b00;
        }

        .cta-button,
        .checkout-button {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.2em;
            color: #fff;
            background-color: #ffab00;
        }

        .cta-button:hover,
        .checkout-button:hover {
            background-color: #e69b00;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
            }
        }

        .message {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 15px;
            border: 1px solid #d0e9c6;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="http://localhost/new_work_cake/assets/logo.jpg" alt="New York Cake">
            <p>New York Cake</p>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About Us</a></li>
                <li><a href="index.php#menu">Menu</a></li>
                <li><a href="index.php#gallery">Gallery</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
            </ul>
        </nav>
    </header>

    <section id="cart" class="cart-section">
        <h2>Your Cart</h2>
        <?php if (isset($_GET['message'])): ?>
            <div class="message"><?php echo htmlspecialchars($_GET['message']); ?></div>
        <?php endif; ?>
        <?php if (empty($cart)): ?>
            <p>Your cart is empty.</p>
        <?php else: ?>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $index => $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['name']); ?></td>
                            <td><img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" width="100"></td>
                            <td>$<?php echo number_format($item['price'], 2); ?></td>
                            <td><a href="cart_view.php?action=remove&index=<?php echo $index; ?>" class="remove-btn" data-index="<?php echo $index; ?>">Remove</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p>Total: $<?php echo number_format(array_sum(array_column($cart, 'price')), 2); ?></p>
        <?php endif; ?>
        <a href="index.php" class="cta-button">Continue Shopping</a>
        <a href="checkout.php" class="checkout-button">Checkout</a>
    </section>

    <footer>
        <p>&copy; 2024 New York Cake. All Rights Reserved.</p>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const removeButtons = document.querySelectorAll('.remove-btn');
            removeButtons.forEach(button => {
                button.addEventListener('click', (event) => {
                    event.preventDefault();
                    const index = button.getAttribute('data-index');
                    if (confirm('Are you sure you want to remove this item from your cart?')) {
                        removeFromCart(index);
                    }
                });
            });

            function removeFromCart(index) {
                // Remove from local storage
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                cart.splice(index, 1); // Remove item at index
                localStorage.setItem('cart', JSON.stringify(cart));

                // Send updated cart to the server
                fetch('cart_update.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(cart),
                })
                    .then(response => response.json())
                    .then(data => console.log('Cart updated on server', data))
                    .catch(error => console.error('Error:', error));

                // Refresh the cart view with a success message
                window.location.href = 'cart_view.php?message=' + encodeURIComponent('Product removed successfully.');
            }
        });
    </script>
</body>
</html>
