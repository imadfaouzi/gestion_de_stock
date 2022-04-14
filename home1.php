<?php 
   // Start the session
    session_start();

    if(!isset($_SESSION["connecter"])){
        header('location:login.php');
        exit();
    }

   require 'includes/erreurs.php';
   


?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home1/home1.css">
     <link rel = "icon" href = 
"assets/img/icon.png" 
        type = "image/x-icon">
    <script src="assets/js/jquery.slim.min.js"></script>
</head>
<body>
<!--  nav bar   -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">GSTK MADYASS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="nav-link">Welcome GSTK</span>
                </li>
                <li class="nav-item">
                    <span class="nav-link"> | </span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="includes/logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--    end nav bar-->

    <div class="container" id="bar_messages" style="margin-bottom: 10px; display: <?php  echo $csser; ?>;">
        <button type="button" id="close_alert" class="btn-close" aria-label="Close"></button>
           <div class="card  <?php echo $color; ?>" style="color :white;">
                <div class="card-header">
                  ALERTS
                </div>
                <div class="card-body">
                    <p class="card-text"><?php  echo $mes;  ?></p>
                </div>
           </div>
    </div>
   <script type="text/javascript">
       $("#close_alert").click(function(){
          $("#bar_messages").hide();
        });
   </script>
<!--------------------------------->
    <div class="container-fluid">
       <div class="row">
            <div class="nav flex-column nav-pills col-lg-2" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="padding: 0px 0px 0px 10px;">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Categorie</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">fournisseur</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Article</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Affichage</a>
            </div>
            <div class="tab-content col-lg-10" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <?php require 'includes/modls/CAT/categorie.php'; ?>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <?php require 'includes/modls/Fournisseur/fournisseur.php'; ?>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                           <?php require 'includes/modls/Article/Article.php'; ?>
                    </div>

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                          <?php require 'includes/modls/Affichage/Affichage.php'; ?>
                    </div>
            </div>
       </div>
    </div>
    <!------------------------------------------------- MODAL ------------------------------------------------------------->
       <?php  require 'includes/modls/modal_boot.php';  ?> 
   <!-------------------------------------------------FOOTER-------------------------------------------------------------> 
       <footer class="bg-light text-center text-lg-start">
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <b class="text-dark">GSTK - MADYAS</b>
          </div>
          <!-- Copyright -->
      </footer>
    <!-------------------------------------------------------------------------------------------------------------------->
    
    <script src="assets/bootstrap/poper.min.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/home1/home1.js"></script>
    <script src="assets/js/home1/ajax.js"></script>
    <script type="text/javascript"></script>
</body>
</html>