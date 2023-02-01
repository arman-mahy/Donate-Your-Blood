<html>

<head>

<title>DYB</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



<!-- Custom CSS -->
<link href="../css/custom.css" rel="stylesheet">



</head>


<body>
<div id="wrapper">

<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Announcement Detail</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Recent Announcement
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "dbconnect.php";

						$qry="select * from announcement";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
												
						<tr>
							<th>Title</th>
							<th>Blood Needed</th>
							<th>Announcement Date</th>
							<th>Needed Date</th>
							<th>Details</th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['title']."</td>
						  <td>".$row['blood_type']."</td>
						  <td>".$row['publish_date']."</td>
						  <td>".$row['needed_date']."</td>
						  <td>".$row['details']."</td>

						</tr>
						</tbody>";
						}

						?>
						</table>
									
				</div>
				</div>		
		</div>
		</div>	
		</div>	
		</div>
		</div>

</div>

<div align="center">
        <a href="home.php" align="center">Dashborad</a>
    </div>



<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>


</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By Arman Mahy</p>
    </footer>
	
	<style>
	footer{
   background-color: #424558;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
	</style>
</html>