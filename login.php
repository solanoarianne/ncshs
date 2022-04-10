
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.png">

    <title>NCSHS Online Grading System</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <style>
      body{
        display: flex;
        height: calc(100%);
        width: calc(100%);
        justify-content: center;
        align-items: center;
      }
      .login-form {
  display: block;
  position: fixed;
  border-radius: 20px;
  left:95px;
  width: 600px;
  background-color: white;
  bottom:200px;
 } 
 .erlert{
  display:block;
  border-radius:5px;
  background-color: #38aa4e;
  padding: 5px;
}
    </style>
  </head>
<body>
  

<div class="container-fluid">

  <div class="login-form" id="login_modal" role="dialog" >


  <h3 style="font-family:Montserrat; text-align: left; margin-left: 90px; font-size:50px; color: black;"><b>Welcome</b></h3>
  <p style="font-family:Montserrat; text-align: left; margin-left: 96px; font-size:17px; color: black;">NCSHS Online Grading System</p>
  <br>
  

  <form class="form-horizontal" method="post">
    <div class="form-group">
      <div class="col-md-7">
      <div class="input-group">
      
        <input style="border-color:white; background-color:#F2F2F2; border-radius:10px; font-family: Montserrat; font-size: 20px; font-weight:bold; margin-left: 90px;" type="text" class="form-control" id="user" name="user" placeholder="Username" autocomplete="off">
      </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-7">
      <div class="input-group">
           
          <br>
        <input style="border-color:white; background-color:#F2F2F2; border-radius:10px; font-family: Montserrat; font-size: 20px; font-weight:bold; margin-left: 90px;" type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
      </div>
      </div>
    </div>
    <br>
    <div class="form-group">        
      <div class="col-md-offset-3  col-md-1">
      <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Create New</button>-->
      
      <button style="border-radius:10px; width:200px;font-family: Montserrat; font-size:20px; background-color: #3baa4d; color:white;" type="hidden"  class="btn btn-default">Login</button>
       
      </div>
    </div>
  </form>
   <?php
  include 'connect.php';
  ?>
   </div>          
</div>


    <script src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  
</html>
