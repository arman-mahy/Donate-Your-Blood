



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/custom.css" rel="stylesheet">


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
                                    <form role="form" action="login.php" method="post">
            <?php 

if(isset($_POST['submit_form'])){
$name = $_POST["name"];    
$email = $_POST["email"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];

$bloodgroup = $_POST["bloodgroup"];

$address = $_POST["address"];
$contact = $_POST["contact"];
$username = $_POST["username"];
$donor = $_POST["donor"];
$password = $_POST["password"];

include 'dbconnect.php';
//code after connection is successfull
$qry = "insert into register(name,email,gender,dob,bloodgroup,address,contact,username,donor,password) values
 ('$name','$email','$gender','$dob','$bloodgroup','$address','$contact', '$username', '$donor', '$password')";
$result = mysqli_query($conn,$qry); //query executes

if(!$result){
    echo"ERROR";
}else {
    echo" <div style='text-align: center'><h1>SUBMITTED SUCCESSFULLY</h1>";
    echo" <a href='login.php' div style='text-align: center'><h3>Login</h3>";

}

}else{
    echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='../index.php'> DASHBOARD </a></h3>";
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
    

   
</body>



</html>
