<!DOCTYPE html>
<html lang="en">
<head>
<title>Location Maison</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>

  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>

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
<!-- 1 Creation annonces -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    <!-- Include JS File Here -->

    <!-- Include JS File Here -->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTBYRZ3zAUQ81jl-x8Y8J14WqVIP4Es9g&libraries=places"></script>
    <style>label{ color:darkblue
            }</style>
    <!-- <script src="assets/js/ajaxAnnonces.js"></script>-->

<!-- fichier faisant disparaitre le slide
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
-->

    <!-- 2 DropZone -->
    <link href="dropzone.css" type="text/css" rel="stylesheet" />
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->



    <style>
    .containerImage{
        width: 800px;
        height:300px;
        margin:30px auto;
    }
    .dropzone .dz-preview .dz-image{
        border :3px dashed lightcoral;
        font-weight:500;
        width: 250px;
        height: 250px;
        position: relative;
    }

/*----------------- Partie map -----------------------*/
    #map {

        height: 80%;
        width: 70%;
        float:left;
      margin: 30px 30px 30px 30px;
        border: 5px solid darkkhaki;

    }
    /* Optional: Makes the sample page fill the window. */
    html, body {

        height: 100%;
        margin: 0;
 }
.title{
    padding-top: 40px;
    position:relative;
    text-align:center;
}

/*----------------- Partie map -----------------------*/
</style>




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
                <li><a href="buysalerent.php">Vendre</a></li>
                <li><a href="buysalerent.php">Louer</a></li>
                <?php
                     if (ISSET($_SESSION["connected"]))
                         {echo '<li><a href="#">Bienvenu  '.$_SESSION["connected"].'</a></li>';}
                ?>
              </ul>
</div>
<!-- #Header Starts -->
</div>
