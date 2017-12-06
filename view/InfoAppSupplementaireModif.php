<?php
switch ($typelogement) {
	case 'appartement' :
		$nbrpieces = $_REQUEST['annonceAafficher']->nbrpieces;
		$position = $_REQUEST['annonceAafficher']->position;
		$animauxpermis = $_REQUEST['annonceAafficher']->animauxpermis;
	break;
	case 'bureaux' :
		$nbremployes = $_REQUEST['annonceAafficher']->nbremployes;
	break;
	case 'maison' :
		$nbrpieces = $_REQUEST['annonceAafficher']->nbrchambres;
	break;
}
$lesinclus = $_REQUEST['annonceAafficher']->inclus;
$infos = $_REQUEST['annonceAafficher']->infosupplementaire;
$selectedPosition = array();
$checked = array();
$permi = array();
$inclus = array();
$listeInclus = explode(" ", trim($lesinclus));
for($i=0;$i<=12;$i++){
	$selectedPosition[$i]='';
	$permi[$i]='';
	$checked[$i]='unchecked';
	$inclus[$i]='unchecked';
}
for($i=0;$i<count($listeInclus);$i++){
	if($listeInclus[$i] == 'meuble') {
		$inclus[0] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'electricite') {
		$inclus[1] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'chauffage') {
		$inclus[2] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'stationnement') {
		$inclus[3] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'wifi') {
		$inclus[4] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'imprimante') {
		$inclus[5] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'casiers') {
		$inclus[6] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'telephonie') {
		$inclus[7] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'restauration') {
		$inclus[8] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'service de courrier') {
		$inclus[9] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'Jardin') {
		$inclus[10] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'Piscine') {
		$inclus[11] = 'checked';
		continue;
	}
	if($listeInclus[$i] == 'Stationnement') {
		$inclus[12] = 'checked';
		continue;
	}
}

if(isset($position) && $position == "demi-sous-sol") $selectedPosition[0] = 'selected';
if(isset($position) && $position == "rez-de-chaussee") $selectedPosition[1] = 'selected';
if(isset($position) && $position == "niveau 1") $selectedPosition[2] = 'selected';
if(isset($position) && $position == "niveau 2") $selectedPosition[3] = 'selected';
if(isset($position) && $position == "niveau 2 et Plus") $selectedPosition[4] = 'selected';
if(!isset($position) || $position == NULL) $selectedPosition[5] = 'selected';

if(isset($nbrpieces) && $nbrpieces == "1" || isset($nbremployes) && $nbremployes == "50") $checked[0] = $inclus[$i];
if(isset($nbrpieces) && $nbrpieces == "2" || isset($nbremployes) && $nbremployes == "100") $checked[1] = 'checked';
if(isset($nbrpieces) && $nbrpieces == "3" || isset($nbremployes) && $nbremployes == "150") $checked[2] = 'checked';
if(isset($nbrpieces) && $nbrpieces == "4" || isset($nbremployes) && $nbremployes == "200") $checked[3] = 'checked';
if(isset($nbrpieces) && $nbrpieces == "5" || isset($nbremployes) && $nbremployes == "250 et Plus") $checked[4] = 'checked';
if(isset($nbrpieces) && $nbrpieces == "6 et plus") $checked[5] = 'checked';

