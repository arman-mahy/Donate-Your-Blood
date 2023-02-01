
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
               <h1 class="page-header">Edit Announcement Detail</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Recent announcement's made
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "dbconnect.php";

                        $sql = "select id from register";
                        $session_result = mysqli_query($conn,$sql);

                        $res=mysqli_fetch_array($session_result);
                            
                            

                            $newLangs = implode($res);

                            echo $newLangs;
                        
						$qry="select * from announcement where user_id ='$newLangs' ";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
												
						<tr>
                            <th>Announcer Name</th>
							<th>Title</th>
							<th>Blood Needed</th>
							<th>Announcement Date</th>
							<th>Needed Date</th>
							<th>Details</th>
							<th><i class='bi bi-pen'></i></th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr>
                          <td>".$row['name']."</td>
						  <td>".$row['title']."</td>
						  <td>".$row['blood_type']."</td>
						  <td>".$row['publish_date']."</td>
						  <td>".$row['needed_date']."</td>
						  <td>".$row['details']."</td>
						  <td><a href='editannouncement.php?id=".$row['user_id']."'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pen' viewBox='0 0 16 16'>
                          <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z'/>
                        </svg>		</a></td>

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



<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>