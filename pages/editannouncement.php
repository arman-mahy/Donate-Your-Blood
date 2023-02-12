<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DYB</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Announcement Detail</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

								<?php
									include 'dbconnect.php';
									$user_id = $_SESSION["id"] ;
						            $qry="select * from announcement t1 where t1.user_id = $user_id ";
									$result=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_array($result)){
								?> 

                                    <form role="form" action="editedannounce.php" method="post">
                                    <?php $details = $_SESSION["details"]; ?>
                                     
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" placeholder="example: Arman Mahy"  
                                            value="<?php echo $details["name"]; ?>"  readonly name="name" required>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label>Enter Announcement Title</label>
                                            <input class="form-control" type="text" placeholder="Announcement Title" name="title" 
                                             >
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Blood Needed (Type)</label>
                                            <input class="form-control" type="text" placeholder="example: B+" name="blood_type" 
                                          required>
                                        </div>

                                        <div class="form-group">
                                            <label>Need Date</label>
                                            <input class="form-control" type="date" name="needed_date" 
                                            required>
                                        </div>

                                        <div class="form-group">
                                            <label>Today's Date</label>
                                            <input class="form-control" type="date" name="publish_date" 
                                            required>
                                        </div>

                                        <div class="form-group">
                                                <label>Details</label>
                                                <textarea class="form-control" rows="4" type="text" name="details" 
                                              required></textarea>
                                            </div>
                                       
                                     <!-- id hidden grna input type ma "hidden" -->
            <input type="hidden" name="id" value="<?php echo $details['id'];?>"> 
                                
                                        <button type="submit" class="btn btn-success">Make Changes</button>
                
                                    </form>
                                </div>

                                <?php
}
?>
                                
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
