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
    <link href="../css/custom.css" rel="stylesheet">

 


</head>

<body>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Start New Campaign</h1>
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
                                    <form role="form" action="campaignadded.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Campaign Name</label>
                                            <input class="form-control" type="text" placeholder="Enter Campaign's Name" name="cname" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Organizer Name</label>
                                            <input class="form-control" type="text" placeholder="Enter Organizer's Name" name="oname" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input class="form-control" placeholder="9876543210" type="number" name="contact" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Campaign Date</label>
                                            <input class="form-control" type="date" name="cdate" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Campaign Location</label>
                                            <input class="form-control" type="text" placeholder="Campaign Location Here" name="clocation" required>
                                        </div>

                

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" type="text" rows="4" name="cdes" required></textarea>
                                        </div>
                                       
                                    
                                
                                        <button type="submit" href="" class="btn btn-success" style="border-radius:0%">Post</button>
                
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


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
