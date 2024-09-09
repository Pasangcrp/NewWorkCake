<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Status</title>
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
            <h1>Message Sent Successfully!</h1>
            <p>Thank you for contacting us. We will get back to you soon.</p>
        <?php else: ?>
            <h1>Submission Failed</h1>
            <p>There was an error processing your request. Please try again later.</p>
        <?php endif; ?>
        <a href="index.php">Go Back</a>
    </div>
</body>
</html>
