<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Mart Cart</title>
    <style>
           body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #fff;
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            
            
           
        }

        .logo a {
            margin-left: 10px;  
        }

        .logo-text a {
            margin-left: 10px; 
            font-size: 50px; 
            text-decoration: none;
            color: #00c12d;
            font-weight: bold;
            padding-right: 620px;
        }

           

        nav a {
            
            text-decoration: none;
            font-size:20px;
            font-weight: bold;
            color: #333;
            margin-right: 40px;
            
        }

        .auth-links a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size:20px;
           
            
        }

      
        .checkout-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            
        
        }

        h1 {
            font-size: 62px;
            font-weight: bold;
            padding: 20px;
            margin-bottom: 50px;
            text-align: center;
        }

        .checkout-content {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: -50px;
            
        }

        .shopping-cart{
            
            margin: 50px auto;
            padding: 70px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .shopping-cart, .checkout-summary {
            width: 48%;
        }

        h2 {
            font-size: 26px;
            margin-bottom: 40px;
            margin-top: -30px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .cart-item img {
            width: 50px;
            height: auto;
            margin-right: 20px;
        }

        .item-details {
            display: flex;
            align-items:center ;
        }

        .item-price {
            font-size: 18px;
            font-weight: bold;
            

        }

        .remove-item {
            text-decoration: none;
            font-size: 20px;
            color: #e53e3e;
            font-weight: bold;
            margin-bottom: 8px;
            margin-left: 350px;
            text-align: center;
            
        }

         .total {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            font-size: 34px;
            font-weight: bold;
        }
        .subtotal {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            font-size: 18px;
            font-weight: bold;
        }

        .continue-shopping {
            text-decoration: none;
            color: #007bff;
            display: inline-block;
            margin-top: 60px;
            
           
        }

        .checkout-summary h3 {
            font-size: 18px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .checkout-summary {
            max-width: 400px;
            max-height: 700px;
            margin-left:-80px;
            margin-right: 60px;
            margin-top: 47px;
            margin-bottom: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .checkout-summary form {
            display: flex;
            flex-direction: column;
            
        }

        .checkout-summary input[type="email"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            font-size: 16px;
        }

        .payment-methods {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-left: 50px;
            margin-right: 50px;
                
        }

        .payment-methods input[type="radio"] {
            margin-right: 50px;
            

        }

        .payment-methods label {
            display: flex;
            align-items: center;
        }

        .buy-now {
            background-color: #28a745;
            color: #fff;
            padding: 25px;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            margin: 50px;
        }

        .buy-now:hover {
            background-color: #218838;
        }

       
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }

            .logo-text a {
                font-size: 32px;
                padding-right: 0;
            }

            nav {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 10px;
            }

            nav a {
                margin-right: 0;
                margin-bottom: 10px;
            }

            h1 {
                font-size: 36px;
            }

            .shopping-cart, .checkout-summary {
                width: 100%;
                padding: 10px;
            }

            .checkout-container {
                margin: 0 10px;
            }

            .checkout-summary input[type="email"] {
                font-size: 14px;
            }

            .item-price, .total, .subtotal {
                font-size: 16px;
            }

            .buy-now {
                font-size: 16px;
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .logo-text a {
                font-size: 24px;
            }

            h1 {
                font-size: 28px;
            }

            .shopping-cart, .checkout-summary {
                padding: 10px;
            }

            .cart-item img {
                width: 40px;
            }

            .item-price, .total, .subtotal {
                font-size: 14px;
            }

            .buy-now {
                font-size: 14px;
                padding: 8px;
            }

          
@media (max-width: 768px) {
    .checkout-summary {
        width: 100%;
        max-width: 100%;
        margin: 20px 0;
        padding: 15px;
    }

    .checkout-summary h2 {
        font-size: 24px;
        margin-top: 10px;
        margin-bottom: 20px;
    }

    .checkout-summary input[type="email"] {
        font-size: 14px;
        padding: 8px;
    }

    .checkout-summary h3 {
        font-size: 16px;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .buy-now {
        font-size: 16px;
        padding: 12px;
        margin: 20px auto;
        width: 100%;
        max-width: 100%;
    }
}


@media (max-width: 480px) {
    .checkout-summary {
        width: 100%;
        padding: 10px;
    }

    .checkout-summary h2 {
        font-size: 20px;
    }

    .checkout-summary input[type="email"] {
        font-size: 12px;
        padding: 6px;
    }

    .checkout-summary h3 {
        font-size: 14px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .buy-now {
        font-size: 14px;
        padding: 10px;
    }
}

@media (max-width: 768px) {
        .checkout-content {
            flex-direction: column;
            align-items: center;
        }

        .shopping-cart,
        .checkout-summary {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        .buy-now {
            width: 100%;
            padding: 12px;
        }

        .checkout-summary input[type="email"] {
            font-size: 14px;
        }

        .payment-methods label img {
            width: 40px;
        }
    }

    @media (max-width: 480px) {
        .checkout-container {
            padding: 10px;
        }

        .checkout-summary {
            padding: 15px;
        }

        .buy-now {
            padding: 10px;
            font-size: 16px;
        }

        .payment-methods label img {
            width: 30px;
        }

        .checkout-summary input[type="email"] {
            padding: 8px;
            font-size: 12px;
        }
    }
}
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="#"><img src="green.jpeg" alt="Green Mart" width="80px"></a>
            </div>
            <div class="logo-text">
            <a href="#">Green Mart</a></div>
            <nav>
                <a href="http://localhost/HomePage/Sahan/index.html">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
            <div class="auth-links">
                <a href="#">Sign in</a>
            </div>
        </div>
    </header>

    <h1>Checkout</h1>
    <main>
        <div class="checkout-container">
            <div class="checkout-content">
                <div class="shopping-cart">
                    <h2>Shopping Cart</h2>
                    <div id="cart-items"></div>
                    
                    <div class="subtotal" id="subtotal-price">Sub Total: Rs. 0.00</div>
                    <div class="total" id="total-price">Total: Rs. 0.00</div>
                
                    <a href="http://localhost/HomePage/Vimukthi/product_interface.php" class="continue-shopping">← Continue shopping</a>
        
                </div>
                

                <div class="checkout-summary">
                   <br><br> <h2>Your Information</h2>
                    <form>
                        <input type="email" class="email" placeholder="Email" required><br>
                        <h3>Payment Options</h3>
                        <div class="payment-methods">
                            <div class="method">
                                <input type="radio" id="visa" name="payment-method">
                                <label for="credit-card"><img src="visa.png" alt="Credit Cards" width="80px"></label>
                            </div>
                            <div class="method">
                                <input type="radio" id="visa" name="payment-method">
                                <label for="credit-card"><img src="paypal.png" alt="Credit Cards" width="80px"></label>
                            </div>
                            <div class="method">
                                <input type="radio" id="visa" name="payment-method">
                                <label for="credit-card"><img src="mastercard.png" alt="Credit Cards" width="80px"></label>
                            </div>
                        </div>
                       <button type="submit" class="buy-now">Buy now</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <div id="cart-items"></div>
    <script>
        function loadCartItems() {
            fetch('fetch_products.php')
                .then(response => response.json())
                .then(products => {
                    let total = 0;
                    let subtotal = 0;
                    let cartItemsHTML = '';
                    products.forEach(product => {
                        total += parseFloat(product.price);
                        subtotal += parseFloat(product.price);
                        cartItemsHTML += `
                            <div class="cart-item">
                                <div class="item-details">
                                    <img src="${product.image_url}" alt="${product.name}">
                                    <span>${product.name}</span>
                                   <a href="#" class="remove-item" data-id="${product.id}" onclick="removeCartItem(${product.id})">×</a>
                                        
                                </div>
                                <div class="item-price">Rs: ${product.price}</div>
                            </div>
                        `;
                    });
                    document.getElementById('cart-items').innerHTML = cartItemsHTML;
                    document.getElementById('total-price').innerHTML = `<span>Total:</span> <span>Rs. ${total.toFixed(2)}/-</span>`;
                    
                    document.getElementById('subtotal-price').innerHTML = `<span>Sub Total:</span> <span>Rs. ${subtotal.toFixed(2)}/-</span>`;
                    
                    
                })
                .catch(error => console.error('Error fetching cart items:', error));
                
        }

    function removeCartItem(productId) {
        const formData = new FormData();
        formData.append('remove_item', true);
        formData.append('product_id', productId);

        fetch('remove_item.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'item_removed') {
                alert('Item removed successfully!');
                loadCartItems(); 
            } else {
                alert('Failed to remove the item.');
            }
        })
        .catch(error => console.error('Error removing the item:', error));
    }

    window.onload = loadCartItems;
</script>

</body>
</html>
