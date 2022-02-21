<?php
  session_start();
 ?>

<!DOCTYPE html>

	<!-- header -->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bunsmores | About</title>
	<link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/about.css">
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
                        <a class="nav-link active" href="about.php">About</a>
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


  <!-- body -->
	<div class="container product">
	    <h1 class="text-center">About Us</h1>
    	<hr class="mt-2 mb-3"/>
      <div class="container">
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="margin-center featurette-heading">OUR GOALS</h2>
          <p class="lead">We at Bunsmores aim to provide quality products to our customers, and to accomodate each one to the best of our abilities in order to make their experience in our establishment as pleasant as possible.</p>
          <p class="lead">- John W. Bunsmore, Owner</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="rounded-circle picture-padding thumbnail featurette-image img-responsive center-block" src="../assets/img/about/owner.jpg" alt="Image 1">
        </div>
      </div>
    </div>
  </div>
	
  <div class="container">
      <div class="row featurette">
        <div class="col-md-5 col-md-push-7">
            <img class="rounded-circle picture-padding thumbnail featurette-image img-responsive center-block" src="../assets/img/about/owner 2.jpg" alt="Image 1">
        </div>
        <div class="col-md-7 col-md-pull-5">
          <h2 class="margin-center featurette-heading">WHERE IT ALL BEGAN</h2>
            <p class="lead">"I would bake for John sometimes when I had time to spare. One day, after taking a bite of the pie that I had given him, he just sprung up and eagerly said, 'Hey, let's start a bakery right now!' and the rest is history."</p>
            <p class="lead">- Melinda W. Bunsmore, Co-Owner</p>
        </div>
      </div>
    </div>
	
  <div class="container testimonial">
      <h2 class="text-center">Meet the Team</h2>
      <hr class="mt-2 mb-3"/>
      <div class="row">
        <div class="col-lg-6 mb-4">
          <div class="card border-secondary text-center">
            <img src="../assets/img/about/crop 1.jpg" alt="person 1" class="mr-4">
            <h5>Russel Valmores</h5>
            <h7>Web Design</h7>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="card border-secondary text-center">
            <img src="../assets/img/about/crop 2.jpg" alt="person 2" class="mr-4">
            <h5>Justine Fernando</h5>
            <h7>Database Management</h7>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-3">
          <div class="card border-secondary text-center">
            <img src="../assets/img/about/team 1.jpg" alt="person 3" class="mr-4">
            <h5>Houston Dizon</h5>
            <h7>Lead Baker</h7>
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="card border-secondary text-center">
            <img src="../assets/img/about/team 2.jpg" alt="person 4" class="mr-4">
            <h5>Jeffrey Paz</h5>
            <h7>Store Manager</h7>
          </div>
        </div>
        <div class="col-lg-4 mb-3">
          <div class="card border-secondary text-center">
            <img src="../assets/img/about/team 3.jpg" alt="person 5" class="mr-4">
            <h5>Andrea Martins</h5>
            <h7>Markets & Affairs</h7>
          </div>
        </div>
      </div>
 
      <hr class="mt-2 mb-3"/>

    </div>
  <!-- end body -->

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
