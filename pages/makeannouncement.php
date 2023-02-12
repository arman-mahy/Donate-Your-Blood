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
    <!-- <link href="../css/custom.css" rel="stylesheet"> -->

   


</head>

<body>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Make Announcement</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill up the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="announcedb.php" method="post">
                                    <?php $details = $_SESSION["details"]; ?>
                                    <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" placeholder="example: Arman Mahy" 
                                            value="<?php echo $details["name"]; ?>" readonly name="name" required>
                                        </div>
                                     
                                        <div class="form-group">
                                            <label>Enter Announcement Title</label>
                                            <input class="form-control" type="text" placeholder="Announcement Title" name="title" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Blood Needed (Type)</label>
                                            <input class="form-control" type="text" placeholder="example: B+" name="blood_type" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Need Date</label>
                                            <input class="form-control" type="date" name="needed_date" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Today's Date</label>
                                            <input class="form-control" type="date" name="publish_date" required>
                                        </div>

                                        <div class="form-group">
                                                <label>Details</label>
                                                <textarea class="form-control" rows="4" type="text" name="details" required></textarea>
                                            </div>
                                       
                                    
                                
                                        <button type="submit" style="border-radius: 0%"  class="btn-success btn btn-default">Submit</button>
                
                                    </form>
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
