
<?php session_start(); ?>
<html>

<head>

<title>BDMS</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">


</head>


<body>
<div id="wrapper">


<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Delete Campaign Detail</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Records of campaign made by you
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "dbconnect.php";

						$user_id = $_SESSION["id"] ;
						$qry="select * from campaign t1 where t1.user_id = $user_id ";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
												
						<tr>
                        <th>Campaign Name</th>
						<th>Organizer Name</th>
						<th>Phone Number</th>
						<th>Date of campaign</th>
                        <th>Campaign Location</th>
						<th>Description</th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
						  <td>".$row['cname']."</td>
						  <td>".$row['oname']."</td>
						  <td>".$row['contact']."</td>
						  <td>".$row['cdate']."</td>
						  <td>".$row['clocation']."</td>
                          <td>".$row['cdes']."</td>
						  <td><a href='deletedannounce.php?id=".$row['user_id']."'><svg xmlns='http://www.w3.org/2000/svg' width='16'
                           height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                          <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                          <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                        </svg>	</a></td>

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





</body>

</html>