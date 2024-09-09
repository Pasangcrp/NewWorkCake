<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Status</title>
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
            <h1>Sign-up Successful!</h1>
            <p>Your account has been created successfully.</p>
            <a href="login.php">Go to Login</a>
        <?php else: ?>
            <h1>Sign-up Failed</h1>
            <p>
                <?php
                if (isset($_GET['message'])) {
                    if ($_GET['message'] == 'invalid_email') {
                        echo 'The email address provided is invalid.';
                    } elseif ($_GET['message'] == 'insert_error') {
                        echo 'There was an error creating your account. Please try again later.';
                    } else {
                        echo 'An unknown error occurred. Please try again.';
                    }
                } else {
                    echo 'There was an error creating your account. Please try again later.';
                }
                ?>
            </p>
            <a href="signup.php">Try Again</a>
        <?php endif; ?>
    </div>
</body>
</html>
