<?php

require ("includes/common.php");


$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password= md5($password);


$select_query= "SELECT id, email FROM users WHERE email='$email' AND password='$password'" ;
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$num=mysqli_num_rows($select_query_result);

    if ($num == 0) {
        echo "<div><p> login failed </p></div>";
 
        header('location: login.php?error=');
       
    } else {
        $row = mysqli_fetch_array($select_query_result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        header('location: products.php');
    }


?>
