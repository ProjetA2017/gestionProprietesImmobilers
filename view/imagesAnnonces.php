<?php include 'header.php';
/*var_dump($_REQUEST['tabTest']);
var_dump($_REQUEST['typetraitement']);
var_dump($_REQUEST['tabTest2']);
var_dump($_SESSION['img']);*/
?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="?action=pageAccueil">Accueil</a> / Créer une annonce</span>
    <h2>Ajouter des images à l'annonce</h2>
</div>
</div>
<!-- banner -->


<div class="containerImage">
  <form action="" class="dropzone " id="my-dropzone">
    <!--<input name="action" value="uploaderImages" type="hidden" />
    <button name="btnConfirm">Confirmer </button>-->
  </form>
  <form role="form">
    <input value="afficherGalery" name="action" type="hidden" />
    <input type="hidden"  name="idannonce" id="idannonce" value="<?=$_SESSION['lannonceIMG']?>" />
    <button type="submit" class="btn btn-success" name="bGalerieImages" id="bGalerieImages">Galerie Photos</button>
  </form>
</div>

<script>
    function nonPhotos()
    {
        window.location.href ="response.php"
    }
</script>
<!-- TODO : pou la partie remove image : il faut la compléter -->
 <script>
        <!-- 3 -->
        Dropzone.options.myDropzone = {
            thumbnailWidth: 150,
            thumbnailHeight: 150,
            previewElement:'preview',
             addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.name;
                $.ajax({
                    type: 'POST',
                    url: 'delete.php',
                    data: "filename="+name,
                    dataType: 'html'
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        };
    </script>
<!-- Fin pou la partie remove image : il faut la compléter -->
<script src="assets/js/dropzone.js"></script>

<?php include 'footer.php';?>
