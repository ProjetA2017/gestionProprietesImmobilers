<?php include'header.php';?>

<div class="">

        <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
          <?php foreach ($_SESSION['lesAnnoncesTop4Maisons'] as $row) { ?>
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
             <h2>Trouver votre appartenance</h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> <?=$row['adresse']?></p>
              <!--<p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>-->
              <cite><?=$row['prix']?> $</cite>
              </blockquote>
            </div>
          </div>
          <?php } ?>
        </div><!-- /sl-slider -->

        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>


<!-- begin banner -->

<div class="banner-search">
  <div class="container">
    <!-- banner -->
    <!--<h3>Recherche</h3>-->
    <div class="searchbar">
      <div class="row">
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <?php
               if (!ISSET($_SESSION["membre"]))
               {
                 echo "<p>Inscrivez-vous et restez à l'affût des dernières annonces</p>";
                 echo '<button class="btn btn-info" data-toggle="modal" data-target="#loginpop">Se connecter</button>';
               }
               else
               {
                 //echo '<button class="btn btn-info" data-toggle="modal" data-target="#logoutpop">Se deconnecter</button>';
                 echo '<button type="submit" class="btn btn-info"  onclick="window.location.href=\'?action=formulaireAnnonce\'">Créer une annonce</button>';
               }
          ?>
        </div>
      </div>
    </div>
  </div>

<div class="container">
  <div class="properties-listing spacer">
    <div class="pull-right viewall">
      <div style="margin-right: 10px;">
    <a href="?action=afficherCarte"  id="spcTest"><span class="glyphicon glyphicon-map-marker" style="font-size: 1.6em; margin-right: 10px;"></span></a>
    <a href="?action=pageChercher"  id="spcTest"><span class="glyphicon glyphicon-list" style="font-size: 1.6em;"></span></a>
  </div>
  </div>
    <h2>Présentation des propriétés</h2>
    <div id="owl-example" class="owl-carousel">
<?php foreach ($_SESSION['lesAnnonces'] as $row) { ?>
      <div class="properties">
        <div class="image-holder"><img src="upload/imagesAnnonces/<?=$row['imgannonce']?>" class="img-responsive" alt="properties"/>
          <div class="status new"><?=$row['status']?></div>
        </div>
        <h4><a href="?action=pageDetails">Khaoula Lmhboula</a></h4>
        <p class="price">Prix : <?=$row['prix']?> $</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="<?=$row['typeannonce']?>">!</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="<?=$row['typelogement']?>">?</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Stationnement">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Cuisines">1</span> </div>
        <a class="btn btn-primary" href="?action=pageDetails&idannonce=<?=$row['idannonce']?>">Voir les détails</a>
      </div>
<?php } ?>

    </div>
  </div>


  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>À propos de nous</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="?action=pageAbout">Learn More</a></p>

      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Recommandé</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
          <!-- Carousel items -->
            <div class="carousel-inner">
              <?php
                $indice = 0;
                foreach ($_SESSION['lesAnnoncesTop4Maisons'] as $row) {
                $image = ($row['imgannonce'] == NULL ? "default.jpg" : $row['imgannonce']);
                $indice++;
                $item = ($indice == 1 ? "item active" : "item");
              ?>
              <div class="<?=$item?>">
                <div class="row">
                  <div class="col-lg-4"><img src="upload/imagesAnnonces/<?=$image?>" class="img-responsive" alt="<?=$row['typelogement']?>"/></div>
                  <div class="col-lg-8">
                    <h5><a><?=$row['status']?></a></h5>
                    <p class="price"><?=$row['prix']?> $</p>
                    <a href="?action=pageDetails&idannonce=<?=$row['idannonce']?>" class="more">Plus de détails</a> </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="assets/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/barrePrix.js"></script>

<?php include'footer.php';?>
