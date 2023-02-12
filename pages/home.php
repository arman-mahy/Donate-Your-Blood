<?php
session_start();
if(!isset($_SESSION['id'])){
	header('location:index.php');	
	}
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DYB</title>
</head>
<body>



<h1>Succesfuly Login</h1>

<a href='viewdonor.php' div style='text-align: center'><h3>View Donor</h3>";
<a href='addblood.php' div style='text-align: center'><h3>Add Blood</h3>";
<a href='viewblood.php' div style='text-align: center'><h3>Available Blood</h3>";
<a href='makeannouncement.php' div style='text-align: center'><h3>Make Announcement</h3>";
<a href='viewannouncement.php' div style='text-align: center'><h3>View Announcements</h3>";
<a href='editannounceform.php' div style='text-align: center'><h3>Edit Announcements</h3>";
<a href='campaign.php' div style='text-align: center'><h3>Campaign</h3>";
<a href='viewcampaign.php' div style='text-align: center'><h3>View Campaign's</h3>";



<?php echo $_SESSION['id']; ?>


</body>
</html>