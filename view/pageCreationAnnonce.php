<?php include'header.php';?>
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
                <input value="creerAnnonceAjax" type="hidden" />
                <input type="text" hidden name = "latitude" id="lat" value="" />
                <input type="text" hidden name = "longitude" id="long" value="" />
                <input type="text" class="form-control" placeholder="Identifiant" name="identifiant" id = "identifiant" value="<?=$_SESSION['connected']?>" readonly="readonly">
                <input type="text" class="form-control" placeholder="Nom" name="nom" id="nfamille" required="required">
                <input type="text" class="form-control" placeholder="Prénom" name="prenom" id="prenom"  required="required">
                <input type="text" class="form-control" placeholder="Adresse" name = "adresse" id="adresse" required="required">
                <input type="text" class="form-control" placeholder="Prix" name = "prix" id="prix" required="required">
                <select class="form-control" placeholder="Type Annonce" name = "typeannonce" id="typeannonce" required="required">
                  <option selected disabled = "disabled">Type d'annonce</option>
                  <option value = "location">Location</option>
                  <option value = "vente">Vente</option>
                <select>
                <select class="form-control" placeholder="Type Logement" name = "typelogement" id="typelogement" required="required">
                  <option selected disabled = "disabled">Type de logement</option>
                  <option value = "maison">Maison</option>
                  <option value = "appartement">Appartement</option>
                  <option value = "bureaux">Bureaux de travail</option>
                <select>
    </form>
    <button class="btn btn-success" name="bCreationAnnonce" id="bCreationAnnonce">Créer une annonce</button>
    <!--<button onclick="ajouterAnnonce()">Continuer</button>
    <button onclick="tester()">Tester</button>-->
    <?php
    /*if (ISSET($_SESSION["messageErreurCreationCompte"])){
      echo '<div class="alert alert-danger alert-dismissable" style="margin-top:15px">';
      echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
      echo '<p class="panel-body">Les informations renseignées sur le formulaire d\'inscription sont erronées! </p>';
            foreach ($_SESSION["messageErreurCreationCompte"] as $typeMessage => $message) {
              echo '<p class="panel-body">'.$message.'</p>';
            }
      echo 	'</div>';
      UNSET($_SESSION["messageErreurCreationCompte"]);
    }*/
    ?>
  </div>
</div>
</div>
</div>
<script src="assets/js/ajaxAnnonces.js"></script>
<?php include'footer.php';?>
