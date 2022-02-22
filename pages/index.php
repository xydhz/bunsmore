<?php
	session_start();
 ?>
 
<!DOCTYPE html>

	<!-- header -->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bunsmores | Home</title>
  <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/home.css">
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
                        <a class="nav-link active" href="index.php">Home</a>
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

	<!-- carousel -->

	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  		<div class="carousel-indicators">
    		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  		</div>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img src="../assets/img/home/ribbon 1.jpg" class="d-block w-100 rounded mx-auto d-block" alt="Slide 1">
      			<div class="carousel-caption d-none d-md-block">
        			<h5>Sharing is Caring.</h5>
        			<p>We believe that sharing is a gesture to show that we care. Why not buy a gift from us to show your appreciation for your loved ones?</p>
        			<a href="products.php"><button class="btn btn-warning">Browse Products</button></a>
      			</div>
    		</div>
    		<div class="carousel-item">
      			<img src="../assets/img/home/ribbon 2.jpg" class="d-block w-100" alt="Slide 2">
      			<div class="carousel-caption d-none d-md-block">
        			<h5>Sweets, Treats...</h5>
        			<p>and many more! We make sure that our company caters to the daily needs and wants of our customers.</p>
        			<a href="services.php"><button class="btn btn-warning">Learn More</button></a>
      			</div>
    		</div>
    		<div class="carousel-item">
      			<img src="../assets/img/home/ribbon 3.jpg" class="d-block w-100" alt="Slide 3">
      			<div class="carousel-caption d-none d-md-block">
        			<h5>A Place for All.</h5>
        			<p>Eat at your own convenience on our lovely establishment. Visit us and share your stories. We'd love to hear them.</p>
        			<a href="contact.php"><button class="btn btn-warning">Check Locations</button></a>
      			</div>
    		</div>
  		</div>
  		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="visually-hidden">Previous</span>
  		</button>
  		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="visually-hidden">Next</span>
  		</button>
	</div>

  	<!-- end carousel -->

  	<div class="container">
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="margin-center featurette-heading">Hot buns near you</h2>
          <p class="lead">Our products are made with the freshest materials, which are procured by our hardworking staff. They are prepared early on in the morning by our top bakers, and then baked on the same day to perfection while following our signature "Bunsmores" style of cooking. The end result is a satisfying product that is sure to sate your appetite.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="rounded-circle picture-padding thumbnail featurette-image img-responsive center-block" src="../assets/img/home/home 2.jpg" alt="Image 1">
        </div>
      </div>
    </div>

    <div class="container product">
    	<h2 class="text-center">CUSTOMER'S PICKS</h2>
    	<hr class="mt-2 mb-3"/>
    	<div class="row">
    		<div class="col-lg-4 mb-3">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 4.jpg" alt="choco mocha cake" class="mr-4">
    				<h5 class="mt-4">Choco-Mocha Cake</h5>
    				<p class="text-muted-mb-0">A luscious blend of chocolate and mocha frosting smeared onto a soft, spongy chocolate cake. Decorated with cherry and cream on top.</p>
    			</div>
    		</div>
    		<div class="col-lg-4 mb-3">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 3.jpg" alt="pastry parcel" class="mr-4">
    				<h5 class="mt-4">Bunsmore Pastry Parcel</h5>
    				<p class="text-muted-mb-0">Pastry parcel made of roasted chicken, mozzarella cheese and vegetables - all prepared and cooked using a secret Bunsmore family recipe.</p>
    			</div>
    		</div>
    		<div class="col-lg-4 mb-3">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/products/item 8.jpg" alt="blueberry pie" class="mr-4">
    				<h5 class="mt-4">Blueberry Pie</h5>
    				<p class="text-muted-mb-0">Made with freshly imported blueberries, this treat is sure to provide satisfaction either for yourself or with a group of people.</p>
    			</div>
    		</div>
    	</div>
      <hr class="mt-2 mb-3"/>
    </div>


    <div class="container">
      <div class="row featurette">
        <div class="col-md-5 col-md-push-7">
          	<img class="rounded-circle picture-padding thumbnail featurette-image img-responsive center-block" src="../assets/img/home/owner.jpg" alt="Image 1">
        </div>
        <div class="col-md-7 col-md-pull-5">
        	<h2 class="margin-center featurette-heading">Our story</h2>
          	<p class="lead">Running for over ten years since John W. Bunsmore first started the company, Bunsmores has since then grew into a large enterprise that manufactures bread and pastries to local and international branches across the globe.</p>
          	<p class="lead">We aim and continue to provide quality goods and services to our customers.</p>
        </div>
      </div>
    </div>

    <div class="container testimonial">
    	<h2 class="text-center">Testimonials</h2>
    	<p class="text-center">Here are a few statements from some of our regular customers.</p>
    	<hr class="mt-2 mb-3"/>
    	<div class="row">
    		<div class="col-lg-4 mb-3">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/home/person 1.jpg" alt="person 1" class="mr-4">
    				<h5>Juan de la Cruz</h5>
    				<h7>Philippines</h7>
    				<p class="text-muted-mb-0">"I bring my kids to their store before going to school. The prices are affordable and the staff are very nice."</p>
    			</div>
    		</div>
    		<div class="col-lg-4 mb-3">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/home/person 2.jpg" alt="person 2" class="mr-4">
    				<h5>Arthur Wang</h5>
    				<h7>Vietnam</h7>
    				<p class="text-muted-mb-0">"The different kinds of pastries offered here are very good! I love going here every now and then with my friends."</p>
    			</div>
    		</div>
    		<div class="col-lg-4 mb-3">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/home/person 3.jpg" alt="person 3" class="mr-4">
    				<h5>Joe Perez</h5>
    				<h7>United States</h7>
    				<p class="text-muted-mb-0">"I contracted them for a friend's wedding. My friend said that he and his wife enjoyed the cake very much."</p>
    			</div>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-lg-4 mb-3">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/home/person 4.jpg" alt="person 4" class="mr-4">
    				<h5>Genevieve Sanchez</h5>
    				<h7>Philippines</h7>
    				<p class="text-muted-mb-0">"They've got great prices, especially when it's holiday or there's a sale going on. The place is also very accomodating."</p>
    			</div>
    		</div>
    		<div class="col-lg-4 mb-3">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/home/person 5.jpg" alt="person 5" class="mr-4">
    				<h5>Margarita Diaz</h5>
    				<h7>Mexico</h7>
    				<p class="text-muted-mb-0">"This used to be my grandfather's favorite before he passed away. Now it's my family's favorite as well."</p>
    			</div>
    		</div>
    		<div class="col-lg-4 mb-3">
    			<div class="card border-secondary text-center">
    				<img src="../assets/img/home/person 6.jpg" alt="person 6" class="mr-4">
    				<h5>Ricardo Dalisay</h5>
    				<h7>Philippines</h7>
    				<p class="text-muted-mb-0">"My wife loves this so much that sometimes she doesn't talk to me when I don't bring a few pieces home."</p>
    			</div>
    		</div>
    	</div>
    	<hr class="mt-2 mb-3"/>

    </div>

    <div class="container">
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="margin-center featurette-heading">Quality vs. quantity</h2>
          <p class="lead">Whether you’re a bread fiend or someone who just enjoys a good sandwich, there’s no reason you shouldn’t be able to tell the difference between a simple bread and a truly great bread. You might be wondering how our bread differs from any other bread, but any quality bakery will be able to tell you that there certainly is a difference.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="rounded-circle picture-padding thumbnail featurette-image img-responsive center-block" src="../assets/img/home/home 1.jpg" alt="Image 1">
        </div>
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
