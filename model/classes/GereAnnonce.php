<?php
require_once 'model/dao/AnnonceDAO.php';
require_once 'model/classes/Annonce.class.php';
require_once 'model/dao/ImagesDAO.php';
require_once 'model/classes/Image.class.php';
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
      $idannonce = $idannonceur."_".$typeLogement."_".$lat."_".$long;

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

      /* pour les tests TODO : enlever à la fin
      $_SESSION['tabTest'] = array();
      array_push($_SESSION['tabTest'] ,$idannonceur);
      array_push($_SESSION['tabTest'] ,$lat);
      array_push($_SESSION['tabTest'] ,$long);
      array_push($_SESSION['tabTest'] ,$nom);
      array_push($_SESSION['tabTest'] ,$prenom);
      array_push($_SESSION['tabTest'] ,$adresse);
      array_push($_SESSION['tabTest'] ,$prix);
      array_push($_SESSION['tabTest'] ,$typeAnnonce);
      array_push($_SESSION['tabTest'] ,$typeLogement);
      array_push($_SESSION['tabTest'] ,$idannonce);
      */

      $typetraitement = 'creation';
      if ($typeLogement == 'appartement'){
          GereTypeLogement::creerUneAnnonceAppart($idannonce, $typeAnnonce, $typetraitement);
          //array_push($_SESSION['tabTest'] ,$typeLogement);
      }

      if ($typeLogement == 'maison'){
          GereTypeLogement::creerUneAnnonceMaison($idannonce, $typeAnnonce, $typetraitement);
          //array_push($_SESSION['tabTest'] ,$typeLogement);
      }

      if ($typeLogement == 'bureaux'){
          GereTypeLogement::creerUneAnnonceBureaux($idannonce, $typeAnnonce, $typetraitement);
          //array_push($_SESSION['tabTest'] ,$typeLogement);
      }
      //UNSET($_REQUEST['typetraitement']);
     // }
      //return $resultat;
  }

  public static function listeAnnoncesMembre() {
      if (!ISSET($_SESSION)) {
        session_start();
      }
      $dao = new AnnonceDAO();
      $_REQUEST['annoncesDuMembre'] = $dao->findAllAnnoncesByMembre($_SESSION['membre']->getIdentifiant());
  }

  public static function afficherDetailsUneAnnonce() {
      if (!ISSET($_SESSION)) session_start();
      $idannonce=$_REQUEST['idannonce'];
      $dao = new AnnonceDAO();
      $annonceAafficher = $dao->findAnnonce($idannonce);
      $_REQUEST['type'] = $annonceAafficher->getTypeLogement();
      if($annonceAafficher->getTypeLogement() == "appartement")
        $_REQUEST['annonceAafficher'] = $dao->findAnnonceAvecType($idannonce, "annoncesapparts");
      if($annonceAafficher->getTypeLogement()  == "maison")
        $_REQUEST['annonceAafficher'] = $dao->findAnnonceAvecType($idannonce, "annoncesmaison");
      if($annonceAafficher->getTypeLogement() == "bureaux")
        $_REQUEST['annonceAafficher'] = $dao->findAnnonceAvecType($idannonce, "annoncesbureaux");
      $daoImg = new ImagesDAO();
      $_REQUEST['imagesDeLannonce'] = $daoImg->findAllImagesUneAnnonce($idannonce);
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

    public static function chargerMarkersCarteUneAnnonce() {
        $dao = new AnnonceDAO();
        $annonce = $dao->findAnnonce($_SESSION['annonceAafficher']->idannonce);
  //      $_SESSION['tab']=$lesAnnonces; // tests
  //      $_SESSION['tab2'] = $dao->chercherIdMarker('yang-maison-40.90671500000001--73.89687600000002'); // tests
        echo '<markers>';
        echo '<marker ';
        echo 'path="' . $dao->chercherIdMarker($annonce->getIdAnnonce()). '" ';
        //echo 'path="' . $dao->chercherIdMarker('yang-maison-40.90671500000001--73.89687600000002'). '" ';//test
        echo 'lat="' . $annonce->getLatitude() . '" ';
        echo 'lng="' . $annonce->getLongitude() . '" ';
        echo 'name="' . Services::parseToXML($annonce->getNom()) . '" ';
        echo 'address="' . Services::parseToXML($annonce->getAdresse()) . '" ';
        echo 'type="' . $annonce->getPrix() . '" ';
        echo '/>';
        // End XML file
        echo '</markers>';
    }

    public static function supprimerUneAnnonce() {
        if (ISSET($_REQUEST["annonceASupprimer"]))
    		{
    			$dao = new AnnonceDAO();
    			$annonce = htmlspecialchars($_REQUEST["annonceASupprimer"]);
    			$dao->supprimerAnnonce($annonce);
    		}
    }

    public static function modifierUneAnnonce() {
        $idannonce=$_REQUEST['idannonce'];
        $idannonceur=$_REQUEST['identifiant'];//Plus besoin
        $lat =$_REQUEST['latitude'];
        $long =$_REQUEST['longitude'];
        $nom =$_REQUEST['nom'];
        $prenom =$_REQUEST['prenom'];
        $adresse=$_REQUEST['adresse'];
        $prix =$_REQUEST['prix'];
        $typeAnnonce =$_REQUEST['typeAnnonce'];
        $typeLogement =$_REQUEST['typelogement'];
        $status =$_REQUEST['status'];
        date_default_timezone_set('America/Montreal');
        $dateTraitementAnnonce = date("Y-m-d H:i:s");
        $dao = new AnnonceDAO();
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
        $annonce->setStatus($status);
        $annonce->setDateTraitement($dateTraitementAnnonce);
        $dao->modifierAnnonce($annonce);
        //TODO : ENLEVER LE TEST
        $_REQUEST['tabTest2'] = $annonce;

        $typetraitement = 'modification';
        if ($typeLogement == 'appartement'){
            GereTypeLogement::creerUneAnnonceAppart($idannonce, $typeAnnonce, $typetraitement);
            //array_push($_SESSION['tabTest'] ,$typeLogement);
        }

        if ($typeLogement == 'maison'){
            GereTypeLogement::creerUneAnnonceMaison($idannonce, $typeAnnonce, $typetraitement);
            //array_push($_SESSION['tabTest'] ,$typeLogement);
        }

        if ($typeLogement == 'bureaux'){
            GereTypeLogement::creerUneAnnonceBureaux($idannonce, $typeAnnonce, $typetraitement);
            //array_push($_SESSION['tabTest'] ,$typeLogement);
        }
        //UNSET($_REQUEST['typetraitement']);



      }




}
