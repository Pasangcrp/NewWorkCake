<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $username = htmlspecialchars(trim($_POST['username']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: signup_status.php?status=error&message=invalid_email');
        exit();
    }

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the insert statement
    $stmt = $conn->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password_hash);

    if ($stmt->execute()) {
        header('Location: signup_status.php?status=success');
        exit();
    } else {
        header('Location: signup_status.php?status=error&message=insert_error');
        exit();
    }

    $stmt->close();
} else {
    header('Location: signup.php');
    exit();
}

$conn->close();
?>
