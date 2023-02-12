<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

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
                    <h1 class="page-header">DYB</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="" method="post">

<?php
include 'dbconnect.php';
$cname = $_POST["cname"];    
$oname = $_POST["oname"];
$contact = $_POST["contact"];
$cdate = $_POST["cdate"];
$clocation = $_POST["clocation"];
$cdes = $_POST["cdes"];

$user_id = $_SESSION["id"] ;
//update query
$qry = "update campaign set cname='$cname', oname='$oname', contact='$contact', cdate='$cdate', clocation='$clocation', cdes='$cdes'  where user_id='$user_id'";
$result = mysqli_query($conn,$qry); //query executes
if(!$result){
    echo"ERROR". mysqli_error();
}else {
    echo"CAMPAIGN UPDATED";
    // header ("Location:editblood.php");
}
?>

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


</html>
