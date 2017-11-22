/* ======================================================================
 *  Afficher le barre de prix avec les deux boutons : fait par Yang
 * ====================================================================== */
var $j = $.noConflict();
$j( function() {
  $j( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 1200,
    values: [ 75, 300 ],
    slide: function( event, ui ) {
      $j( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      $j("#inputPrix").val(ui.values[0]);
      $j("#inputPrix2").val(ui.values[1]);
    }
  });
  $j( "#amount" ).val( "$" + $j( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $j( "#slider-range" ).slider( "values", 1 ) );
});


