/* ======================================================================
 *	Afficher le formulaire supplémentaire pour la location d'appartement : fait par Yang
 * ====================================================================== */
$(function(){
	$("#infoLocation").hide();
	$("#infoLocationBur").hide();
  $("#infoLocationMaison").hide();

  $("#typelogement, #typeAnnonce, #infoLocationMaison").change(function() {
    if ( ($("#typeAnnonce").val() === "location") && ($("#typelogement").val() === "appartement" )) {
    	$("#infoLocationBur").hide();
      $("#infoLocationMaison").hide();
      $("#infoLocation").show();
    }
  	else if ( ($("#typeAnnonce").val() === "location") && ($("#typelogement").val() === "bureaux" )) {
    	$("#infoLocation").hide();
      $("#infoLocationMaison").hide();
    	$("#infoLocationBur").show();
  	}
    else if ( ($("#typeAnnonce").val() === "location") && ($("#typelogement").val() === "maison" )) {
      $("#infoLocation").hide();
      $("#infoLocationBur").hide();
      $("#infoLocationMaison").show();
    }
    else {
      $("#infoLocation").hide();
      $("#infoLocationBur").hide();
      $("#infoLocationMaison").hide();
    }
  });
});
$(function(){
	alert('Test')
});
