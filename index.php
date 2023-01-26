<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
	<title>Donate Your Blood</title>
</head>
<body>

	<!-- navbar code starts here -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Donate Your Blood</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="pages\login.php">Sign In</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="pages\register.php">Sign Up</a>
        </li>
        
      </ul>

      


          </div>
  </div>
</nav>


<?php
				if (isset($_POST['login']))
					{
						$username = mysqli_real_escape_string($con, $_POST['user']);
						$password = mysqli_real_escape_string($con, $_POST['pass']);
						
						$query 		= mysqli_query($con, "SELECT * FROM admin WHERE  password='$password' and username='$username'");
						$row		= mysqli_fetch_array($query);
						$num_row 	= mysqli_num_rows($query);
						
						if ($num_row > 0) 
							{			
								$_SESSION['user_id']=$row['user_id'];
								header('location:pages/index.php');
								
							}
						else
							{
								echo ' <div class="row"> <div class="col-md-4 col-md-offset-4">
								<div class="alert alert-danger alert-dismissible">
                                        Username & Password didnt match! Try Again.
                                    </div> </div> </div> ';
									
									
							}
					}
			  ?>

<!-- nav-bar code ends -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>