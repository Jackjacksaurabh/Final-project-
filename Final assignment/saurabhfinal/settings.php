<!DOCTYPE html>
<?php 

require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
 ?>
<html lang="en">
    <head>
        <title>Setting</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
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
                
.rowstyle{
    padding-top: 100px;
}
            </style>
        
    </head>
    <body>
              <!-- header part-->
                        <?php
                        include 'includes/header.php';
                        ?>
           <!-- signup form star here-->   
           <div class="container">
               <div class="row  rowstyle">
                   <div class="col-xs-offset-4 col-xs-4">
                       <h3>Change Password</h3>
                       <form action="settings_script.php" method="post">
                           <div class="form-group">
                               <input type="password" class="form-control" name="oldpassword" placeholder="old Password"   required = "true">
                                    <?php
                        {
                            if(isset($_GET["errorp"]))
                            {
                                echo $_GET["errorp"];
                            }
                        }
                        ?>
                           </div>
                            <div class="form-group">
                               <input type="password" name="password" placeholder="New Password" class="form-control" required = "true" pattern=".{8,}">
                           </div>
                            <div class="form-group">
                               <input type="password" name="password1" placeholder="Re-type New Password" class="form-control"  required = "true" pattern=".{8,}">
                                       <?php
                        {
                            if(isset($_GET["error"]))
                            {
                                echo $_GET["error"];
                            }
                        }
                        ?>
                            </div>
                           
                           <button type="submit" class="btn btn-primary">Change</button>
                             <?php
                        {
                            if(isset($_GET["errorup"]))
                            {
                                echo $_GET["errorup"];
                            }
                        }
                        ?>
                       </form>    
                   
                   </div>
               </div>
           </div>
           
           
              <!-- sign up form end here-->  
                 <!-- footer start-->
       
        <?php
       include 'includes/footer.php';
        ?>
   
       <!-- footer end-->
    </body>
</html>
