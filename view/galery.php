<?php include 'header.php';
/*var_dump($_REQUEST['idannonce']);
var_dump($_REQUEST['galeryAnnonce']['membre'] );
var_dump($_REQUEST['galeryAnnonce']['lesImages'] );*/
?>

<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="?action=pageDetails&idannonce=<?=$_REQUEST['idannonce']?>">Annonce</a> / Galerie</span>
    <h2>Galerie Photos de l'annonce</h2>
</div>
</div><br />

<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">


            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <?php
                      $i = 0;
                      foreach ($_REQUEST['galeryAnnonce']['lesImages'] as $row) {
                    ?>
                    <li class="col-sm-3">
                      <?php if (ISSET($_SESSION["membre"])) {
                        if($_SESSION["membre"]->getIdentifiant() == $_REQUEST['galeryAnnonce']['membre']) { ?>
                        <a href="?action=supprimerImage&idimage=<?=$row['idimage']?>&idannonce=<?=$_REQUEST['idannonce']?>">Supprimer</a>
                      <?php }} ?>
                        <a class="thumbnail" id="carousel-selector-<?=$i?>"><img src="<?=$row['path']?>"></a>
                    </li>
                  <?php $i++; } ?>
                </ul>
            </div>


            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                  <?php
                                      $i = 0;
                                      foreach ($_REQUEST['galeryAnnonce']['lesImages'] as $row) {
                                          $class = ($i==0 ? 'active item' : 'item');
                                  ?>
                                    <div class="<?=$class?>" data-slide-number="<?=$i?>">
                                      <img src="<?=$row['path']?>">
                                    </div>
                                    <?php $i++; } ?>
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div><br />
                    <?php if (ISSET($_SESSION["membre"])) {
                      if($_SESSION["membre"]->getIdentifiant() == $_REQUEST['galeryAnnonce']['membre']) { ?>
                      <form role="form">
                        <input value="modifierAnnonce" name="action" type="hidden" />
                        <input type="hidden"  name="idannonce" id="idannonce" value="<?=$_REQUEST['idannonce']?>" />
                        <button type="submit" class="btn btn-success" name="bAjoutImages" id="bAjoutImages">Ajouter des photos</button>
                      </form>
                    <?php }} ?>
                </div>
            </div>

            <!--/Slider-->
        </div>

    </div>
</div><br />

<!--<script type="text/javascript" src="assets/js/galey.js"></script> NB : j'ai déplacé les styles ds styleYang.cc-->
<?php include 'footer.php';?>
