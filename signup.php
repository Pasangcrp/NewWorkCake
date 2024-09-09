<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - New York Cake</title>
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

        .signup-section {
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .signup-section h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2em;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        form input[type="text"]:focus,
        form input[type="email"]:focus,
        form input[type="password"]:focus {
            outline: none;
            border-color: #ffab00;
        }

        button[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #ffab00;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
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
            .signup-section {
                margin: 20px;
                padding: 30px;
            }

            header {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
            }
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
                <li><i class="fa-solid fa-cart-shopping"></i></li>
            </ul>
        </nav>
    </header>

    <section id="signup" class="signup-section">
        <h2>Sign Up</h2>
        <form action="signup_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign Up</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 New York Cake. All Rights Reserved.</p>
    </footer>
</body>

</html>
