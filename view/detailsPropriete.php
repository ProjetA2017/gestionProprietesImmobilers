<?php
include 'header.php';
if(isset($_REQUEST['annonceAafficher'])) {
  $longitude = $_REQUEST['annonceAafficher']->longitude;
  $latitude = $_REQUEST['annonceAafficher']->latitude;
  $zoom = 17;
} else {
  $latitude = 45.50884;
  $longitude = -73.58781;
  $zoom = 10;
}
?>
<input type="hidden" id="afficheLatitude" value="<?=$latitude?>">
<input type="hidden" id="afficheLongitude" value="<?=$longitude?>">
<input type="hidden" id="afficheZoom" value="<?=$zoom?>">
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="?action=pageAccueil">Accueil</a> / Détails propriété</span>
    <h2>Détails propriété</h2>
</div>
</div>
<!-- banner -->


<div class="container">
  <div class="properties-listing spacer">
    <div class="row">
      <div class="col-lg-3 col-sm-4 hidden-xs">
        <div class="hot-properties hidden-xs">
          <h4>Propriétés cotées</h4>
          <?php
            $indice = 0;
            foreach ($_SESSION['lesAnnoncesTop4Maisons'] as $row) {
            $image = ($row['imgannonce'] == NULL ? "default.jpg" : $row['imgannonce']);
            $indice++;
          ?>
          <div class="row">
              <div class="col-lg-4 col-sm-5"><img src="upload/imagesAnnonces/<?=$image?>" class="img-responsive img-circle" alt="properties"/></div>
              <div class="col-lg-8 col-sm-7">
                <h5><a href="?action=pageDetails&idannonce=<?=$row['idannonce']?>">Plus de détails</a></h5>
                <p class="price"><?=number_format($row['prix'])?> $</p> </div>
          </div>
          <?php } ?>
        </div>


        <div class="advertisement">
          <h4>Publicités</h4>
          <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">
        </div>
      </div>

      <div class="col-lg-9 col-sm-8 ">
      <h2><?=$_REQUEST['annonceAafficher']->status?></h2>
      <div class="row">
        <div class="col-lg-8">
        <div class="property-images">
          <!-- Slider Starts -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators hidden-xs">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1" class=""></li>
              <li data-target="#myCarousel" data-slide-to="2" class=""></li>
              <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            </ol>
            <div class="carousel-inner">
              <?php if(count($_REQUEST['imagesDeLannonce']) > 0) {
                    $indice = 0;
                    foreach ($_REQUEST['imagesDeLannonce'] as $row) {
                    $image = ($row['idimage'] == NULL ? "default.jpg" : $row['idimage']);
                    $indice++;
                    $item = ($indice == 1 ? "item active" : "item");
              ?>
                  <div class="<?=$item?>">
                    <img src="upload/imagesAnnonces/<?=$image?>" class="properties" alt="properties" />
                  </div>
              <?php } } else { ?>
                <div class="item active">
                  <img src="upload/imagesAnnonces/default.jpg" class="properties" alt="properties" />
                </div>
              <?php } ?>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
      <!-- #Slider Ends -->
        </div>
        <div>
          <br />
        <form role="form">
          <input value="afficherGalery" name="action" type="hidden" />
          <input type="hidden"  name="idannonce" id="idannonce" value="<?=$_REQUEST['annonceAafficher']->idannonce?>" />
          <button type="submit" class="btn btn-success" name="bGalerieImages" id="bGalerieImages">Galerie Photos</button>
        </form>
        </div>




        <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Détails propriété</h4>
        <p>Inclus : <?=$_REQUEST['annonceAafficher']->inclus?></p>
        <p><?=$_REQUEST['annonceAafficher']->infosupplementaire?></p>

        </div>
        <div><h4><span class="glyphicon glyphicon-map-marker"></span> Localisation</h4>
      <div id="map" class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
        </div>

        </div>
        <div class="col-lg-4">
        <div class="col-lg-12  col-sm-6">
      <div class="property-info">
      <?php $prix = ($_REQUEST['annonceAafficher']->typeannonce == 'location' ? '$ par mois'  : '$');?>
      <p class="price"><?=number_format($_REQUEST['annonceAafficher']->prix)?> <?=$prix?></p>
        <p class="area"><span class="glyphicon glyphicon-map-marker"></span> <?=$_REQUEST['annonceAafficher']->adresse?></p>

        <div class="profile">
        <span class="glyphicon glyphicon-user"></span> Annonceur
        <p><?=$_REQUEST['annonceAafficher']->nfamille?> <?=$_REQUEST['annonceAafficher']->prenom?></p>
        </div>

        <span class="glyphicon glyphicon-calendar"></span> Date
        <?php if($_REQUEST['annonceAafficher']->status == 'Loué' || $_REQUEST['annonceAafficher']->status == 'vendu')
          $tooltipTxt = $_REQUEST['annonceAafficher']->status.' depuis : '.$_REQUEST['annonceAafficher']->datetraitementannonce;
        else
          $tooltipTxt = 'Disponible depuis : '.$_REQUEST['annonceAafficher']->dateannonce;
        ?>
        <p><?=$tooltipTxt?></p>
      </div>

        <h6><span class="glyphicon glyphicon-home"></span> Spécificités</h6>
        <div class="listing-detail">
          <?php
            $typeannonce = ($_REQUEST['annonceAafficher']->typeannonce == "vente" ? "vendre" : "louer");
            $nbrSelon = ($_REQUEST['annonceAafficher']->typelogement == "bureaux" ? "Nombre d'employés" : "Nombre de chambres");
            if($_REQUEST['annonceAafficher']->typelogement == "bureaux") $chiffreSelon = $_REQUEST['annonceAafficher']->nbremployes;
            if($_REQUEST['annonceAafficher']->typelogement == "maison") $chiffreSelon = $_REQUEST['annonceAafficher']->nbrchambres;
            if($_REQUEST['annonceAafficher']->typelogement == "appartement") $chiffreSelon = $_REQUEST['annonceAafficher']->nbrpieces;
           ?>
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="<?=$nbrSelon?>"><?=$chiffreSelon?></span>
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="<?=$typeannonce?>">À</span>
        </div>

      </div>
      <div class="col-lg-12 col-sm-6 ">
      <div class="enquiry">
        <h6><span class="glyphicon glyphicon-envelope"></span> Contacter l'annonceur</h6>
        <form role="form" method = "post">
                      <input name="action" value="envoyerMessage" type="hidden" />
                      <input name="idannonce" value="<?=$_REQUEST['annonceAafficher']->idannonce?>" type="hidden" />
                      <input name="identifiant" value="<?=$_REQUEST['annonceAafficher']->idannonceur?>" type="hidden" />
                      <input type="text" class="form-control" name="nomcomplet" placeholder="Nom complet"/ required="required">
                      <input type="email" class="form-control" name="courriel" placeholder="Votre courriel" required="required"/>
                      <input type="text" class="form-control" name="tel" placeholder="Votre numéro de téléphone" required="required"/>
                      <textarea rows="6" class="form-control" name = "message" placeholder="Message"></textarea>
            <button type="submit" class="btn btn-primary" name="bEnvoyerMessageAnnonceur">Envoyer un message</button>
        </form><br />
       </div>
         <?php if (ISSET($_SESSION["messagesSucces"])) { ?>
               <div class="alert alert-success alert-dismissable">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                     <p class="panel-body"><?=$_SESSION["messagesSucces"]?></p>
               </div>
         <?php UNSET($_SESSION["messagesSucces"]); } ?>
      </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="assets/js/scriptCarteGoogle.js"></script>
<script defer async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTBYRZ3zAUQ81jl-x8Y8J14WqVIP4Es9g&callback=initMap">
</script>

<?php include'footer.php';?>
