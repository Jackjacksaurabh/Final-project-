<?php
$con = mysqli_connect("localhost", "root", "", "saurabh") or die(mysqli_error($con))
or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
