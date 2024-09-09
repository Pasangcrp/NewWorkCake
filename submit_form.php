<?php
// submit_form.php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        // Redirect to a thank you page on success
        header('Location: thank_you.php?status=success');
        exit();
    } else {
        // Redirect to the same page with an error status
        header('Location: thank_you.php?status=error');
        exit();
    }

    $stmt->close();
}

$conn->close();
?>
