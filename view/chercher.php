<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><h4><a href="index.php">Maisons/Appartement/Bureaux</a></h4> Vente ou Location</span>
    <h2>Propriétés disponibles</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Recherche</h4>
    <input type="text" class="form-control" placeholder="Search of Properties">
    <div class="row">
            <div class="col-lg-5">
              <select class="form-control" name = "typeannonce">
                <option selected="selected" disbaled="disabled">Pour : </option>
                <option>location</option>
                <option>vente</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control">
                <option>Prix</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <select class="form-control">
                <option selected="selected" disbaled="disabled">Type</option>
                <option>Apartements</option>
                <option>Espaces de bureaux</option>
                <option>Maisons</option>
              </select>
              </div>
          </div>
          <button class="btn btn-primary">Filtrer</button>
  </div>


<div class="hot-properties hidden-xs">
<h4>Recherche récente</h4>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="?action=pageDetails">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="?action=pageDetails">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="?action=pageDetails">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="?action=pageDetails">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>

</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
  <?php
    $nbrTotalAnnonces = $_SESSION['lesAnnoncesFiltres']['nbrDeResultat'];
    $nbrAffichage = (5 * $_REQUEST['numPage'] < $nbrTotalAnnonces ? 5 * $_REQUEST['numPage'] : $nbrTotalAnnonces)
  ?>
<div class="pull-left result">Affichage : <?=$nbrAffichage?> de <?=$nbrTotalAnnonces?> </div>
  <div class="pull-right">
  <select class="form-control">
  <option>Trié par</option>
  <option>Prix : Ascendant</option>
  <option>Prix : Descendant</option>
</select></div>

</div>
<div class="row">

     <!-- liste properties -->
     <?php foreach ($_SESSION['lesAnnoncesFiltres']['liste'] as $row) {
        $tatus = ($row['status']=='Disponble'?'status new':'status sold');
        $prix = ($row['typeannonce']=='location'?'$ par mois':'$');
     ?>
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="upload/imagesAnnonces/<?=$row['imgannonce']?>" class="img-responsive" alt="properties">
          <div class="<?=$tatus?>"><?=$row['status']?></div>
        </div>
        <h4><a href="?action=pageDetails">Compagnie Propriétés</a></h4>
        <p class="price">Prix : <?=number_format($row['prix'])?> <?=$prix?></p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="<?=$row['typeannonce']?>">!</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="<?=$row['typelogement']?>">?</span>
                                    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Diffusée depuis : <?=$row['dateannonce']?>">*</span> </div>
        <a class="btn btn-primary" href="?action=pageDetails&idannonce=<?=$row['idannonce']?>">Voir les détails</a>
      </div>
      </div>
      <?php } ?>
    <!-- liste properties -->
</div>
<!-- pagination -->
<!-- pagination initiale
<div class="center">
        <ul class="pagination">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
</div>
<!- - pagination initiale-->
<div class="row">
<?php if ($_REQUEST['nbrDePages'] > 1) { ?>
    <div class="center">
		  		<ul class="pagination">
		    		<li>
		      		<a href="?action=pageChercher&numPage=<?=($_REQUEST['numPage']>1 ? $_REQUEST['numPage']-1 : 1)?>">«</a>
		    		</li>
		    		<?php
		    				for ($i=1;$i<=$_REQUEST['nbrDePages'];$i++) {
		  	    				if ($i == $_REQUEST['numPage']) {
		  									echo "<li><a><b style='color:black;'>".$i."</b></a></li>";
		  	      			} else {
		  									echo "<li><a href=\"./?action=pageChercher&numPage=".$i."\">".$i."</a></li>";
		  	      			}
		  	  			}
		    		?>
		    		<li>
		      		<a href="?action=pageChercher&numPage=<?=($_REQUEST["numPage"] < $_REQUEST['nbrDePages'] ? $_REQUEST["numPage"]+1 : $_REQUEST["numPage"])?>">»</a>
		    		</li>
		  		</ul>
		</div>
<?php } ?>
<!-- pagination -->

</div>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>
