<?php
session_start();
include('dbcon.php');
?>

<html>
<head>
  <title>Blood Donation Website - Sign In</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/login.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <div class="container-fluid bg-light">
    <div class="row justify-content-center">
      <div class="col-sm-6 col-md-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center mb-4"><i class="fas fa-heart"></i> Blood Donation Website</h3>
            <form method="post">
              <div class="form-group">
                <label for="username"><i class="fas fa-envelope"></i> Username</label>
                <input type="text" name="username" class="form-control input_user" value="" placeholder="Username" required>
              </div>
              <div class="form-group">
                <label for="password"><i class="fas fa-lock"></i> Password</label>
                <input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" required>
              </div>
              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="remember-me">
                <label class="form-check-label" for="remember-me">Remember me</label>
              </div>
              <button type="submit" name="userlogin" style="border-radius: 0%" class="btn login_btn">User Login</button>
            </form>
            <hr>
            <p class="text-center">Don't have an account? <a href="register.php">Sign up</a></p>
            <p class="text-center"> <a href="../index.php">Home</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['userlogin'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM register WHERE password='$password' AND username='$username'");
    $row = mysqli_fetch_array($query);
    $num_row = mysqli_num_rows($query);

    if ($num_row == 1) {
      $_SESSION["id"] = $row["id"];
      $_SESSION["details"] = $row;
      header('location:home.php');
    } else {
      echo "Wrong username or password";
    }
  }

  if (isset($_SESSION["id"])) {
    //header("Location:../index.php");
  }
  ?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
