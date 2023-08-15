<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Dashboard - Blood Donation Website</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style>
		body {
			padding: 20px;
			background-color: #f9f9f9;
		}
		.container {
			max-width: 600px;
		}
		.dashboard-links {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 20px;
		}
		.dashboard-link {
			flex: 0 0 200px;
			padding: 20px;
			background-color: #ffffff;
			border: 1px solid #e9ecef;
			text-align: center;
			border-radius: 5px;
			text-decoration: none;
			color: #333;
			display: block;
			transition: background-color 0.3s ease;
		}
		.dashboard-link:hover {
			background-color: #f3f3f3;
		}
		.dashboard-link h4 {
			margin-top: 10px;
			margin-bottom: 0;
		}
		.dashboard-link i {
			font-size: 36px;
			color: #c0392b; /* Red color */
			margin-bottom: 10px;
		}
		.logout-btn {
			margin-top: 20px;
			display: flex;
			justify-content: center;
		}
		.welcome-box {
			background-color: #f3f3f3;
			padding: 10px;
			text-align: center;
			margin-bottom: 20px;
		}
	</style>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	<?php
	include "dbconnect.php";
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location:index.php');
		exit;
	}

	
	$user_id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT username FROM register WHERE id = '$user_id'");
	$row = mysqli_fetch_assoc($query);
	$user_name = $row['username'];
	?>

	<div class="container">
		<!-- Welcome Message -->
		<div class="welcome-box">
			<h3>Welcome, <?php echo $user_name; ?>!</h3>
		</div>

		<div class="dashboard-links">
			<!-- First Line of Buttons -->
			<a href='viewblood.php' class="dashboard-link">
				<i class="fas fa-tint"></i>
				<h4>View Blood</h4>
			</a>
			<a href='addblood.php' class="dashboard-link">
				<i class="fas fa-plus-circle"></i>
				<h4>Add Blood</h4>
			</a>

			<!-- Second Line of Buttons -->
			<a href='makeannouncement.php' class="dashboard-link">
				<i class="fas fa-bullhorn"></i>
				<h4>Make Announcement</h4>
			</a>
			<a href='viewannouncement.php' class="dashboard-link">
				<i class="fas fa-file-alt"></i>
				<h4>View Announcements</h4>
			</a>

			<!-- Third Line of Buttons -->
			<a href='editannounceform.php' class="dashboard-link">
				<i class="fas fa-edit"></i>
				<h4>Edit Announcements</h4>
			</a>
			<a href='deleteannouncement.php' class="dashboard-link">
				<i class="fas fa-trash"></i>
				<h4>Delete Announcement</h4>
			</a>

			<!-- Fourth Line of Buttons -->
			<a href='campaign.php' class="dashboard-link">
				<i class="fas fa-hands-helping"></i>
				<h4>Campaign</h4>
			</a>
			<a href='viewcampaign.php' class="dashboard-link">
				<i class="fas fa-eye"></i>
				<h4>View Campaign's</h4>
			</a>

			<!-- Fifth Line of Buttons -->
			<a href='editcampaignform.php' class="dashboard-link">
				<i class="fas fa-pencil-alt"></i>
				<h4>Edit Campaign's</h4>
			</a>
			<a href='deletecampaign.php' class="dashboard-link">
				<i class="fas fa-times"></i>
				<h4>Delete Campaign's</h4>
				</a>
		</div>

		<!-- Logout Button -->
		<form method="post" class="logout-btn">
			<a href="../logout.php" class="btn btn-danger">
				<i class="fas fa-sign-out-alt"></i> Logout
			</a>
		</form>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
		
