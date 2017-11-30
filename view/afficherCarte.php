<?php

include 'header.php';
if(isset($_SESSION['annonceAafficher'])) {
  var_dump($_SESSION['annonceAafficher']);
  $longitude = $_SESSION['annonceAafficher']->longitude;
  $latitude = $_SESSION['annonceAafficher']->latitude;
  $zoom = 17;
} else {
    $latitude = 45.50884;
    $longitude = -73.58781;
    $zoom = 10;
}
var_dump($longitude);
var_dump($latitude);
var_dump($zoom);
?>
<input type="hidden" id="afficheLatitude" value="<?=$latitude?>">
<input type="hidden" id="afficheLongitude" value="<?=$longitude?>">
<input type="hidden" id="afficheZoom" value="<?=$zoom?>">
<div class="col-lg-12 ">
    <div class="container">
        <div class="well" id="dispoInline">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Recherche par">
                </div>
                <div class="form-group" style="width:auto;">
                    <div id="slider-range" style="max-width: 100%;">
                        <span><b>0</b></span>
                        <span class="pull-right"><b>1200</b></span>
                    </div>
                </div>
                <div class="form-group" >
                    <h3 for="amount"><b>Prix :<b></h3>
                </div>
                <div class="form-group">
                    <input  type="text" id="amount" readonly="true" class="form-control" >
                </div>
                <button type="submit" class="btn btn-default" id="btnPersonnalise">Recherche</button>
            </form>
        </div>
    </div>


    <div class="col-lg-8  col-sx-12" style=" margin:0 1em 0 0; width:65%;">
        <div>
            <div id="map"></div>
        </div>
    </div>
    <!--span style="width:1px;">e</span-->
    <div id="afficheDetailsMarker" class="col-lg-4 col-sx-12" style=" margin:0 0 0 0; width:34%;">
        <div class="title"><span>Aperçu :</span></div>
        <div id="message" class="message" style="postion:absolute;"></div>
    </div>
</div>

<script type="text/javascript" src="assets/js/scriptCarteGoogle.js"></script>
<script defer async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTBYRZ3zAUQ81jl-x8Y8J14WqVIP4Es9g&callback=initMap">
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="assets/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/barrePrix.js"></script>

<div style="clear:both; margin-top:4em;">
    <?php include'footer.php';?>
</div>
