<?php
require_once 'model/classes/Image.class.php';
require_once 'model/dao/ImagesDAO.php';
require_once 'model/classes/Annonce.class.php';
require_once 'model/dao/AnnonceDAO.php';
//require_once 'model/classes/Services.class.php';

class GereImages {
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
        $_SESSION["messagesUploadImgError"]['taille'] = "Taille maximum permise : 10 Mo";
        return FALSE;
    }

    //test ok
    $lesExtImg = strtolower(substr(strrchr($_FILES['file']['name'],'.'),1));
    if(!in_array($lesExtImg,$extensionsValides)){
        $_SESSION["messagesUploadImgError"]['extention'] = "Extension invlalide! Cahrger une image de type :  'jpg', 'jpeg', 'gif' ou 'png'";
        return FALSE;
    }

    //************************************************************************************** pour le resize : non fonctionnel
      /*if (!empty($_FILES['file']["tmp_name"]) || $_FILES['file']['size'] <= 2097152)
      $ImageNews  = $_FILES['file']['tmp_name'];
      else {
        $_SESSION["messagesUploadImgError"]['taille'] = "Problème de taille.'";
      return FALSE;
      }

    $ListeExtension = array('jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif');
    $ListeExtensionIE = array('jpg' => 'image/pjpg', 'jpeg'=>'image/pjpeg');

    $ExtensionPresumee = explode('.', $ImageNews);
    $ExtensionPresumee = strtolower($ExtensionPresumee[count($ExtensionPresumee)-1]);
    if (!($ExtensionPresumee == 'jpg' || $ExtensionPresumee == 'jpeg' || $ExtensionPresumee == 'pjpg'
                                    || $ExtensionPresumee == 'pjpeg' || $ExtensionPresumee == 'gif'
                                    || $ExtensionPresumee == 'png'))
       {
         $_SESSION["messagesUploadImgError"]['extention'] = "Extension invlalide! Cahrger une image de type :  'jpg', 'jpeg', 'gif' ou 'png'";
         return FALSE;
       }

    $ImageNews = getimagesize($_FILES['ImageNews']['tmp_name']);
    if($ImageNews['mime'] == $ListeExtension[$ExtensionPresumee]  || $ImageNews['mime'] == $ListeExtensionIE[$ExtensionPresumee])
      {
        $_SESSION["messagesUploadImgError"]['demime'] = "Probleme de mime";
        return FALSE;
      }

    $ImageChoisie = imagecreatefromjpeg($_FILES['file']['tmp_name']);

    $TailleImageChoisie = getimagesize($_FILES['ImageNews']['tmp_name']);

    $NouvelleLargeur = 1000;
    $Reduction = ( ($NouvelleLargeur * 100)/$TailleImageChoisie[0] );
    $NouvelleHauteur = ( ($TailleImageChoisie[1] * $Reduction)/100 );

    $NouvelleImage = imagecreatetruecolor($NouvelleLargeur , $NouvelleHauteur)
                     or die ("Erreur True Color");
    imagecopyresampled($NouvelleImage , $ImageChoisie, 0, 0, 0, 0,
                       $NouvelleLargeur, $NouvelleHauteur,
                       $TailleImageChoisie[0],$TailleImageChoisie[1]);
    imagedestroy($ImageChoisie);
    //$NomImageChoisie = explode('.', $ImageNews);*/
    //************************************************************************************** FIN pour le resize : non fonctionnel

    //$idannonceur = $_SESSION['connected'];
    $dao = new AnnonceDAO();
    $daoImg = new ImagesDAO();
    $idannonce = $dao->findLastAnnonce();
    $chemin = "upload/imagesAnnonces/";
    $filename=/*$NomImageChoisie;*/$_FILES['file']['name'];
    $idImage = $idannonce."-".$filename;
    $path = $chemin.$idImage;//.".".$lesExtImg;

  //  imagejpeg($NouvelleImage, $path, 100);

    if ((copy($_FILES["file"]["tmp_name"],$path))) {
        unlink($_FILES['file']['tmp_name']);
        $continuer = TRUE;
    } else {
          $_SESSION["messagesUploadImgError"]['unkown'] = "Problème non identifié : chargement d'image non réussi";
          $filename = "default.jpg";
          $continuer = FALSE;
    }

    if ($continuer){
        $annonce = $dao->findAnnonce($idannonce);
        $_SESSION['lannonce'] = $annonce->getImgAnnonce();
        if($annonce->getImgAnnonce() == NULL) {
          $dao->ajouterImageAnnonce($idannonce, $idImage);
        }
        $daoImg->uploaderImagesAnnonce($idImage, $idannonce,$filename,$path);
        //$dao->uploaderImagesAnnonce($idannonce);//test
        UNSET($_SESSION["messagesUploadImgError"]);
        $_SESSION["messagesUploadImgeSucces"]['uploadReussi'] = "Image ajoutée à l'annonce!";
    }
    return $continuer;
  }
}
