<?php include'header.php';
/*var_dump($_REQUEST['lesAnnoncesFiltres']['nbrDeResultat']);
var_dump($_REQUEST['nbrDePages']);
var_dump($_REQUEST["numPage"]);
var_dump($_REQUEST['lesAnnoncesFiltres']['case']);
var_dump($_REQUEST['lesAnnoncesFiltres']['liste']);
var_dump($_SESSION['filtreAnnonces']);
var_dump($_REQUEST['min']);
var_dump($_REQUEST['max']);*/
?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><h4><a href="?action=pageAccueil">Accueil</a></h4> Maisons/Appartement/Bureaux</span>
    <h2>Propriétés disponibles</h2>
</div>
</div>
<!-- banner -->

<?php
  $prixMin = (ISSET($_SESSION['min']) ? $_SESSION['min'] : 0);
  $prixMax = (ISSET($_SESSION['max']) ? $_SESSION['max'] : 3000000);
  $typeannonce = (ISSET($_SESSION['filtreAnnonces']) ? $_SESSION['filtreAnnonces'] : 'toutes');
  $selectedTypeAnnonce = array();
  for($i=0;$i<=12;$i++)
  	$selectedTypeAnnonce[$i]='';
  if(/*isset($typeannonce) && */$typeannonce == "toutes") $selectedTypeAnnonce[0] = 'selected';
  if(/*isset($typeannonce) && */$typeannonce == "location") $selectedTypeAnnonce[1] = 'selected';
  if(/*isset($typeannonce) && */$typeannonce == "vente") $selectedTypeAnnonce[2] = 'selected';
?>
<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Recherche</h4>
    <input type="text" class="form-control" placeholder="Search of Properties">
<form role="form">
          <div class="row">
            <div class="col-lg-12">
              <select class="form-control" name = "typeannonce" id="typeannonce">
                <option value = "toutes" <?=$selectedTypeAnnonce[0]?>>Toutes les propriétés</option>
                <option value = "location" <?=$selectedTypeAnnonce[1]?>>Propriétés à louer</option>
                <option value = "vente" <?=$selectedTypeAnnonce[2]?>>Propriétés à vendre</option>
              </select>
            </div>
            <!--<div class="col-lg-7">
              <select class="form-control">
                <option>Prix</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>-->
          </div>
          <div class="row">
            <div class="col-lg-12 col-sm-12">
              <span><b>Min $</b></span>
              <span class="pull-right"><b>Max $</b></span>
              <div id="slider-range" ></div><br />
              <div class="row">
                <div class="col-lg-6">
                  <input  type="text" name = "prixMin" value="<?=$prixMin?>" id="prixMin" readonly="true" class="form-control" >
                </div>
                <div class="col-lg-6">
                  <input  type="text"name = "prixMax" value="<?=$prixMax?>"  id="prixMax" readonly="true" class="form-control" >
                </div>
              </div>
            </div>

          </div>
<input value="pageChercher" name="action" type="hidden" />
<button type="submit" class="btn btn-success" name="bCreationAnnonce" id="bCreationAnnonce">Filtrer</button>
</form>

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
    $nbrTotalAnnonces = $_REQUEST['lesAnnoncesFiltres']['nbrDeResultat'];
    //$listeDesAnnonces = $_SESSION['lesAnnoncesFiltres']['liste'];
    $nbrAffichage = ($_REQUEST['taillePage']  * $_REQUEST['numPage'] < $nbrTotalAnnonces ? $_REQUEST['taillePage']  * $_REQUEST['numPage'] : $nbrTotalAnnonces);
  ?>
<div class="pull-left result"><h4>Affichage : <?=$nbrAffichage?> de <?=$nbrTotalAnnonces?> </h4></div>

</div>
<div class="row">

     <!-- liste properties -->
     <?php foreach ($_REQUEST['lesAnnoncesFiltres']['liste'] as $row) {
        $tatus = ($row['status'] != 'Disponible' ? 'status new' : 'status sold');
        $prix = ($row['typeannonce']=='location'?'$ par mois':'$');
        if($row['status']=='Loué' || $row['status']=='vendu')
          $tooltipTxt = $row['status'].' depuis : '.$row['datetraitementannonce'];
        else
          $tooltipTxt = 'Annonce diffusée depuis : '.$row['dateannonce'];
        $prix = ($row['typeannonce']=='location'?'$ par mois':'$');
     ?>
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="upload/imagesAnnonces/<?=$row['imgannonce']?>" class="img-responsive" alt="properties">
          <div class='<?=$tatus?>'><?=$row['status']?></div>
        </div>
        <h4><a href="?action=pageDetails">Compagnie Propriétés</a></h4>
        <p class="price">Prix : <?=number_format($row['prix'])?> <?=$prix?></p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="<?=$row['typeannonce']?>">!</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="<?=$row['typelogement']?>">?</span>
                                    <span data-toggle="tooltip" data-placement="bottom" data-original-title="<?=$tooltipTxt?>">*</span> </div>
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
		      		<a href="?action=pageChercher&numPage=<?=($_REQUEST['numPage']>1 ? $_REQUEST['numPage']-1 : 1)?>&typeannonce=<?=$typeannonce?>">«</a>
		    		</li>
		    		<?php
		    				for ($i=1;$i<=$_REQUEST['nbrDePages'];$i++) {
		  	    				if ($i == $_REQUEST['numPage']) {
		  									echo "<li><a><b style='color:black;'>".$i."</b></a></li>";
		  	      			} else { ?>
		  									<li><a href="?action=pageChercher&numPage=<?=$i?>&typeannonce=<?=$typeannonce?>"><?=$i?></a></li>
		  	      			<?php }
		  	  			}
		    		?>
		    		<li>
		      		<a href="?action=pageChercher&numPage=<?=($_REQUEST["numPage"] < $_REQUEST['nbrDePages'] ? $_REQUEST["numPage"]+1 : $_REQUEST["numPage"])?>&typeannonce=<?=$typeannonce?>">»</a>
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

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!--><script type="text/javascript" src="assets/jquery-ui-1.12.1.custom/jquery-ui.js"></script>-->
<script type="text/javascript" src="assets/js/barrePrix.js"></script>
<?php include'footer.php';?>
