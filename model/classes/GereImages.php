<?php
require_once 'model/classes/Image.class.php';
require_once 'model/dao/ImagesDAO.php';
require_once 'model/classes/Annonce.class.php';
require_once 'model/dao/AnnonceDAO.php';
require_once 'model/classes/Services.class.php';

class GereImages {

  public static function afficherGalerie() {
      if (!ISSET($_SESSION)) session_start();
      //$idannonce=$_REQUEST['idannonce'];
      $daoImg = new ImagesDAO();
      $_REQUEST['galeryAnnonce'] = $daoImg->findGalerieUneAnnonce($_REQUEST['idannonce']);
      $_REQUEST['idannonce'] = $_REQUEST['idannonce'];
    }

    public static function supprimerImage() {
      if (!ISSET($_SESSION)) session_start();
      if (ISSET($_REQUEST["idimage"]))
      {
    			$daoImg = new ImagesDAO();
    			$idimage = $_REQUEST["idimage"];
    			$daoImg->deleteImage($idimage);
      }
    }

  public static function uploaderImages() {
      if (!ISSET($_SESSION)) {
        session_start();
      }

      $check = getimagesize($_FILES["file"]["tmp_name"]);//test ok
      if($check !== false) {
        $_SESSION["messagesUploadImgError"]['vide'] = "File is an image - " . $check["mime"] . ".";
      } else {
        $_SESSION["messagesUploadImgError"]['vide'] = "File is not an image.";
        return FALSE;
      }

      $continuer = TRUE;
      $tailleMax = 2097152;//2Mo //à l'origine : 10485760;//=10Mo
      $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');//test ok
      if (!ISSET($_FILES['file']) || $_FILES['file']["name"]=="") {
          $_SESSION["messagesUploadImgError"]['vide'] = "Aucune selection n'a été faite!";
          return FALSE;
      }

      if($_FILES['file']["size"] > $tailleMax){ //ok
          $_SESSION["messagesUploadImgError"]['taille'] = "Taille maximum permise : 2 Mo";
          return FALSE;
      }

      //test ok
      $lesExtImg = strtolower(substr(strrchr($_FILES['file']['name'],'.'),1));
      if(!in_array($lesExtImg,$extensionsValides)){
          $_SESSION["messagesUploadImgError"]['extention'] = "Extension invlalide! Cahrger une image de type :  'jpg', 'jpeg', 'gif' ou 'png'";
          return FALSE;
      }

      $dao = new AnnonceDAO();
      $daoImg = new ImagesDAO();
      $idannonce = $_SESSION['lannonceIMG'];//NB:ok avec session et non request, mais unset session après
      //$idannonce = $dao->findLastAnnonce(); //NB : Si l'on vient de créer une annonce ne fonctionnera pas pour les autres
      $chemin = "upload/imagesAnnonces/";
      $filename=$_FILES['file']['name'];
      $idImage = $idannonce."_".$filename;
      $path = $chemin.$idImage;

      if ((copy($_FILES["file"]["tmp_name"],$path))) {
          unlink($_FILES['file']['tmp_name']);
          $continuer = TRUE;
      } else {
            $_SESSION["messagesUploadImgError"]['unkown'] = "Problème non identifié : chargement d'image non réussi";
            $filename = "default.jpg";
            $continuer = FALSE;
      }

      if (!Services::redimensionnerImage(1000, 644, '', '', "upload/imagesAnnonces/", $idImage)){
            $idImage = $idannonce."_default.jpg";
            $path = $chemin.$idImage;
      }

      if ($continuer){
          $annonce = $dao->findAnnonce($idannonce);
          //$_SESSION['lannonce'] = $annonce->getImgAnnonce();
          //if($annonce->getImgAnnonce() == NULL) {
          if($annonce->getImgAnnonce() == 'default.jpg') {
            $dao->ajouterImageAnnonce($idannonce, $idImage);
          }
          $image = $daoImg->findImage($idannonce);
          if($image != NULL) {
            $daoImg->supprimerImage($idannonce);
          }
          $daoImg->uploaderImagesAnnonce($idImage, $idannonce,$filename,$path);
          //$dao->uploaderImagesAnnonce($idannonce);//test
          UNSET($_SESSION["messagesUploadImgError"]);
          $_SESSION["messagesUploadImgeSucces"]['uploadReussi'] = "Image ajoutée à l'annonce!";
      }
      return $continuer;
    }
}
