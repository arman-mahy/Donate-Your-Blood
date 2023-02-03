<?php

session_start();

if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
   
    header("location: ../home.php");
    exit();
}
//$session_id=$_SESSION['id'];



?>