if(!isset($animauxpermis) || $animauxpermis == NULL) $permi[0] = 'selected';
if(isset($animauxpermis) && $animauxpermis == "1") $permi[1] = 'selected';
if(isset($animauxpermis) && $animauxpermis == "0") $permi[2] = 'selected';
/*var_dump($selectedPosition);
var_dump($checked);
var_dump($permi);
var_dump($inclus);
var_dump($listeInclus);
var_dump(count($listeInclus));*/
?>
<div class="panel panel-success" id="infoLocation">
	<div class="panel-body" id="panelBody">
		<lable style="padding-left:10px;">Nombre de pièces</lable>
		<div id="radioInline">
			<label class="radio-inline"><input <?=$checked[0]?> type="radio" name="optNbrChambre" value="1"  checked = "unchecked" style="float:right;"><span class="lbChambre">1 1/2</span></label>
			<label class="radio-inline"><input <?=$checked[1]?> type="radio" name="optNbrChambre" value="2"  checked = "checked" style="float:right;"><span class="lbChambre">2 1/2</span></label>
			<label class="radio-inline"><input <?=$checked[2]?> type="radio" name="optNbrChambre" value="3"  style="float:right;"><span class="lbChambre">3 1/2</span></label>
			<label class="radio-inline"><input <?=$checked[3]?> type="radio" name="optNbrChambre" value="4"  style="float:right;"><span class="lbChambre">4 1/2</span></label>
			<label class="radio-inline"><input <?=$checked[4]?> type="radio" name="optNbrChambre" value="5"  style="float:right;"><span class="lbChambre">5 1/2</span></label>
			<label class="radio-inline"><input <?=$checked[5]?> type="radio" name="optNbrChambre" value="6+"  style="float:right;"><span class="lbChambre">6 1/2 et plus</span></label>
		</div>
		<div class="form-inline">
			<select class="form-control selectpicker" name = "position" id="etgApt">
	          	<option <?=$selectedPosition[5]?> disabled = "disabled">Position</option>
              	<option <?=$selectedPosition[0]?> value = "demi-sous-sol">demi-sous-sol</option>
              	<option <?=$selectedPosition[1]?> value = "rez-de-chaussee">rez-de-chaussée</option>
              	<option <?=$selectedPosition[2]?> value = "niveau 1">étage 1</option>
              	<option <?=$selectedPosition[3]?> value = "niveau 2">étage 2</option>
              	<option <?=$selectedPosition[4]?> value = "niveau 2 et Plus">étage 2+</option>
            </select>
        </div>
        <div class="form-inline">
        	<select class="form-control selectpicker" name = "animal" id="animal">
	          	<option <?=$permi[0]?> disabled = "disabled">Animaux permis</option>
              	<option <?=$permi[1]?>  value = "oui">Oui</option>
              	<option <?=$permi[2]?>  value = "non">Non</option>
            </select>
        </div>
        <lable style="padding-left:10px;">Inclus</lable>
        <div style="padding-left:30px;">
        	<table>
        		<tr>
        			<td>
        				<input type="checkbox" name="IncludeApt[]" value="meuble" <?=$inclus[0]?>>
     				</td>
     				<td>
     					<label style="margin-bottom:13px;">&nbsp;Meublé&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				<td>
        				<input type="checkbox" name="IncludeApt[]" value="electricite" <?=$inclus[1]?>>
     				</td>
     				<td>
     					<label style="margin-bottom:13px;">&nbsp;Électricité&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				<td>
        				<input type="checkbox" name="IncludeApt[]" value="chauffage" <?=$inclus[2]?>>
     				</td>
     				<td>
     					<label style="margin-bottom:13px;">&nbsp;Chauffage&nbsp;&nbsp;&nbsp;</label>
     				</td>
						<td>
        				<input type="checkbox" name="IncludeApt[]" value="stationnement" <?=$inclus[3]?>>
     				</td>
						<td>
     					<label style="margin-bottom:13px;">&nbsp;Stationnement&nbsp;&nbsp;&nbsp;</label>
     				</td>
     			</tr>
     		</table>
    	</div>
    	<div class="form-group" style="padding-left:10px;">
  			<label>Autre information:</label>
  			<textarea class="form-control" rows="8" name="infoAutreApt" id="infoSupl"><?=$infos?></textarea>
		</div>
	</div>
</div>



