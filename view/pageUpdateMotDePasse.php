<?php include'header.php';?>



<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="index.php">Accueil</a></span>
    <h2>Modifier Mot de Passe <?php echo '<span style="color:green;"><strong>'.$_SESSION["connected"].'</strong></span>';?></h2>
  </div>
</div>

<div class="container">
  <div class="spacer">
    <div class="row register">
      <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
        <form role="form" method = "post">
          <div id="formModifierMotDePasse">
            <label><b>Mot de passe actuel :</b></label><span style="color:red;"><?php if(ISSET( $_SESSION['msgError']['oldMdp'])) echo $_SESSION['msgError']['oldMdp']?></span>
            <input type="text" class="form-control" placeholder="Mot de passe actuel"  name="oldMdp" id="oldMdp" required="required">
            <label><b>Mot de passe nouveau :</b></label><span style="color:red;"><?php if(ISSET( $_SESSION['msgError']['mdpNonIdentique'])) echo $_SESSION['msgError']['mdpNonIdentique']?></span>
            <input type="text" class="form-control" placeholder="Mot de passe nouveau"  name="mdpNouv" id="mdpNouv" required="required" >
            <label><b>Mot de passe nouveau confirmer :</b></label><span></span>
            <input type="text" class="form-control" placeholder="Mot de passe nouveau confirmer" name="mdpNouvConf" id="mdpNouvConf" required="required">
          </div>
          <button type="submit" class="btn btn-success" name="btnEnregistrerMdp" >Enregistrer</button>
        </form>
        
      </div>
    </div>
  </div>
</div>



<script type="text/javascript" src="scriptYang/scriptYang1.js"></script>
<script src="assets/js/ajaxAnnonces.js"></script>
<?php include'footer.php';?>
