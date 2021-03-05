<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle bootstrap</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="index.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
    <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            
            <button type="button" class="close" data-dismiss="modal" style="color: red;font-size: 25px;">x</button>
          <h2 style="color:orange;" class="color">
              <center><span class="glyphicon glyphicon-lock"></span> Login</h2></center>
        </div>
        <div class="modal-body">
           <p>Don't have an account? <a href="./signup.php">Register</a></p>
          <form role="form" action="login_submit.php" method="POST">
            <div class="form-group">
              <label><span class="glyphicon glyphicon-envelope"></span> E-Mail</label>
              <input type="email" class="form-control"  name="email" placeholder="Enter your Resistered E-Mail" required="true"  >
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" placeholder="Enter password" name="password" required>
            </div>
            
            <br>
            <div class="checkbox form-group">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-default btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
              <button type="submit" class="btn btn-default btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>  
          </form>
        </div>
        
      </div>
    </div>
</div> 
    </body>
</html>