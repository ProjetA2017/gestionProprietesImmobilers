<?php include 'header.php';
//var_dump($_REQUEST['annoncesDuMembre']);
?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="?action=pageAccueil">Accueil</a> / Mon espace</span>
    <h2>Mes annonces</h2>
</div>
</div>
<!-- banner -->

<div class="container">
<div class="spacer agents">

<div class="row">
  <div class="col-lg-8  col-lg-offset-2 col-sm-12">

      <?php if(count($_REQUEST['annoncesDuMembre']) == 0) {?>
        <h3>Vous n'avez publié aucune annonce<br /><br />
        <span class="glyphicon glyphicon-plus"></span><a href="?action=formulaireAnnonce"> Publier une annonce</a></h3>
      <?php } else {
        foreach ($_REQUEST['annoncesDuMembre'] as $row) {
          $typelogement = ucfirst($row['typelogement']);
          $typeannonce = ($row['typeannonce'] == 'location' ? 'À louer' : 'À vendre');
          $prix = ($row['typeannonce'] == 'location' ? '$ par mois'  : '$');
      ?>
        <div class="row">
          <div class="col-lg-2 col-sm-2 "><a href="?action=pageDetails&idannonce=<?=$row['idannonce']?>"><img src="upload/imagesAnnonces/<?=$row['imgannonce']?>" class="img-responsive"  alt="image d'annonce"></a></div>
          <div class="col-lg-7 col-sm-7 ">
            <h4><?=$row['adresse']?></h4>
            <p><b><?=$typelogement?><br />
            <?=$typeannonce?><br />
            <?=number_format($row['prix'])?> <?=$prix?><br />
            Status :  <?=$row['status']?><br />
            Publiée le :  <?=$row['dateannonce']?></b></p>
          </div>
          <div class="col-lg-3 col-sm-3 ">
            <span class="glyphicon glyphicon-remove"></span> <a href="?action=supprimerAnnonce&annonceASupprimer=<?=$row['idannonce']?>">Supprimer cette annonce</a><br>
            <span class="glyphicon glyphicon-check"></span> <a href="?action=formulairModifierAnnonce&idannonce=<?=$row['idannonce']?>">Modifier cette annonce</a><br>
        </div>
      </div>
      <?php }} ?>
  </div>
</div>


</div>
</div>

<?php include'footer.php';?>
