<?php session_start();
include('dbcon.php'); ?>

<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<body>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="#" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="Username" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" required>
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="userlogin" style="border-radius: 0%" class="btn login_btn">User Login</button>
				   </div>
					</form>
				</div>
				
				<?php
	if (isset($_POST['userlogin']))
		{
			$username = mysqli_real_escape_string($con, $_POST['username']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			//$user_id = mysqli_real_escape_string($con, $_POST['id']);
		
			
			$query 		= mysqli_query($con, "SELECT * FROM register WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);

			if(is_array($row)){
				$_SESSION["id"] = $row["id"];
				$_SESSION["details"] = $row;
				header('location:home.php');
			//	$_SESSION["password"] = $row["password"];
			}
			else{
				echo "Wrong id pass";
			}
			
			// if ($num_row > 0) 
			// 	{			
			// 		$_SESSION["id"]=$row["id"];
			// 		header('location:home.php');
					
					
			// 	}
			// else
			// 	{
			// 		echo '
			// 					<div class="alert alert-danger alert-dismissible">
            //                             Invalid Username & Password.
            //                         </div> ';
			// 	}
		}

		if(isset($_SESSION["id"])){
			//header("Location:../index.php");
		}
  ?>
				
				
		
				<div class="mt-4">
					<!--<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#"  class="ml-2" style="text-decoration:none">Sign Up</a>
					</div> -->
					<div class="d-flex justify-content-center links">
						<a href="../" style="text-decoration:none; color: white">Back to Admin Panel</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>



</html>

