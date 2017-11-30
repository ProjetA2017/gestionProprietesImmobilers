<?php include 'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="index.php">Accueil</a> / Créer une annonce</span>
    <h2>Créer une annonce</h2>
</div>
</div>
<!-- banner -->

<div class="container">
  <div class="spacer">
    <div class="row register">
      <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
        <form role="form">
          <div>
              <input value="creerAnnonce" name="action" type="hidden" />
              <input type="hidden"  name="latitude" id="lat" value="" />
              <input type="hidden"  name="longitude" id="long" value="" />
              <input type="text" class="form-control" placeholder="Identifiant" name="identifiant" id="identifiant" value="<?=$_SESSION['membre']->getIdentifiant()?>" readonly="readonly">
              <input type="text" class="form-control" placeholder="Nom" name="nom" value="<?=$_SESSION['membre']->getNom()?>" id="nfamille" readonly="readonly">
              <input type="text" class="form-control" placeholder="Prénom" name="prenom" value="<?=$_SESSION['membre']->getPrenom()?>" id="prenom"  readonly="readonly">
              <input type="text" class="form-control" placeholder="Adresse" name="adresse" id="adresse" required="required">
              <input type="text" class="form-control" placeholder="Prix" name="prix" id="prix" required="required">
              <select class="form-control" placeholder="Type Annonce" name = "typeAnnonce" id="typeAnnonce" required="required">
                <option selected disabled = "disabled">Type d'annonce</option>
                <option value = "location">Location</option>
                <option value = "vente">Vente</option>
              </select>
              <select class="form-control selectpicker" placeholder="Type Logement" name = "typelogement" id="typelogement" required="required">
                  <option selected disabled = "disabled">Type de logement</option>
                  <option value = "maison">Maison</option>
                  <option value = "appartement">Appartement</option>
                  <option value = "bureaux">Bureaux de travail</option>
              </select>
              <?php include 'infoAppSupplementaire.php' ?>
              <button type="submit" class="btn btn-success" name="bCreationAnnonce" id="bCreationAnnonce">Créer une annonce</button>
        </div>
        </form>
        <!--<input value="creerAnnonceAjax" name="action" type="hidden" />-->

      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="assets/js/scriptHideInfosAnnonce.js"></script>
<script type="text/javascript" src="assets/js/ajaxAnnonces.js"></script>
<?php include 'footer.php';?>
