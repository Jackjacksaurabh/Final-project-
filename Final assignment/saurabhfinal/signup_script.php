  
<?php
require 'includes/common.php';

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password= md5($password);

$contact = $_POST['contact'];
$contact = mysqli_real_escape_string($con, $contact);


$city = $_POST['city'];
$city = mysqli_real_escape_string($con, $city);

$address = $_POST['address'];
$address = mysqli_real_escape_string($con, $address);


$select_query= "SELECT email FROM users WHERE email='$email'";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$num=mysqli_num_rows($select_query_result);


  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";
  //verifying if there is any duplicate email 
  if ($num != 0){
   echo "email alredy exist";
  
  } else if (!preg_match($regex_email, $email)) {
  echo "email patter error";
  } else if (!preg_match($regex_num, $contact)) {
   echo "contact not exist";
  } else if($password<8)
  {
      echo "password is too short";
  }
  //if no duplicate then insert a new email id
  else {
    
    $query = "INSERT INTO users(name, email, password, contact,city,address)VALUES('$name','$email','$password ','$contact ','$city','$address ')";
    mysqli_query($con, $query) or die(mysqli_error($con));
   
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
    header('location: products.php');
  
  }
?>

  
