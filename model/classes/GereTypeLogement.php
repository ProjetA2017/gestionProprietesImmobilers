<?php
require_once 'model/classes/AnnonceAppart.class.php';
require_once 'model/classes/AnnonceBureaux.class.php';
require_once 'model/classes/AnnonceMaison.class.php';
require_once 'model/dao/AnnonceAppartDAO.php';
require_once 'model/dao/AnnonceBureauxDAO.php';
require_once 'model/dao/AnnonceMaisonDAO.php';
require_once 'model/dao/AnnonceDAO.php';
require_once 'model/classes/Services.class.php';

class GereTypeLogement {
  public static function creerUneAnnonceAppart($idannonce, $typeAnnonce, $typetraitement) {
      if (!ISSET($_SESSION)) {
        session_start();
      }
      if(ISSET($_REQUEST['optNbrChambre']))  $nbrPieces = $_REQUEST['optNbrChambre'];
        else $nbrPieces = "null";

      if(ISSET($_REQUEST['position']))  $position = $_REQUEST['position'];
        else $position = "null";

      if(ISSET($_REQUEST['animal'])) $isAnimauxPermis = $_REQUEST['animal'];
        else $isAnimauxPermis = "null";

      $inclus = "";
      if(!isset($_REQUEST['IncludeApt']) || empty($_REQUEST['IncludeApt']))   $inclus = "null";
        else
          {
	           $tabChecked = $_REQUEST["IncludeApt"];
	           foreach ($tabChecked as $checked) $inclus .= $checked." ";
          }

      if(ISSET($_REQUEST['infoAutreApt'])) $infos = $_REQUEST['infoAutreApt'];
        else $infos = "null";

      $dao = new AnnonceAppartDAO();
      $_REQUEST['typetraitement']=$typetraitement;
      $annonceAppart = new AnnonceAppart();
      $annonceAppart->setIdAnnonce($idannonce);
      $annonceAppart->setTypeAnnonce($typeAnnonce);
      $annonceAppart->setNbrPieces($nbrPieces);
      $annonceAppart->setPosition($position);
      $annonceAppart->setIsAnimauxPermis($isAnimauxPermis);
      $annonceAppart->setInclus($inclus);
      $annonceAppart->setInfoSupplementaire($infos);
      if($typetraitement == 'creation')
        $dao->createAnnonceAppart($annonceAppart);
      if($typetraitement == 'modification')
        $dao->modifierAnnonceAppart($annonceAppart);
  }

  public static function creerUneAnnonceMaison($idannonce, $typeAnnonce, $typetraitement) {
      if (!ISSET($_SESSION)) {
        session_start();
      }
      if(ISSET($_REQUEST['nbrCh']))  $nbrChambres = $_REQUEST['nbrCh'];
        else $nbrChambres = "null";

      $inclus = "";
      if(!isset($_REQUEST['includeMaison']) || empty($_REQUEST['includeMaison']))   $inclus = "null";
        else
          {
	           $tabChecked = $_REQUEST["includeMaison"];
	           foreach ($tabChecked as $checked) $inclus .= $checked." ";
          }

      if(ISSET($_REQUEST['infoAutreMaison'])) $infos = $_REQUEST['infoAutreMaison'];
        else $infos = "null";

      $dao = new AnnonceMaisonDAO();
      $annonceMaison = new AnnonceMaison();
      $annonceMaison->setIdAnnonce($idannonce);
      $annonceMaison->setTypeAnnonce($typeAnnonce);
      $annonceMaison->setNbrChambres($nbrChambres);
      $annonceMaison->setInclus($inclus);
      $annonceMaison->setInfoSupplementaire($infos);
      if($typetraitement == 'creation')
        $dao->createAnnonceMaison($annonceMaison);
      if($typetraitement == 'modification')
        $dao->modifierAnnonceMaison($annonceMaison);
      $_REQUEST['typetraitement']=$typetraitement;
  }

  public static function creerUneAnnonceBureaux($idannonce, $typeAnnonce, $typetraitement) {
      if (!ISSET($_SESSION)) {
        session_start();
      }
      if(ISSET($_REQUEST['nbrEmp']))  $nbrEmployes = $_REQUEST['nbrEmp'];
        else $nbrEmployes = "null";

      $inclus = "";
      if(!isset($_REQUEST['includeBur']) || empty($_REQUEST['includeBur']))   $inclus = "null";
        else
          {
	           $tabChecked = $_REQUEST["includeBur"];
	           foreach ($tabChecked as $checked) $inclus .= $checked." ";
          }

      if(ISSET($_REQUEST['infoAutreBur'])) $infos = $_REQUEST['infoAutreBur'];
        else $infos = "null";
      $dao = new AnnonceBureauxDAO();
      $annonceBureaux = new AnnonceBureaux();
      $annonceBureaux->setIdAnnonce($idannonce);
      $annonceBureaux->setTypeAnnonce($typeAnnonce);
      $annonceBureaux->setNbrEmployes($nbrEmployes);
      $annonceBureaux->setInclus($inclus);
      $annonceBureaux->setInfoSupplementaire($infos);
      if($typetraitement == 'creation')
        $dao->createAnnonceBureaux($annonceBureaux);
      if($typetraitement == 'modification')
        $dao->modifierAnnonceBureaux($annonceBureaux);
      $_REQUEST['typetraitement']=$typetraitement;
  }

  public static function supprimerUneAnnonceBureaux($idannonce) {
    $dao = new AnnonceBureauxDAO();
    $dao->supprimerAnnonceBureaux($idannonce);
  }

  public static function supprimerUneAnnonceMaison($idannonce) {
    $dao = new AnnonceMaisonDAO();
    $dao->supprimerAnnonceMaison($idannonce);
  }

  public static function supprimerUneAnnonceAppart($idannonce) {
    $dao = new AnnonceAppartDAO();
    $dao->supprimerAnnonceAppart($idannonce);
  }

}
