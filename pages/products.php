<?php
    session_start();
 ?>

<!DOCTYPE html>

	<!-- header -->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bunsmores | Products</title>
  <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/products.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="icon" href="../assets/img/icon.png">
</head>
<body>

	<!-- navigation -->
        <nav class="navbar navbar-default navbar-expand-lg py-3 fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                Bunsmores
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <?php
                if (isset($_SESSION['fname']) && !empty($_SESSION['fname'])){
                echo "<a href='cart.php'><button class='btn btn-primary ms-lg-3'><i class='fas fa-cart-arrow-down'></i></button></a>";
                echo "<a href='../functions/logout.php'><button class='btn btn-primary ms-lg-3'>Log Out</button></a>";
                } else {
                echo "<a href='register.php'><button class='btn btn-primary ms-lg-3'>Log In / Register </button></a>";
                }
                ?>
            </div>
        </div>
    </nav>
	<!-- end of nav -->

  <!-- products -->
      <!-- best sellers -->
	    <div class="container product">
	    <h1 class="text-center">Products</h1>
      <?php
          if (isset($_SESSION['msg_item_add'])) {?>
          <div class="alert alert-warning" role="alert">
            <?php 
            echo $_SESSION['msg_item_add'];
            unset ($_SESSION['msg_item_add']);
            ?>
          </div>
      <?php }?>
    	<h2 class="text-center">BEST SELLERS</h2>
    	<hr class="mt-2 mb-3"/>
    	<div class="row">
    		<div class="col-lg-4 mb-3">
          <form action="../functions/item_dir.php" method="post">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 4.jpg" alt="choco mocha cake" class="mr-4">
    				<h5 class="mt-4">Choco-Mocha Cake</h5>
            <button name="value" value="1" class="btn btn-warning">Order</button>
    				<p class="text-muted-mb-0">A luscious blend of chocolate and mocha frosting smeared onto a soft, spongy chocolate cake. Decorated with cherry and cream on top.</p>
    			</div>
        </form>
    		</div>
    		<div class="col-lg-4 mb-3">
          <form action="../functions/item_dir.php" method="post">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 3.jpg" alt="pastry parcel" class="mr-4">
    				<h5 class="mt-4">Bunsmore Pastry Parcel</h5>
            <button name="value" value="2" class="btn btn-warning">Order</button>
    				<p class="text-muted-mb-0">Pastry parcel made of roasted chicken, mozzarella cheese and vegetables - all prepared and cooked using a secret Bunsmore family recipe.</p>
    			</div>
          </form>
    		</div>
    		<div class="col-lg-4 mb-3">
          <form action="../functions/item_dir.php" method="post">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 8.jpg" alt="blueberry pie" class="mr-4">
    				<h5 class="mt-4">Blueberry Pie</h5>
            <button name="value" value="3" class="btn btn-warning">Order</button>
    				<p class="text-muted-mb-0">Made with freshly imported blueberries, this treat is sure to provide satisfaction either for yourself or with a group of people.</p>
    			</div>
          </form>
    		</div>
    	</div>
      <!-- end best seller -->

       <hr class="mt-2 mb-3"/>
      
      <!-- other -->
    	<h2 class="text-center">other products</h2>
      <hr class="mt-2 mb-3"/>
      <div class="row">
    		<div class="col-lg-4 mb-3">
          <form action="../functions/item_dir.php" method="post">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 1.jpg" alt="pan de frita" class="mr-4">
    				<h5 class="mt-4">Pan de Frita</h5>
            <button name="value" value="4" class="btn btn-warning">Order</button>
    				<p class="text-muted-mb-0">A mix of layered bread toasted in butter, cheese and chopped bits of meat. Perfect for a morning breakfast or a quick snack.</p>
    			</div>
          </form>
    		</div>
    		<div class="col-lg-4 mb-3">
          <form action="../functions/item_dir.php" method="post">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 5.jpg" alt="pastry wreath" class="mr-4">
    				<h5 class="mt-4">Bunsmore Pastry Wreath</h5>
            <button name="value" value="5" class="btn btn-warning">Order</button>
    				<p class="text-muted-mb-0">Bread made of choux pastry filled with orange-and-rum pastry cream arranged in a circle for your viewing pleasure.</p>
    			</div>
          </form>
    		</div>
    		<div class="col-lg-4 mb-3">
          <form action="../functions/item_dir.php" method="post">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 2.jpg" alt="chocolate bread" class="mr-4">
    				<h5 class="mt-4">Chocolate Bread</h5>
            <button name="value" value="6" class="btn btn-warning">Order</button>
    				<p class="text-muted-mb-0">Loaf of bread made up of wheat, flour and pounds of chocolate. Also includes pieces of chocolate chips inside the loaf.</p>
    			</div>
          </form>
    		</div>
    		<div class="col-lg-4 mb-3">
          <form action="../functions/item_dir.php" method="post">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 9.jpg" alt="pumpkin muffins" class="mr-4">
    				<h5 class="mt-4">Pumpkin Streusel Muffins</h5>
            <button name="value" value="7" class="btn btn-warning">Order</button>
    				<p class="text-muted-mb-0">Muffins made from freshly prepared pumpkins that is sure to give someone a healthy eyesight. Also topped in streusels.</p>
    			</div>
          </form>
    		</div>
    		<div class="col-lg-4 mb-3">
          <form action="../functions/item_dir.php" method="post">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 7.jpg" alt="apple pie" class="mr-4">
    				<h5 class="mt-4">Apple Pie</h5>
            <button name="value" value="8" class="btn btn-warning">Order</button>
    				<p class="text-muted-mb-0">A classic amongst pastry lovers, the apple pie's strongest asset is its sweet and irresistible flavor and aroma.</p>
    			</div>
          </form>
    		</div>
    		<div class="col-lg-4 mb-3">
          <form action="../functions/item_dir.php" method="post">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 6.jpg" alt="choux pastry" class="mr-4">
    				<h5 class="mt-4">Bunsmore Choux Pastry</h5>
            <button name="value" value="9" class="btn btn-warning">Order</button>
    				<p class="text-muted-mb-0">An odd combination of cabbage and sweets, this crispy yet sugary delight is popular for both kids and adults alike.</p>
    			</div>
          </form>
    		</div>
    	</div>
    </div>
  <!-- end products -->
	
	

	<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-light">
  

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            Store Schedule
          </h6>
          <p>
            Our stores are always open except on Sundays, from 8:00 AM to 5:30 PM, with the closing time of 7:30 PM on Saturdays. 
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Navigate
          </h6>
          <p>
            <a href="products.php" class="text-reset">Products</a>
          </p>
          <p>
            <a href="services.php" class="text-reset">Services</a>
          </p>
          <p>
            <a href="about.php" class="text-reset">About</a>
          </p>
          <p>
            <a href="contact.php" class="text-reset">Contact</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Help
          </h6>
          <p>
            <a href="#!" class="text-reset">Terms of Service</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Privacy Policy</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders & Refunds</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact Info
          </h6>
          <p><i class="fas fa-store me-3"></i>033 Verity St., Manila, PH</p>
          <p><i class="fas fa-envelope me-3"></i>business@bunsmores.info</p>
          <p><i class="fas fa-phone me-3"></i>+ 63 (2) 8675-7322</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    Copyright © Bunsmores 2022. All rights reserved.
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
	
	<script src="/tinapay/assets/js/bootstrap.bundle.min.js">
	</script>

</body>
</html>
