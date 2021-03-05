<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$item_ids_string = $_GET['itemsid'];

$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>


<!DOCTYPE html>

<html>
    <head>
        <title>success page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .row_style{
                padding-top: 70px;
            }
            .new1 {
  border-top: 1px solid #9d9d9d;
}
center{
    color: #9d9d9d;
}  
        </style>
    </head>
    <body>
               <?php include 'includes/header.php'; ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-offset-2 col-xs-8">
                    <center><h3> <br> Thank you for ordering form e-cart.The order shall be delivered <br>to you shortly<br>
                            <hr class="new1">
                            order some more electronic items <a href="products.php">here</a>.</h3>   </center>
                </div>
            </div>
        </div>
               <?php include 'includes/footer.php'; ?>
    </body>
</html>
