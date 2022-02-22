<?php
  include ('../functions/reg_redir.php');
 ?>

<!DOCTYPE html>

	<!-- header -->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bunsmores | Log In / Register</title>
  <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/register.css">
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
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	<!-- end of nav -->

  <!-- body -->
	<div class="container">
		<h1 class="text-center">Interact with us</h1>
    <?php
          if (isset($_SESSION['msg_require_log'])) {?>
          <div class="alert alert-warning" role="alert">
            <?php 
            echo $_SESSION['msg_require_log'];
            unset ($_SESSION['msg_require_log']);
            ?>
          </div>
    <?php }?>
		<hr class="mt-2 mb-3"/>
		<div class="row">
			<div class="col-md-6">
				<h3 class="text-left mt-2 mb-4">Log In</h3>
				<form action = "../functions/account.php" method="post">
  				<div class="form-group">
    				<label for="exampleInputEmail1" class="mb-2">E-mail Address</label>
    				<input type="email" required class="form-control mb-3" id="mail" name="mail" aria-describedby="emailHelp" placeholder="yourmail@example.com">
  				</div>
  				<div class="form-group">
    				<label for="exampleInputPassword1" class="mb-2">Password</label>
    				<input type="password" required class="form-control mb-3" id="pass" name="pass" placeholder="Password">
  				</div>
          <?php
          if (isset($_SESSION['msg_login'])) {?>
          <div class="alert alert-warning" role="alert">
            <?php 
            echo $_SESSION['msg_login'];
            unset ($_SESSION['msg_login']);
            ?>
          </div>
          <?php }?>
  				<button type="submit" name="login" class="btn btn-warning mt-1 mb-4 fonter">Log In</button>
				</form>
			</div>
			<div class="col-md-6">
				<h3 class="text-left mt-2 mb-4">Register</h3>
				<form action = "../functions/account.php" method="post">
				<div class="form-group">
            		<div class="row">
              			<div class="col-md-6">
              				<label for="exampleInputEmail1" class="mb-2">First Name</label>
                			<input name="fname" type="text" required class="form-control mb-3" id="fname" name="fname" aria-describedby="emailHelp" placeholder="Juan">
              			</div>
              			<div class="col-md-6">
              				<label for="exampleInputEmail1" class="mb-2">Last Name</label>
                			<input name ="lname" type="text" required class="form-control mb-3" id="lname" name="lname" aria-describedby="emailHelp" placeholder="de la Cruz">
              			</div>
            		</div>
  				</div>
  				<div class="form-group">
  				    <label for="exampleInputEmail1" class="mb-2">E-mail Address</label>
    				<input type="email" class="form-control mb-3" id="mail" name="mail" required aria-describedby="emailHelp" placeholder="yourmail@example.com">
    			</div>
  				<div class="form-group">
  					<label for="exampleInputEmail1" class="mb-2">Mobile Number</label>
    				<input type="text" class="form-control mb-3" id="mnum" name="mnum" required minlength="11" maxlength="11" onkeypress="return event.charCode >= 48 && event.charCode <= 57" aria-describedby="emailHelp" placeholder="09123456789">
  				</div>
  				<div class="form-group">
    				<label for="exampleInputPassword1" class="mb-2">Password</label>
    				<input type="password" class="form-control mb-3" id="pass" required  name="pass" placeholder="Password">
  				</div>
          <?php
          if (isset($_SESSION['msg_register'])) {?>
          <div class="alert alert-warning" role="alert">
            <?php 
            echo $_SESSION['msg_register'];
            unset ($_SESSION['msg_register']);
            ?>
          </div>
          <?php }?>
  				<button type="submit" name="register" class="btn btn-warning mt-3 mb-4 fonter">Register</button>
				</form>
			</div>
		</div>
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
