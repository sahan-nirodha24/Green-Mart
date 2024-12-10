<?php
session_start();


if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

  
    $cart_item = [
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'image_url' => $product_image
    ];

    // Add the product to the session-based cart
    $_SESSION['cart'][] = $cart_item;

    
    echo json_encode(['status' => 'success']);
    exit();
}

// Check if a request to clear the cart is received
if (isset($_POST['clear_cart'])) {
    unset($_SESSION['cart']);
    echo json_encode(['status' => 'cart_cleared']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List - Green Mart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }
        .cart-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .cart-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Green Mart Product List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price (Rs)</th>
                <th>Image</th>
                <th>Add to Cart</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>1</td>
                <td>Mango Yoghurt Drink</td>
                <td>150</td>
                <td><img src="offer8.jpg" alt="Mango Yoghurt Drink" width="50"></td>
                <td><button class="cart-btn" onclick="addToCart(1, 'Mango Yoghurt Drink', 150, 'offer8.jpg')">Add to Cart</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Anchor Milk Powder</td>
                <td>800</td>
                <td><img src="offer1.jpg" alt="Anchor Milk Powder" width="50"></td>
                <td><button class="cart-btn" onclick="addToCart(2, 'Anchor Milk Powder', 800, 'offer1.jpg')">Add to Cart</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Sandwich Bread</td>
                <td>300</td>
                <td><img src="offer2.jpg" alt="Sandwich Bread" width="50"></td>
                <td><button class="cart-btn" onclick="addToCart(3, 'Sandwich Bread', 300, 'offer2.jpg')">Add to Cart</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Lifebuoy Shampoo</td>
                <td>600</td>
                <td><img src="offer6.jpg" alt="Lifebuoy Shampoo" width="50"></td>
                <td><button class="cart-btn" onclick="addToCart(4, 'Lifebuoy Shampoo', 600, 'offer6.jpg')">Add to Cart</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Kandawatta Curd</td>
                <td>750</td>
                <td><img src="offer5.jpg" alt="Kandawatta Curd" width="50"></td>
                <td><button class="cart-btn" onclick="addToCart(5, 'Kandawatta Curd', 750, 'offer5.jpg')">Add to Cart</button></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Emborg Shredded</td>
                <td>1300</td>
                <td><img src="offer7.jpg" alt="Emborg Shredded" width="50"></td>
                <td><button class="cart-btn" onclick="addToCart(6, 'Emborg Shredded', 1300, 'offer7.jpg')">Add to Cart</button></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Samaposha 200g</td>
                <td>185</td>
                <td><img src="offer9.jpg" alt="Samaposha 200g" width="50"></td>
                <td><button class="cart-btn" onclick="addToCart(7, 'Samaposha 200g', 185, 'offer9.jpg')">Add to Cart</button></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Maliban Gold Marie 80g</td>
                <td>90</td>
                <td><img src="offer10.jpg" alt="Maliban Gold Marie 80g" width="50"></td>
                <td><button class="cart-btn" onclick="addToCart(8, 'Maliban Gold Marie 80g', 90, 'offer10.jpg')">Add to Cart</button></td>
            </tr>
            <tr>
                <td>9</td>
                <td>Bcc White Coconut Oil Bottle 1L</td>
                <td>1570</td>
                <td><img src="offer11.jpg" alt="Bcc White Coconut Oil Bottle 1L" width="50"></td>
                <td><button class="cart-btn" onclick="addToCart(9, 'Bcc White Coconut Oil Bottle 1L', 1570, 'offer11.jpg')">Add to Cart</button></td>
            </tr>
            
        </tbody>
    </table>

    <h2>Your Cart</h2>
    <button class="cart-btn" onclick="clearCart()">Clear Cart</button>
    <div id="cart-items"></div>
    <div id="total-price">Total: Rs. 0.00</div>

    
    <script>
        function addToCart(productId, productName, productPrice, productImage) {
            const formData = new FormData();
            formData.append('add_to_cart', true);
            formData.append('product_id', productId);
            formData.append('product_name', productName);
            formData.append('product_price', productPrice);
            formData.append('product_image', productImage);

            fetch('product_interface.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert('Product added to cart successfully!');
                    loadCartItems();
                } else {
                    alert('Failed to add product to cart.');
                }
            })
            .catch(error => console.error('Error:', error));
        }

        function loadCartItems() {
            fetch('fetch_products.php')
                .then(response => response.json())
                .then(products => {
                    let total = 0;
                    let cartItemsHTML = '';
                    products.forEach(product => {
                        total += parseFloat(product.price);
                        cartItemsHTML += `
                            <div class="cart-item">
                                <div class="item-details">
                                    <img src="${product.image_url}" alt="${product.name}" width="50">
                                    <span>${product.name}</span>
                                </div>
                                <div class="item-price">Rs: ${product.price}</div>
                            </div>
                        `;
                    });
                    document.getElementById('cart-items').innerHTML = cartItemsHTML;
                    document.getElementById('total-price').innerHTML = `Total: Rs. ${total.toFixed(2)}`;
                })
                .catch(error => console.error('Error fetching cart items:', error));
        }

        function clearCart() {
            const formData = new FormData();
            formData.append('clear_cart', true);

            fetch('product_interface.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'cart_cleared') {
                    alert('Cart cleared successfully!');
                    loadCartItems();
                } else {
                    alert('Failed to clear the cart.');
                }
            })
            .catch(error => console.error('Error clearing the cart:', error));
        }

    
        window.onload = loadCartItems;
    </script>

</body>
</html>
