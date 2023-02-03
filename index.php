<?php session_start(); ?>
<?php include('pages/dbcon.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donate Blood</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
    />
  </head>

  <body>
    <!-- Navigation Bar  -->
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"
            ><img src="pics/logo.png" class="logo1" alt="Logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages\login.php" target="blank">Sign In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages\register.php" target="blank">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <!--------------------------banner section --------------------------------------- -->
    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="promo-title">Save Life.Connect</p>
            <p>Connecting blood donors with recipients</p>
          </div>
          <div class="col-md-6 text-center">
            <img src="images/home2.png" class="img-fluid" alt="logo02" />
          </div>
        </div>
      </div>

      <img src="images/wave1.png" alt="bottom-img" />
    </section>

    <!-- -------------------------section 02---------------------------- -->

    <section id="services">
      <div class="container text-center">
        <h1 class="title">Join The Cause</h1>
        <div class="row text-center">
          <div class="col-md-4 services">
            <img src="images/service1.png" class="service-img" alt="" />
            <h4>Find Blood</h4>
            <p>
              Find blood donors near your location and request the needed blood
              type.
            </p>
          </div>
          <div class="col-md-4 services">
            <img src="images/service2.png" class="service-img" alt="" />
            <h4>Get Notified</h4>
            <p>
              Get notified about requests instantly, either on our app or by
              sms.
            </p>
          </div>
          <div class="col-md-4 services">
            <img src="images/service3.png" class="service-img" alt="" />
            <h4>Forever Free</h4>
            <p>
              You don't have to pay anything. Save life Connect is forever Free!
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ----------------stories------------------------- -->
    <section id="stories">
      <div class="container">
        <h1 class="title text-center">Lives Saved</h1>
        <div class="row offset-1">
          <div class="col-md-5 stories">
            <p>
              " A member of my family needed blood but his blood type is quite
              hard to find. DonateBlood helped use figure it out in no time ! "
            </p>
            <img src="images/user3.png" class="mahy" alt="" />
            <p class="user-details"><b>Arman Mahy</b><br />Student,AUST</p>
          </div>
          <div class="col-md-5 stories">
            <p>
              " I regularly donate my blood to answer Savelife Connect blood
              requests. Very proud to contribute saving lives ! "
            </p>
            <img src="images/user4.png" alt="" />
            <p class="user-details"><b>Abdullah Yusha</b><br />Student,AUST</p>
          </div>
        </div>
      </div>
    </section>

    <!-- -----------social media section--------------------- -->

    <section id="social-media">
      <div class="container text-center">
        <p>Find us on Social Media</p>
        <div class="social-icons">
          <a href="#"><img src="images/facebook-icon.png" alt="" /></a>
          <a href="#"><img src="images/instagram-icon.png" alt="" /></a>
          <a href="#"><img src="images/twitter-icon.png" alt="" /></a>
          <a href="#"><img src="images/linkedin-icon.png" alt="" /></a>
          <a href="#"><img src="images/snapchat-icon.png" alt="" /></a>
        </div>
      </div>
    </section>

    <!-- --------------------fotter section ----------------------- -->

    <section id="footer">
      <img src="images/wave2.png" class="footer-img" alt="" />
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-box">
            <img src="pics/logo.png" alt="" />
            <h1>Start Saving Lives</h1>
            <p>Become a donor or request for blood and help lives</p>
            <button type="button" class="btn btn-primary">Register</button>
          </div>
        </div>
      </div>
    </section>
<!-- nav-bar code ends -->





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>