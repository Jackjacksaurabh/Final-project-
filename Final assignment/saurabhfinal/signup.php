<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
                 footer {    
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
        
          <?php include 'includes/header.php'; ?>
           <!-- signup form star here-->   
           <div class="container">
               <div class="row  rowstyle">
                    <div class="col-xs-2">
                           <img src="signupimg.jfif">
                           <img src="mobail2.jpg">
                       </div>
                   <div class="col-xs-offset-4 col-xs-4">
                      
                       <h3>SIGN Up</h3>
                       <form method="post" action="signup_script.php">
                           <div class="form-group">
                               <input  type="text" name="name" placeholder="Name" id="name" class="form-control">
                           </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" id="email" class="form-control" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"">
                           </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control" required = "true" pattern=".{8,}">
                           </div>
                            <div class="form-group">
                                <input type="number" name="contact" placeholder="Contact" id="contact" class="form-control">
                           </div>
                           <div class="form-group">
                                <input type="text" name="city" placeholder="City" id="city" class="form-control">
                           </div>
                             <div class="form-group">
                                 <input type="text" name="address" placeholder="Address" id="address" class="form-control">
                           </div>
                           <button class="btn btn-primary" value="registration_submit">Submit</button>
                       </form>    
                   
                   </div>
               </div>
           </div>
           
           
              <!-- signup form end here-->  
                 <!-- footer start-->
              
         <?php
         include 'includes/footer.php';
         ?>
               
   
       <!-- footer end-->
    </body>
</html>
