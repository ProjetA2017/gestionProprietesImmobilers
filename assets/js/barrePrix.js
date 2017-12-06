/* ======================================================================
 *  Afficher le barre de prix avec les deux boutons : fait par Yang
 * ====================================================================== */
var $j = $.noConflict();

$(document).ready(function(){
  var maximum = parseFloat(document.getElementById("prixMax").value);
  //alert(maximum);//test
  var minimum = parseFloat(document.getElementById("prixMin").value);
  //alert(minimum);//test
  $j( "#slider-range" ).slider({
    range: true,
    min: minimum,
    max: maximum,
    values: [ minimum, maximum ],
    slide: function( event, ui ) {
      //$j( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      $j("#prixMin").val(ui.values[0]);
      $j("#prixMax").val(ui.values[1]);
    }
  });
  $j( "#prixMin" ).val($j( "#slider-range" ).slider( "values", 0 ));
  $j( "#prixMax" ).val($j( "#slider-range" ).slider( "values", 1 ));
  /*$j( "#amount" ).val( "$" + $j( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $j( "#slider-range" ).slider( "values", 1 ) );*/
});

$('#typeannonce').change(function(){
  var type = document.getElementById("typeannonce").value;
  var maximum =  (type==='location'?20000:3000000);
  $j( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: maximum,
    values: [ 0, maximum ],
    slide: function( event, ui ) {
      $j("#prixMin").val(ui.values[0]);
      $j("#prixMax").val(ui.values[1]);
    }
  });
  $j( "#prixMin" ).val($j( "#slider-range" ).slider( "values", 0 ));
  $j( "#prixMax" ).val($j( "#slider-range" ).slider( "values", 1 ));
});
