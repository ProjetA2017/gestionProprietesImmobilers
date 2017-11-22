<div class="panel panel-success" id="infoLocation">
	<div class="panel-body" id="panelBody">
		<lable style="padding-left:10px;">Nombre de pièces</lable>
		<div id="radioInline">
			<label class="radio-inline"><input type="radio" name="optNbrChambre" value="1"  style="float:right;"><span class="lbChambre">1 1/2</span></label>
			<label class="radio-inline"><input type="radio" name="optNbrChambre" value="2"  style="float:right;"><span class="lbChambre">2 1/2</span></label>
			<label class="radio-inline"><input type="radio" name="optNbrChambre" value="3"  style="float:right;"><span class="lbChambre">3 1/2</span></label>
			<label class="radio-inline"><input type="radio" name="optNbrChambre" value="4"  style="float:right;"><span class="lbChambre">4 1/2</span></label>
			<label class="radio-inline"><input type="radio" name="optNbrChambre" value="5"  style="float:right;"><span class="lbChambre">5 1/2</span></label>
			<label class="radio-inline"><input type="radio" name="optNbrChambre" value="6 et plus"  style="float:right;"><span class="lbChambre">6 1/2 ou plus</span></label>
		</div>
		<div class="form-inline">
			<select class="form-control selectpicker" name = "position" id="etgApt">
	          	<option selected="selected" disabled = "disabled">Position</option>
              	<option value = "demi-sous-sol">demi-sous-sol</option>
              	<option value = "rez-de-chaussee">rez-de-chaussée</option>
              	<option value = "niveau 1">étage 1</option>
              	<option value = "niveau 2">étage 2</option>
              	<option value = "niveau 2 et Plus">étage 2+</option>
            </select>
        </div>
        <div class="form-inline">
        	<select class="form-control selectpicker" name = "animal" id="animal">
	          	<option selected="selected" disabled = "disabled">Animaux permis</option>
              	<option value = "oui">Oui</option>
              	<option value = "non">Non</option>
            </select>
        </div>
        <lable style="padding-left:10px;">Inclus</lable>
        <div style="padding-left:30px;">
        	<table>
        		<tr>
        			<td>
        				<input type="checkbox" name="IncludeApt[]" value="meuble">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;">&nbsp;Meublé&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				<td>
        				<input type="checkbox" name="IncludeApt[]" value="electricite">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;">&nbsp;Électricité&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				<td>
        				<input type="checkbox" name="IncludeApt[]" value="chauffage">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;">&nbsp;Chauffage&nbsp;&nbsp;&nbsp;</label>
     				</td>
						<td>
        				<input type="checkbox" name="IncludeApt[]" value="stationnement">
     				</td>
						<td>
     					<label style="margin-bottom:13px;">&nbsp;Stationnement&nbsp;&nbsp;&nbsp;</label>
     				</td>
     			</tr>
     		</table>
    	</div>
    	<div class="form-group" style="padding-left:10px;">
  			<label>Autre information:</label>
  			<textarea class="form-control" rows="8" name="infoAutreApt" id="infoSupl"></textarea>
		</div>
	</div>
</div>



<div class="panel panel-success" id="infoLocationBur" 'style="display:none;"'>
	<div class="panel-body" id="panelBody">
		<lable style="padding-left:10px;">Nombre d'employés</lable>
		<div id="radioInline">
			<label class="radio-inline"><input type="radio" name="nbrEmp" value="50"  style="float:right;">50</label>
			<label class="radio-inline"><input type="radio" name="nbrEmp" value="100"  style="float:right;">100</label>
			<label class="radio-inline"><input type="radio" name="nbrEmp" value="150"  style="float:right;">150</label>
			<label class="radio-inline"><input type="radio" name="nbrEmp" value="200"  style="float:right;">200</label>
			<label class="radio-inline"><input type="radio" name="nbrEmp" value="250 et plus"  style="float:right;">200+</label>

		</div>

        <lable style="padding-left:10px;">Inclus</lable>
        <div style="padding-left:30px;">
        	<table>
        		<tr>
        			<td>
        				<input type="checkbox" name="includeBur" id="includeBur" value="includeBurSign">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-signal" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				<td>
        				<input type="checkbox" name="includeBur" id="includeBur" value="includeBurPrint">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-print" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				<td>
        				<input type="checkbox" name="includeBur" id="includeBur" value="includeBurLock">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-lock" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				<td>
        				<input type="checkbox" name="includeBur" id="includeBur" value="includeBurClip">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-paperclip" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				<td>
        				<input type="checkbox" name="includeBur" id="includeBur" value="includeBurPhone">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-earphone" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>
     				</td>
     				<td>
        				<input type="checkbox" name="includeBur" id="includeBur" value="includeBurCutlery">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-cutlery" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>

     				<td>
        				<input type="checkbox" name="includeBur" id="includeBur" value="includeBurEnvelope">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;"><span class="glyphicon glyphicon-envelope" style="font-size:1.5em;"></span>&nbsp;&nbsp;&nbsp;</label>
     				</td>

     			</tr>
     		</table>
    	</div>
    	<div class="form-group" style="padding-left:10px;">
  			<label>Autre information:</label>
  			<textarea class="form-control" rows="8" id="infoAutreBur"></textarea>
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
			<label class="radio-inline"><input type="radio" name="nbrCh" value="2"  style="float:right;">2</label>
			<label class="radio-inline"><input type="radio" name="nbrCh" value="3"  style="float:right;">3</label>
			<label class="radio-inline"><input type="radio" name="nbrCh" value="4"  style="float:right;">4</label>
			<label class="radio-inline"><input type="radio" name="nbrCh" value="5"  style="float:right;">5</label>
			<label class="radio-inline"><input type="radio" name="nbrCh" value="6 et plus"  style="float:right;">6 ou 6+</label>

		</div>

        <lable style="padding-left:10px;">Include</lable>
        <div style="padding-left:30px;">
        	<table>
        		<tr>
        			<td>
        				<input type="checkbox" name="includeMaison[]" value="Jardin">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;">&nbsp; Jardin &nbsp;&nbsp;</label>
     				</td>
                    <td>
                        <input type="checkbox" name="includeMaison[]" value="Piscine">
                    </td>
                    <td>
                        <label style="margin-bottom:13px;">&nbsp; Piscine &nbsp;&nbsp;</label>
                    </td>
     				<td>
        				<input type="checkbox" name="includeMaison[]" value="Stationnement">
     				</td>
     				<td>
     					<label style="margin-bottom:13px;">&nbsp; Stationnement &nbsp;&nbsp;</label>
     				</td>
     			</tr>
     		</table>
    	</div>
    	<div class="form-group" style="padding-left:10px;">
  			<label>Autre information:</label>
  			<textarea class="form-control" rows="8" name="infoAutreMaison"  id="infoAutreMaison"></textarea>
		</div>
	</div>
</div>
