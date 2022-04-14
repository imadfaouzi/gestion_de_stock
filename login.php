<?php

// Start the session
session_start();

if(isset($_SESSION["connecter"])){
    header('location:home1.php');
    exit();
}

if(isset($_POST['btn_login'])){

   require 'includes/connection.php';
    
    $stmt = $BD_conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->execute([$_POST['loginUsername']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
     // print_r($user);
     // echo $user['password'];

    if ($user && password_verify($_POST['loginPassword'], $user['password']))
    {
        $_SESSION["connecter"] = 1;
        header('location:home1.php');
        exit();
    } else {
        $msg = 'invalid data ';
    }


    
    

}

?>
<html>
    <head>
        <title>HOME PAGE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.min.css">
        <script src="assets/js/jquery.slim.min.js"></script>
        <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.slim.min.js"></script>
        <link rel = "icon" href = 
"assets/img/icon.png" 
        type = "image/x-icon">
    </head>
    <style type="text/css">
        .btn{
            margin: 10px 0 0 0;
        }
    </style>
    <body>
    

      <div class="container" style="padding:5% 0 0 0;">
      <div class="row justify-content-center">
      <div class="col-sm-12 col-md-5 col-lg-5">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <?php
               if(isset($msg) && !empty($msg)){
                echo '<div class="alert alert-danger">';
                     echo $msg;
                echo '</div>';
             }
            ?>
            <form action="login.php" method="POST">
            <div id="loginMessage"></div>
              <div class="form-group">
                <label for="loginUsername">Username</label>
                <input type="text" class="form-control" id="loginUsername" name="loginUsername">
              </div>
              <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" class="form-control" id="loginPassword" name="loginPassword">
              </div>
              <button type="submit" name="btn_login" id="login" class="btn btn-primary">Login</button>
              <button type="reset" class="btn btn-warning">Clear</button>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>

    </div>
    </body>
</html>