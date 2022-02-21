<?php
  session_start();
 ?>

<!DOCTYPE html>

	<!-- header -->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bunsmores | Contact</title>
  <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/contact.css">
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
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
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

  <!-- body -->
	<div class="container">
	    <h1 class="text-center">CONTACT</h1>
    	<hr class="mt-2 mb-3"/>
      <div class="container">
      	<img src="../assets/img/contact/bakery.jpg" alt="Bakery">
      </div>
      <hr class="mt-2 mb-3"/>
   </div>
   <h5 class="text-center heading">You can contact us through the following methods:</h5>
      <div class="container">
      	<div class="row text-center para-margin">
      		<div class="col">
      	  <span class="fa-stack fa-4x">
  						<i class="fa fa-circle fa-stack-2x icon-background"></i>
  						<i class="fa fa-store fa-stack-1x icon-color"></i>
					</span>
					<p class="lead text-center">033 Verity St., Manila, PH</p>
					</div>
					<div class="col">
					<span class="fa-stack fa-4x">
  						<i class="fa fa-circle fa-stack-2x icon-background"></i>
  						<i class="fa fa-envelope fa-stack-1x icon-color"></i>
					</span>
					<p class="lead text-center">business@bunsmores.info</p>
					</div>
					<div class="col">
					<span class="fa-stack fa-4x">
  						<i class="fa fa-circle fa-stack-2x icon-background"></i>
  						<i class="fa fa-phone fa-stack-1x icon-color"></i>
					</span>
					<p class="lead text-center">+ 63 (2) 8675-7322</p>
					</div>
      	</div>
      </div>
    <p class="text-center">You can also send your inquiries directly to us using the form below.</p>
    <div class="container">
      <form action="../functions/account.php" method="post">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <input name="fname" type="text" class="form-control mt-3 mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" value="<?php if (isset($_SESSION['fname'])){echo $_SESSION['fname'];}?>">
              </div>
              <div class="col-md-6">
                <input name ="lname" type="text" class="form-control mt-3 mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name" value="<?php if (isset($_SESSION['lname'])){echo $_SESSION['lname'];}?>">
              </div>
            </div>
          </div>
          <div class="form-group">
              <input name="mail" type="email" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail Address" value="<?php if (isset($_SESSION['mail'])){echo $_SESSION['mail'];}?>">
          </div>
          <div class="form-group">
              <textarea name="msg" class="form-control mt-3 mb-4" id="exampleFormControlTextarea1" rows="3" placeholder="Enter query"></textarea>
          </div>
          <button type="submit" id="query" name="query" class="btn btn-warning">Submit</button>
      </form>
    </div>
	

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
