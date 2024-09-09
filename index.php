<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New York Cake</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #ffab00;
        }

        .hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .cta-button {
            padding: 15px 30px;
            background-color: #ffab00;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #e69b00;
        }

        section {
            padding: 50px 20px;
            text-align: center;
        }

        #about {
            background-color: #fff;
        }

        #about h2 {
            font-size: 2.5em;
            color: #333;
        }

        #about p {
            font-size: 1.2em;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        #menu h2 {
            font-size: 2.5em;
            color: #333;
        }

        .menu-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        #gallery {
            background-color: #fff;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .gallery-grid img {
            width: 100%;
            border-radius: 10px;
            object-fit: cover;
        }

        #contact h2 {
            font-size: 2.5em;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        form label {
            display: block;
            text-align: left;
            margin-bottom: 10px;
            color: #555;
            font-weight: bold;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
        }

        form button {
            padding: 15px 30px;
            background-color: #ffab00;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #e69b00;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
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

            .hero-content {
                top: 40%;
            }
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
    <div class="logo">
        <img src="http://localhost/new_work_cake/assets/logo.jpg" alt="New York Cake">
        <p>New York Cake</p>
    </div>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
            <li><a href="cart_view.php" id="view-cart">
  <i class="fa-solid fa-cart-shopping"></i> <span id="cart-count">(0)</span>
</a></li>

        </ul>
    </nav>
</header>



    <!-- Hero Section -->
    <section id="home" class="hero">
        <video autoplay muted loop id="myVideo" class="video-bg">
            <source src="http://localhost/new_work_cake/assets/bgvideo.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="hero-content">
            <h1>Welcome to New York Cake</h1>
            <p>Experience the finest pastries and cakes.</p>
            <a href="#menu" class="cta-button">Explore Our Menu</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about">
        <h2>About Us</h2>
        <p>New York Cake, known for its artisanal touch and homemade quality, has made a name for itself as a cherished local bakery. Nestled in a cozy corner of town, we bring you the finest selection of cakes, pastries, and baked goods, made with love and the freshest ingredients.</p>
    </section>

    <!-- Menu Section -->
    <section id="menu">
        <h2>Our Menu</h2>
        <div class="menu-container">
            <!-- Menu Items -->
            <?php include 'menu_items.php'; ?>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery">
        <h2>Gallery</h2>
        <div class="gallery-grid">
            <img src="http://localhost/new_work_cake/assets/123.jpg" alt="Gallery Image 1">
            <img src="http://localhost/new_work_cake/assets/321.webp" alt="Gallery Image 2">
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Us</h2>
        <form action="submit_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 New York Cake. All Rights Reserved.</p>
    </footer>

    <script src="cart.js" defer></script>
</body>

</html>
