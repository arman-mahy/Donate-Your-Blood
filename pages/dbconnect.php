<?php

$servername="localhost";
$uname="root";
$pass="";
$db="donate_your_blood";

$conn = mysqli_connect($servername, $uname, $pass ,$db);


if(!$conn){
    die("Connection Failed");
}

?>