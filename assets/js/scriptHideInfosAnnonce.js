/* ======================================================================
 *	Afficher le formulaire supplémentaire pour la location d'appartement : fait par Yang
 * ====================================================================== */
$(function(){
	$("#infoLocation").hide();
	$("#infoLocationBur").hide();
  $("#infoLocationMaison").hide();

  $("#typelogement, #typeAnnonce, #infoLocationMaison").change(function() {
    if ($("#typelogement").val() === "appartement" ) {
    	$("#infoLocationBur").hide();
      $("#infoLocationMaison").hide();
      $("#infoLocation").show();
    }
  	else if ( $("#typelogement").val() === "bureaux" ) {
    	$("#infoLocation").hide();
      $("#infoLocationMaison").hide();
    	$("#infoLocationBur").show();
  	}
    else if ($("#typelogement").val() === "maison" ) {
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
