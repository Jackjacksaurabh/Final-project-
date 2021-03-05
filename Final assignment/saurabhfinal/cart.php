<?php

require 'includes/common.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>cart</title>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .row_style{
                margin-top: 100px;
            }
            .footer {
             
                padding: 10px 0;
                 position: fixed;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
                text-align: center;
                left: 0;
}
            

            </style>
            
    </head>
    <body style="padding-top:50px;">
       <!-- header part-->
        
     <?php
     include 'includes/header.php';
     ?>
       <!-- header part-->
       <!-- table start-->
       <div class="container">
               <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <table class="table table-striped" style="margin-top: 35px;">

                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id= $_SESSION['id'];
                        $query = "SELECT items.price AS price, items.id, items.name AS name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>"    .       $row["id"] . "</td>
                                              <td>"    .       $row["name"] . "</td>
                                              <td>Rs " .       $row["price"] . "</td>
                                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<br><br>
                                  <thead>
                                   <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                   </tr>
                                  </thead>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
             </div>
        </div>
       
       <!-- table end-->
       <!-- footer start-->
       
      <?php
      include 'includes/footer.php';
      ?>
   
       <!-- footer end-->
    </body>
</html>
