<?php
  include ('../functions/cart_disp.php');
  if (empty($_SESSION['checkout_stat'])) {
    $_SESSION['msg_error_access'] = "Invalid command";
    header("Location: ../pages/cart.php?errno=checkstat");
    }
?>



<!DOCTYPE html>

    <!-- header -->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bunsmores | Billing</title>
  <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/checkout.css">
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
        <h1>Billing Information</h1>
        <hr class="mt-2 mb-3"/>
        <div class="container">
            <form action="../functions/checkout.php" method="post">
            <div class="form-group">
                <label>Name of Receiver</label>
                <div class="row">
                <div class="col-md-6">
                    <input name="fname" type="text" class="form-control mt-3 mb-3" id="exampleInputEmail1" placeholder="Juan" aria-describedby="emailHelp" placeholder="First Name" value="<?php if (isset($_SESSION['fname'])){echo $_SESSION['fname'];}?>">
                </div>
                <div class="col-md-6">
                    <input name ="lname" type="text" class="form-control mt-3 mb-3" id="exampleInputEmail1" placeholder="de la Cruz" aria-describedby="emailHelp" placeholder="Last Name" value="<?php if (isset($_SESSION['lname'])){echo $_SESSION['lname'];}?>">
                </div>
                </div>
            </div>
            <div class="form-group">
                <label class="mb-3">Mobile Number</label>
                <input name="mnum" type="text" class="form-control mb-3" id="exampleInputEmail1" minlength="11" maxlength="11" onkeypress="return event.charCode >= 48 && event.charCode <= 57" aria-describedby="emailHelp" placeholder="09123456789" value="<?php if (isset($_SESSION['mnum'])){echo $_SESSION['mnum'];}?>">
            </div>
            <div class="form-group">
                <label class="mb-3">Address</label>
                <input name="mnum" type="text" class="form-control mb-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address">
            </div>
            <hr class="mt-4 mb-2">
            <h5>Payment Method</h5>
            <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="cod" name="paymentMethod" type="radio" class="custom-control-input mb-3" checked="" required="">
                        <label class="custom-control-label" for="credit">Cash on Delivery</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="gcash" name="paymentMethod" type="radio" class="custom-control-input mb-2" required="">
                        <label class="custom-control-label" for="debit">GCash</label>
                    </div>
                </div>
            <button type="submit" id="checkout" name="checkout" class="btn btn-warning mt-2">Proceed</button>
            </form>
        </div>
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
