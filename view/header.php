<!DOCTYPE html>
<html lang="en">
<head>
<title>Location Maison</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/css/style.css"/>

  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/js/scriptSlide.js"></script>

<!-- -->
  <link rel="stylesheet" href="assets/jquery-ui-1.12.1.custom/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<!--importer -->
<link rel="stylesheet" type="text/css" href="assets/slider/slider/css/slider.css"/>
<script type="text/javascript" src="assets/slider/slider/js/bootstrap-slider.js"></script>

<!-- PARTIE GILBERTO ////////////////////////////////////////////////////////////////////////////////////////////////// -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTBYRZ3zAUQ81jl-x8Y8J14WqVIP4Es9g&libraries=places"></script>

<!-- 2 DropZone -->
<link href="assets/css/dropzone.css" type="text/css" rel="stylesheet" />

<!-- Css ajouté par Yang -->
<link rel="stylesheet" type="text/css" href="assets/css/styleYang.css">
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

</head>

<body>

<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="?action=accueil">Home</a></li>
                <li><a href="?action=pageAbout">À propos</a></li>
                <li><a href="?action=pageAgents">Agents</a></li>
                <li><a href="?action=pageBlog">Blogue</a></li>
                <li><a href="?action=pageContact">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

</div>
<!-- #Header Starts -->

<div class="container">

<!-- Header Starts -->
  <div class="header">
    <a href="index.php"><img src="images/logo1.png" alt="Realestate"></a>
    <ul class="pull-right">
      <li><a href="buysalerent.php">Acheter</a></li>
      <!--<li><a href="buysalerent.php">Vendre</a></li>-->
      <li><a href="buysalerent.php">Louer</a></li>
      <li>
      <div class="dropdown">
        <div data-toggle="dropdown">
          <?php
          if (ISSET($_SESSION["membre"])) {
          ?>
            <a href="#" style="text-decoration:none;"><span class="glyphicon glyphicon-user"></span>
          <?php
            echo $_SESSION["membre"]->getIdentifiant();
          ?>
            <span class="caret">
            </a>
          <?php
          }
          ?>

        </div>
        <ul class="dropdown-menu" style="margin: 0px 0px; min-width: 0px;">
          <li style="padding:5px 5px 0px 5px; margin-bottom: 0px;" ><a href="?action=updateProfile" style="font-size:15px;">Éditer profile</a></li>
          <li style="padding:5px 5px 0px 5px; margin-bottom: 0px;" ><a href="?action=updateMotDePasse" style="font-size:15px;">Modifier mot de passe</a></li>
          <li style="padding:5px 5px 0px 5px; margin-bottom: 0px;" ><a href="?action=deconnection" style="font-size:15px;">Se déconnecter</a></li>
        </ul>
        </div>
      </li>
    </ul>
  </div>

<!-- #Header Starts -->
</div>
