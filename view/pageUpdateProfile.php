<?php include_once 'header.php';
?>

<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="?action=pageAccueil">Accueil</a></span>
    <h2>Profile <?php echo '<span style="color:green;"><strong>'.$_SESSION["membre"]->getIdentifiant().'</strong></span>';?></h2>
  </div>
</div>


<div class="container">
  <div class="spacer">
    <div class="row register">
      <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
        <?php if (ISSET($_SESSION["messagesFormProfilError"])) { ?>
          <div class="alert alert-danger alert-dismissable" style="margin-top:15px">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
          <p class="panel-body">Les informations renseignées sont erronées! </p>
                <?php foreach ($_SESSION["messagesFormProfilError"] as $typeMessage => $message) { ?>
                    <p class="panel-body"><?=$message?></p>
                <?php } ?>
          </div>
        <?php UNSET($_SESSION["messageErreurCreationCompte"]); } ?>

        <?php if (ISSET($_SESSION["messagesFormProfilSucces"])) { ?>
        			<div class="alert alert-success alert-dismissable">
        				<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        				<?php foreach ($_SESSION["messagesFormProfilSucces"] as $typeMessage => $message) { ?>
        						<p class="panel-body"><?=$message?></p>
        				<?php } ?>
        			</div>
        <?php UNSET($_SESSION["messagesFormProfilSucces"]); } ?>
        <form role="form" method = "post">
          <div id="formProfile">
            <label><b>Utilisateur :</b></label><span style="color:red;"><?= $msg="";?></span>
            <input type="text" class="form-control" placeholder="Utilisateur" name="identifiant" id ="identifiant" value="<?= $_SESSION["membre"]->getIdentifiant() ?>" readonly >
            <label><b>Nom :</b></label><span></span>
            <input type="text" class="form-control" placeholder="Nom de famille"  name="nfamille" id="nfamille" value="<?= $_SESSION["membre"]->getNom() ?>" required="required">
            <label><b>Prénom :</b></label><span></span>
            <input type="text" class="form-control" placeholder="prénom"  name="prenom" id="prenom" value="<?= $_SESSION["membre"]->getPrenom()?>" required="required" >
            <label><b>Email :</b></label><span></span>
            <input type="text" class="form-control" placeholder="email" value="<?= $_SESSION["membre"]->getCourriel() ?>" name="courriel" id="courriel" required="required">
            <label><b>Adresse / Code postal :</b></label><span></span>
            <div class="form-inline">
              <input type="text" class="form-control" placeholder="Adresse" name="adresse" id="adresse" value="<?= $_SESSION["membre"]->getAdresse() ?>" required="required">
            </div>
            <label><b>Ville :</b></label>
            <input type="text" class="form-control" placeholder="Ville" name="ville" id="ville" value="<?= $_SESSION["membre"]->getVille() ?>" required="required">
            <label><b>Pays :</b></label>
            <input type="text" class="form-control" placeholder="Pays" name="pays" id="pays" value="<?= $_SESSION["membre"]->getPays() ?>" required="required">
            <label><b>Téléphone : <span style="color:gray">(optionel)</span></b></label>
            <input type="Tel" class="form-control" placeholder="Téléphone" name = "telp" id="telp" value="<?= $_SESSION["membre"]->getTelephone() ?>" maxlength="10">
          </div>
          <button type="submit" class="btn btn-success" name="bModifierProfile" >Enregistrer</button>
        </form>

      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $('#telp').keyup(function () {
    this.value = this.value.replace(/[^0-9\.]/g,'');
  });
})
</script>

<script type="text/javascript" src="scriptYang/scriptYang1.js"></script>
<script src="assets/js/ajaxAnnonces.js"></script>
<?php include'footer.php';?>
