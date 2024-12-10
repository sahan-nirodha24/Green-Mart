<?php
session_start();

// Check if there are items in the cart
$cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

header('Content-Type: application/json');
echo json_encode($cart_items);
?>

