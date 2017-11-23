<?php include'header.php';?>



<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="index.php">Accueil</a></span>
    <h2>Profile <?php echo '<span style="color:green;"><strong>'.$_SESSION["connected"].'</strong></span>';?></h2>
  </div>
</div>

<div class="container">
  <div class="spacer">
    <div class="row register">
      <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
        <form role="form" method = "post">
          <div id="formProfile">
            <label><b>Utilisateur :</b></label><span style="color:red;"><?= $msg="";?></span>
            <input type="text" class="form-control" placeholder="Utilisateur" name="identifiant" id ="identifiant" value="<?= $_SESSION['id'] ?>" readonly >
            <label><b>Nom :</b></label><span></span>
            <input type="text" class="form-control" placeholder="Nom de famille"  name="nfamille" id="nfamille" value="<?= $_SESSION['nom'] ?>" required="required">
            <label><b>Prénom :</b></label><span></span>
            <input type="text" class="form-control" placeholder="prénom"  name="prenom" id="prenom" value="<?= $_SESSION['prenom'] ?>" required="required" >
            <label><b>Email :</b></label><span></span>
            <input type="text" class="form-control" placeholder="email" value="<?= $_SESSION['courriel'] ?>" name="courriel" id="courriel">
            <label><b>Adresse / Code postal :</b></label><span></span>
            <div class="form-inline">
              <input type="text" class="form-control" placeholder="Adresse" name="adresse" id="adresse" value="<?= $_SESSION['adresse'] ?>">
            </div>
            <label><b>Ville :</b></label>  
            <input type="text" class="form-control" placeholder="Ville" name="ville" id="ville" value="<?= $_SESSION['ville'] ?>">
            <label><b>Pays :</b></label>  
            <input type="text" class="form-control" placeholder="Pays" name="pays" id="pays" value="<?= $_SESSION['pays'] ?>">
            <label><b>Téléphone : <span style="color:gray">(optionel)</span></b></label>  
            <input type="Tel" class="form-control" placeholder="Téléphone" name = "telp" id="telp" value="<?= $_SESSION['telephone'] ?>" maxlength="10">
          </div>
          <button type="submit" class="btn btn-success" name="btnEnregistrer" >Enregistrer</button>
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
