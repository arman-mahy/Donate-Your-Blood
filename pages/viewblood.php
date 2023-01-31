<html>

<head>

<title>DYB</title>


<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">





</head>


<body>
<div id="wrapper">

<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Donors Detail</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Records of available donors
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "dbconnect.php";

						$qry="select * from register where donor='donor'";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
						<tr>
                            <th>Blood Group</th>
							<th>Name</th>
							<th>Email</th>
							<th>Gender</th>
							<th>Date of Birth</th>
							<th>Address</th>
                            <th>Contact</th>
                            <th>Donor</th>
							
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
                          
                          <td>".$row['bloodgroup']."</td>
						  <td>".$row['name']."</td>
						  <td>".$row['email']."</td>
						  <td>".$row['gender']."</td>
						  <td>".$row['dob']."</td>
						  <td>".$row['address']."</td>
						  <td>".$row['contact']."</td>
                          <td>".$row['donor']."</td>
						  
						  

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

 


<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>


</body>

	
	
</html>