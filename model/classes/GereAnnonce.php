<?php
require_once 'model/dao/AnnonceDAO.php';
require_once 'model/classes/Annonce.class.php';
require_once 'model/classes/GereTypeLogement.php';
require_once 'model/classes/Services.class.php';

class GereAnnonce {
  public static function creerUneAnnonce() {
      if (!ISSET($_SESSION)) {
        session_start();
      }
    /*  if (ISSET($_SESSION["messageErreurCreationCompte"])) {
        UNSET($_SESSION["messageErreurCreationCompte"]);
      }*/
      $idannonceur=$_REQUEST['identifiant'];
      $lat =$_REQUEST['latitude'];
      $long =$_REQUEST['longitude'];
      $nom =$_REQUEST['nom'];
      $prenom =$_REQUEST['prenom'];
      $adresse=$_REQUEST['adresse'];
      $prix =$_REQUEST['prix'];
      $typeAnnonce =$_REQUEST['typeAnnonce'];
      $typeLogement =$_REQUEST['typelogement'];
      $idannonce = $idannonceur."-".$typeLogement."-".$lat."-".$long;
      //$resultat = TRUE;
      /*if ($identifiant == "") {
          $_SESSION["messageErreurCreationCompte"]["identifiant"] = "Identifiant obligatoire";
          $resultat = FALSE;
      }*/
      //if ($resultat) {
      $dao = new AnnonceDAO();
     /* $annonce = $dao->findAnnonce($identifiant);
      if ($annonce != NULL) {
         $_SESSION["messageErreurCreationCompte"]["identifiant"] = "annonce déjà existante";
         return FALSE;
      }*/
      $annonce = new Annonce();
      $annonce->setIdAnnonce($idannonce);
      $annonce->setIdAnnonceur($idannonceur);
      $annonce->setLatitude($lat);
      $annonce->setLongitude($long);
      $annonce->setNom($nom);
      $annonce->setPrenom($prenom);
      $annonce->setAdresse($adresse);
      $annonce->setPrix($prix);
      $annonce->setTypeAnnonce($typeAnnonce);
      $annonce->setTypeLogement($typeLogement);
      $dao->createAnnonce($annonce);

      if ($typeLogement == 'appartement'){
          GereTypeLogement::creerUneAnnonceAppart($idannonce, $typeAnnonce);
          //array_push($_SESSION['tabTest'] ,$typeLogement);
      }

      if ($typeLogement == 'maison'){
          GereTypeLogement::creerUneAnnonceMaison($idannonce, $typeAnnonce);
          //array_push($_SESSION['tabTest'] ,$typeLogement);
      }

      if ($typeLogement == 'bureaux'){
          GereTypeLogement::creerUneAnnonceBureaux($idannonce, $typeAnnonce);
          //array_push($_SESSION['tabTest'] ,$typeLogement);
      }
     // }
      //return $resultat;
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
      $tailleMax = 10485760;//=10Mo
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

      //$idannonceur = $_SESSION['connected'];
      $dao = new AnnonceDAO();
      $idannonce = $dao->findLastAnnonce();
      $chemin = "upload/imagesAnnonces/";
      $filename=$_FILES['file']['name'];
      $idImage = /*$idannonceur."-".*/$idannonce."-".$filename;
      $path = $chemin.$idImage;//.".".$lesExtImg;
      if ((copy($_FILES["file"]["tmp_name"],$path))) {
          unlink($_FILES['file']['tmp_name']);
          $continuer = TRUE;
      } else {
            $_SESSION["messagesUploadImgError"]['unkown'] = "Problème non identifié : chargement d'image non réussi";
            $filename = "default.jpg";
            $continuer = FALSE;
      }

      if ($continuer){
          $dao->uploaderImagesAnnonce($idImage, $idannonce,$filename,$path);
          //$dao->uploaderImagesAnnonce($idannonce);//test
          UNSET($_SESSION["messagesUploadImgError"]);
          $_SESSION["messagesUploadImgeSucces"]['uploadReussi'] = "Image ajoutée à l'annonce!";
      }
      return $continuer;
    }

    public static function chargerMarkersCarte() {
        $dao = new AnnonceDAO();
        $lesAnnonces = $dao->findAllAnnonces();
  //      $_SESSION['tab']=$lesAnnonces; // tests
  //      $_SESSION['tab2'] = $dao->chercherIdMarker('yang-maison-40.90671500000001--73.89687600000002'); // tests
        echo '<markers>';
        foreach ($lesAnnonces as $row){
            echo '<marker ';
            echo 'path="' . $dao->chercherIdMarker($row['idannonce']). '" ';
            //echo 'path="' . $dao->chercherIdMarker('yang-maison-40.90671500000001--73.89687600000002'). '" ';//test
            echo 'lat="' . $row['latitude'] . '" ';
            echo 'lng="' . $row['longitude'] . '" ';
            echo 'name="' . Services::parseToXML($row['prenom']) . '" ';
            echo 'address="' . Services::parseToXML($row['adresse']) . '" ';
            echo 'type="' . $row['prix'] . '" ';
            echo '/>';
        }
        // End XML file
        echo '</markers>';
    }
}
