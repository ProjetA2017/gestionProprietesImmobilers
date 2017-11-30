<?php include 'header.php';
var_dump($_REQUEST['annonceAafficher']);
//var_dump($_SESSION['testTab']);
?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="index.php">Accueil</a> / Modifier une annonce</span>
    <h2>Modifier une annonce</h2>
</div>
</div>
<!-- banner -->
<?php
$idannonce = $_REQUEST['annonceAafficher']->idannonce;
$lat = $_REQUEST['annonceAafficher']->latitude;
$long = $_REQUEST['annonceAafficher']->longitude;
$adresse = $_REQUEST['annonceAafficher']->adresse;
$prix = $_REQUEST['annonceAafficher']->prix;
$typeannonce = $_REQUEST['annonceAafficher']->typeannonce;
$typelogement = $_REQUEST['annonceAafficher']->typelogement;
$status = $_REQUEST['annonceAafficher']->status;
?>
<div class="container">
  <div class="spacer">
    <div class="row register">
      <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
        <form role="form">
          <div>
              <input value="modifierAnnonce" name="action" type="hidden" />
              <input type="hidden"  name="idannonce" id="idannonce" value="<?=$idannonce?>" />
              <input type="hidden"  name="latitude" id="lat" value="<?=$lat?>" />
              <input type="hidden"  name="longitude" id="long" value="<?=$long?>" />
              <input type="text" class="form-control" placeholder="Identifiant" name="identifiant" id="identifiant" value="<?=$_SESSION['membre']->getIdentifiant()?>" readonly="readonly">
              <input type="text" class="form-control" placeholder="Nom" name="nom" value="<?=$_SESSION['membre']->getNom()?>" id="nfamille"  readonly="readonly">
              <input type="text" class="form-control" placeholder="Prénom" name="prenom" value="<?=$_SESSION['membre']->getPrenom()?>" id="prenom"  readonly="readonly">
              <input type="text" class="form-control" placeholder="Adresse" name="adresse" value="<?=$adresse?>" id="adresse" required="required">
              <input type="text" class="form-control" placeholder="Prix" name="prix" value="<?=$prix?>" id="prix" required="required">
              <select class="form-control" placeholder="Type Annonce" name = "typeAnnonce" id="typeAnnonce" required="required">
                <option disabled = "disabled">Type d'annonce</option>
                <?php if($typeannonce == "location") { ?>
                <option selected value = "location">Location</option>
                <option value = "vente">Vente</option>
              <?php } else { ?>
                  <option value = "location">Location</option>
                  <option selected value = "vente">Vente</option>
              <?php } ?>
              </select>
              <select class="form-control selectpicker" placeholder="Status de l'annonce" name = "status" id="status" required="required">
                  <option disabled = "disabled">Status de l'annonce</option>
                  <?php if($status == "Disponible") { ?>
                  <option selected value = "Disponible">Disponible</option>
                  <option value = "Vendu">Vendu</option>
                  <option value = "Loué">Loué</option>
                <?php } else if($status == "Vendu") { ?>
                  <option value = "Disponible">Disponible</option>
                  <option selected value = "Vendu">Vendu</option>
                  <option value = "Loué">Loué</option>
                <?php } else { ?>
                  <option value = "Disponible">Disponible</option>
                  <option value = "Vendu">Vendu</option>
                  <option selected value = "Loué">Loué</option>
                <?php } ?>
              </select>
              <select class="form-control selectpicker" placeholder="Type Logement" name = "typelogement" id="typelogement" required="required">
                  <option disabled = "disabled">Type de logement</option>
                  <?php if($typelogement == "maison") { ?>
                  <option selected value = "maison">Maison</option>
                  <option value = "appartement">Appartement</option>
                  <option value = "bureaux">Bureaux de travail</option>
                <?php } else if($typelogement == "appartement") { ?>
                  <option value = "maison">Maison</option>
                  <option selected value = "appartement">Appartement</option>
                  <option value = "bureaux">Bureaux de travail</option>
                <?php } else { ?>
                  <option value = "maison">Maison</option>
                  <option value = "appartement">Appartement</option>
                  <option selected value = "bureaux">Bureaux de travail</option>
                <?php } ?>
              </select>
              <?php include 'InfoAppSupplementaireModif.php' ?>
              <button type="submit" class="btn btn-success" name="bModificationAnnonce" id="bModificationAnnonce">Modifier cette annonce</button>
        </div>
        </form>
        <br />
        <button type="submit" class="btn btn-success" name="bGalerieImages" id="bGalerieImage">Galerie Images</button>
        <!--<input value="creerAnnonceAjax" name="action" type="hidden" />-->

      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="assets/js/scriptHideInfosAnnonce.js"></script>
<script type="text/javascript" src="assets/js/ajaxAnnonces.js"></script>
<?php include 'footer.php';?>
