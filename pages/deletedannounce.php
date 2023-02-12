<?php
session_start(); 
$user_id = $_SESSION["id"] ;
if(isset($_GET['id'])){
$user_id=$_GET['id'];

include 'dbconnect.php';


$qry="delete from announcement where user_id=$user_id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:deleteannouncement.php');
}else{
    echo"ERROR!!";
}
}
?>