<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="index.php">Accueil</a> / Détails propriété</span>
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
                <p class="price"><?=$row['prix']?> $</p> </div>
          </div>
          <?php } ?>
        </div>


        <div class="advertisement">
          <h4>Publicités</h4>
          <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">
        </div>
      </div>

      <div class="col-lg-9 col-sm-8 ">
      <h2><?=$_SESSION['annonceAafficher']->status?></h2>
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
              <?php
                $indice = 0;
                foreach ($_REQUEST['imagesDeLannonce'] as $row) {
                $image = ($row['idimage'] == NULL ? "default.jpg" : $row['idimage']);
                $indice++;
                $item = ($indice == 1 ? "item active" : "item");
              ?>
              <div class="<?=$item?>">
                <img src="upload/imagesAnnonces/<?=$image?>" class="properties" alt="properties" />
              </div>
              <?php } ?>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
      <!-- #Slider Ends -->

        </div>




        <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Détails propriété</h4>
        <p>Inclus : <?=$_SESSION['annonceAafficher']->inclus?></p>
        <p><?=$_SESSION['annonceAafficher']->infosupplementaire?></p>

        </div>
        <div><h4><span class="glyphicon glyphicon-map-marker"></span> Localisation</h4>
      <div id="map" class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
        </div>

        </div>
        <div class="col-lg-4">
        <div class="col-lg-12  col-sm-6">
      <div class="property-info">
      <p class="price">$ <?=$_SESSION['annonceAafficher']->prix?></p>
        <p class="area"><span class="glyphicon glyphicon-map-marker"></span> <?=$_SESSION['annonceAafficher']->adresse?></p>

        <div class="profile">
        <span class="glyphicon glyphicon-user"></span> Annonceur
        <p><?=$_SESSION['annonceAafficher']->nfamille?> <?=$_SESSION['annonceAafficher']->prenom?></p>
        </div>

        <span class="glyphicon glyphicon-calendar"></span> Date d'annonce
        <p>Diffusée le : <?=$_SESSION['annonceAafficher']->dateannonce?></p>
      </div>

        <h6><span class="glyphicon glyphicon-home"></span> Spécificités</h6>
        <div class="listing-detail">
          <?php
            $typeannonce = ($_SESSION['annonceAafficher']->typeannonce == "vente" ? "vendre" : "louer");
            $nbrSelon = ($_SESSION['annonceAafficher']->typelogement == "bureaux" ? "Nombre employés" : "Nombre Chambre");
            if($_SESSION['annonceAafficher']->typelogement == "bureaux") $chiffreSelon = $_SESSION['annonceAafficher']->nbremployes;
            if($_SESSION['annonceAafficher']->typelogement == "maison") $chiffreSelon = $_SESSION['annonceAafficher']->nbrchambres;
            if($_SESSION['annonceAafficher']->typelogement == "appartement") $chiffreSelon = $_SESSION['annonceAafficher']->nbrpieces;
           ?>
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="<?=$nbrSelon?>"><?=$chiffreSelon?></span>
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="<?=$typeannonce?>">À</span>
        </div>

      </div>
      <div class="col-lg-12 col-sm-6 ">
      <div class="enquiry">
        <h6><span class="glyphicon glyphicon-envelope"></span> Contacter l'annonceur</h6>
        <form role="form">
                      <input type="text" class="form-control" placeholder="Nom complet"/>
                      <input type="text" class="form-control" placeholder="Votre courriel"/>
                      <input type="text" class="form-control" placeholder="Votre numéero de téléphone"/>
                      <textarea rows="6" class="form-control" placeholder="Message"></textarea>
            <button type="submit" class="btn btn-primary" name="Submit">Envoyer un message</button>
            </form>
       </div>
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
