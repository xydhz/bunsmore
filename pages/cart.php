<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="/tinapay/assets/img/icon.png">
	<title>Tinapay - Cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/tinapay/assets/css/cart.css">
</head>
<body>
<header class="header">
    <nav class="nav-style">
        <div class="logo">
          <img src="/tinapay/assets/img/logo.png" alt="logo" class="cent">
        </div>
        <div class="nav">
          <ul>
			<li><a href='/tinapay/pages/'>Home</a></li>
			<li><a href='/tinapay/pages/products.php'>Products</a></li>
			<li><a href='/tinapay/pages/about.php'>About Us</a></li>
			<li><a href='/tinapay/pages/contact.php'>Contact Us</a></li>
			<li><a href='/tinapay/functions/logout.php'>Logout</a></li>
          </ul>
        </div>
    </nav>
  </header>


<div class="Cart">
  <h3>Cart</h3>
</div>

<div class="shopping-cart">
  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

 <div class="product">
    <div class="product-image">
      <img src="/tinapay/assets/img/products/item 1.jpg" width="50%">
    </div>
<div class="product-details">
      <div class="product-title">Square Bread</div>
    </div>
    <div class="product-price">Pesos</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
<div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">Pesos</div>
  </div>

</div>

 <div class="checkout">
      <button id="checkout">Checkout</button>
    </div> 

</body>
</html>