<div class="panel panel-success" id="infoLocationBur" 'style="display:none;"'>
	<div class="panel-body" id="panelBody">
		<lable style="padding-left:10px;">Nombre d'employés</lable>
		<div id="radioInline">
			<label class="radio-inline"><input <?=$checked[0]?> type="radio" name="nbrEmp" value="50"  style="float:right;">50</label>
			<label class="radio-inline"><input <?=$checked[1]?> type="radio" name="nbrEmp" value="100"  style="float:right;">100</label>
			<label class="radio-inline"><input <?=$checked[2]?> type="radio" name="nbrEmp" value="150"  style="float:right;">150</label>
			<label class="radio-inline"><input <?=$checked[3]?> type="radio" name="nbrEmp" value="200"  style="float:right;">200</label>
			<label class="radio-inline"><input <?=$checked[4]?> type="radio" name="nbrEmp" value="250+"  style="float:right;">200 et plus</label>

		</div>

        <lable style="padding-left:10px;">Inclus</lable>
        <div style="padding-left:30px;">
        	<table>
        		<tr>
        			<td>
        				<input type="checkbox" name="includeBur[]" id="includeBur" value="wifi" <?=$inclus[4]?>>
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-signal" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				<td>
        				<input type="checkbox" name="includeBur[]" id="includeBur" value="imprimante" <?=$inclus[5]?>>
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-print" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				<td>
        				<input type="checkbox" name="includeBur[]" id="includeBur" value="casiers" <?=$inclus[6]?>>
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-paperclip" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				<td>
        				<input type="checkbox" name="includeBur[]" id="includeBur" value="telephonie" <?=$inclus[7]?>>
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-earphone" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				</td>
     				<td>
        				<input type="checkbox" name="includeBur[]" id="includeBur" value="restauration" <?=$inclus[8]?>>
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-cutlery" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>

     				<td>
        				<input type="checkbox" name="includeBur[]" id="includeBur" value="service de courrier" <?=$inclus[9]?>>
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-envelope" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>

     			</tr>
     		</table>
    	</div>
    	<div class="form-group" style="padding-left:10px;">
  			<label>Autre information:</label>
  			<textarea class="form-control" rows="8" name = "infoAutreBur" id="infoAutreBur"><?=$infos?></textarea>
		</div>
	</div>
</div>

<div class="panel panel-success" id="infoLocationMaison">
	<!--div class="panel-heading" style="padding:0px 0px;">
		<h3 style="text-align:center;">Info plus</h3>
	</div-->
	<div class="panel-body" id="panelBody">
		<lable style="padding-left:10px;">Nombre de chambres</lable>
		<div id="radioInline">
			<label class="radio-inline"><input <?=$checked[1]?> type="radio" name="nbrCh" value="2"  style="float:right;">2</label>
			<label class="radio-inline"><input <?=$checked[2]?> type="radio" name="nbrCh" value="3"  style="float:right;">3</label>
			<label class="radio-inline"><input <?=$checked[3]?> type="radio" name="nbrCh" value="4"  style="float:right;">4</label>
			<label class="radio-inline"><input <?=$checked[4]?> type="radio" name="nbrCh" value="5"  style="float:right;">5</label>
			<label class="radio-inline"><input <?=$checked[5]?> type="radio" name="nbrCh" value="6+"  style="float:right;">6 et plus</label>

		</div>

        <lable style="padding-left:10px;">Include</lable>
        <div style="padding-left:30px;">
        	<table>
        		<tr>
        			<td>
        				<input type="checkbox" name="includeMaison[]" value="Jardin" <?=$inclus[10]?>>
     				</td>
     				<td>
     					<label style="margin-bottom:13px;">&nbsp; Jardin &nbsp;&nbsp;</label>
     				</td>
                    <td>
                        <input type="checkbox" name="includeMaison[]" value="Piscine" <?=$inclus[11]?>>
                    </td>
                    <td>
                        <label style="margin-bottom:13px;">&nbsp; Piscine &nbsp;&nbsp;</label>
                    </td>
     				<td>
        				<input type="checkbox" name="includeMaison[]" value="Stationnement" <?=$inclus[12]?>>
     				</td>
     				<td>
     					<label style="margin-bottom:13px;">&nbsp; Stationnement &nbsp;&nbsp;</label>
     				</td>
     			</tr>
     		</table>
    	</div>
    	<div class="form-group" style="padding-left:10px;">
  			<label>Autre information:</label>
  			<textarea class="form-control" rows="8" name="infoAutreMaison"  id="infoAutreMaison"><?=$infos?></textarea>
		</div>
	</div>
</div>
