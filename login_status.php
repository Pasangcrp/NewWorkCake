<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .message-box {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            max-width: 400px;
        }
        .message-box h1 {
            color: #4CAF50;
        }
        .error h1 {
            color: #F44336;
        }
        .message-box p {
            font-size: 18px;
        }
        .message-box a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .message-box a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="message-box <?php echo $_GET['status'] == 'error' ? 'error' : ''; ?>">
        <?php if ($_GET['status'] == 'success'): ?>
            <h1>Login Successful!</h1>
            <p>Welcome back! You have successfully logged in.</p>
            <a href="index.php">Go to Dashboard</a>
        <?php else: ?>
            <h1>Login Failed</h1>
            <p>Invalid username or password. Please try again.</p>
            <a href="login.php">Try Again</a>
        <?php endif; ?>
    </div>
</body>
</html>
