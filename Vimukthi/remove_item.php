<?php
session_start();

if (isset($_POST['remove_item']) && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    
    if (isset($_SESSION['cart'])) {
        // Remove the item with matching ID
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $productId) {
                unset($_SESSION['cart'][$key]);
                // Re-index the cart array
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                break;
            }
        }
    }

    // Send response
    echo json_encode(['status' => 'item_removed']);
    exit;
}

echo json_encode(['status' => 'error']);
?>
