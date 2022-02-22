<?php
  include ('../functions/cart_disp.php');
 ?>

<!DOCTYPE html>

    <!-- header -->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bunsmores | Cart</title>
  <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/cart.css">
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
        <h1 class="text-center">Your Cart</h1>
        <?php
          if (isset($_SESSION['msg_error_access'])) {?>
          <div class="alert alert-warning" role="alert">
            <?php 
            echo $_SESSION['msg_error_access'];
            unset ($_SESSION['msg_error_access']);
            ?>
          </div>
        <?php }?>
        <?php
          if (isset($_SESSION['msg_check_success'])) {?>
          <div class="alert alert-warning" role="alert">
            <?php 
            echo $_SESSION['msg_check_success'];
            unset ($_SESSION['msg_check_success']);
            ?>
          </div>
        <?php }?>
        <?php
          if (isset($_SESSION['msg_delete'])) {?>
          <div class="alert alert-warning" role="alert">
            <?php 
            echo $_SESSION['msg_delete'];
            unset ($_SESSION['msg_delete']);
            ?>
          </div>
        <?php }?>
        <hr class="mt-2 mb-3"/>
        <?php 
            if ($result->num_rows > 0) {?>
        <div class="container">
            <table class="table table-borderless text-center">
            <tr>
                <td><h5>Product</h5></td> 
                <td><h5>Price</h5></td> 
                <td><h5>Quantity</h5></td>
                <td><h5>Total</h5></td> 
                <td></td>  
            </tr> 
            <?php 
                foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo $row['item'];?></td>
                    <td>₱<?php echo $row['price'];?></td>
                    <td><?php echo $row['count'];?></td>
                    <td>₱<?php echo $row['total'];?></td>
                    <form action="../functions/delete.php" method="post">
                    <td><input type="hidden" name="hiders" value="<?php echo $row['id'];?>"><button name="delete" id="delete" class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
                    </form>
                </tr>
                <?php }
            ?>
            </tbody>
            </table>
        </div>
        <div class="container">
            <a href="../functions/checkout_dir.php"><button class="btn btn-warning float-end">Proceed to Checkout</button></a>
        </div>
        <?php } else {?>
            <div class="container text-center">
                <h3>You do not have any items in your cart.</h3>
                <p class="mt-5">Why not order something from us?</p>
            </div>
        <?php }?>
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
