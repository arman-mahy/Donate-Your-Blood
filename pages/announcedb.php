



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




</head>

<body>

    <div id="wrapper">

        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
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
                                    <form role="form" action="index.php" method="post">
            <?php 

if(isset($_POST['name'])){
$name = $_POST["name"];  
$title = $_POST["title"];    
$blood_type = $_POST["blood_type"];
$publish_date = $_POST["publish_date"];
$needed_date = $_POST["needed_date"];
$details = $_POST["details"];

include 'dbconnect.php';
//code after connection is successfull
$qry = "insert into announcement(name,title,blood_type,publish_date,needed_date,details) 
values ('$name','$title','$blood_type','$publish_date','$needed_date','$details')";
$result = mysqli_query($conn,$qry); //query executes

if(!$result){
    echo"ERROR";
}else {
    echo" <div style='text-align: center'><h1>ANNOUNCEMENT MADE</h1>";
    echo" <a href='home.php' div style='text-align: center'><h3>Go Back</h3>";

}

}else{
    echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='home.php'> DASHBOARD </a></h3>";
}


?>
                                    
                                
                                        
                
                                    </form>
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
