<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password_hash FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();
        
        if (password_verify($password, $hashed_password)) {
            header('Location: login_status.php?status=success');
            exit();
        } else {
            header('Location: login_status.php?status=error');
            exit();
        }
    } else {
        header('Location: login_status.php?status=error');
        exit();
    }
    $stmt->close();
} else {
    header('Location: login.php');
}

$conn->close();
?>
