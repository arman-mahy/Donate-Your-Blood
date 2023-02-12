<?php
session_start(); 
$user_id = $_SESSION["id"] ;
if(isset($_GET['id'])){
$user_id=$_GET['id'];

include 'dbconnect.php';


$qry="delete from campaign where user_id=$user_id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:deletecampaign.php');
}else{
    echo"ERROR!!";
}
}
?>