<?php
session_start();

$cartData = json_decode(file_get_contents('php://input'), true);

if ($cartData === null) {
    http_response_code(400);
    echo json_encode(['message' => 'Invalid cart data']);
    exit();
}

// Update the cart in the session
$_SESSION['cart'] = $cartData;

// Respond with success
header('Content-Type: application/json');
echo json_encode(['message' => 'Cart updated successfully']);
