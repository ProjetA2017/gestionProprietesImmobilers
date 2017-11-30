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
      /*if (ISSET($_SESSION["messageErreurCreationCompte"])) {
        UNSET($_SESSION["messageErreurCreationCompte"]);
      }*/
      if(ISSET($_REQUEST['optNbrChambre']))  $nbrPieces = $_REQUEST['optNbrChambre'];
        else $nbrPieces = "null";

      if(ISSET($_REQUEST['position']))  $position = $_REQUEST['position'];
        else $position = "null";

      if(ISSET($_REQUEST['animal'])) $isAnimauxPermis = $_REQUEST['animal'];
        else $isAnimauxPermis = "null";

      $inclus = "";
      //$tabInclus = $_REQUEST['IncludeApt'];
      if(!isset($_REQUEST['IncludeApt']) || empty($_REQUEST['IncludeApt']))   $inclus = "null";
        else
          {
	           $tabChecked = $_REQUEST["IncludeApt"];
	           foreach ($tabChecked as $checked) $inclus .= $checked." ";
          }

      if(ISSET($_REQUEST['infoAutreApt'])) $infos = $_REQUEST['infoAutreApt'];
        else $infos = "null";

      //$resultat = TRUE;
      /*if ($identifiant == "") {
          $_SESSION["messageErreurCreationCompte"]["identifiant"] = "Identifiant obligatoire";
          $resultat = FALSE;
      }*/
      //if ($resultat) {
      $dao = new AnnonceAppartDAO();
         /* $annonce = $dao->findAnnonce($identifiant);
          if ($annonce != NULL) {
             $_SESSION["messageErreurCreationCompte"]["identifiant"] = "annonce déjà existante";
             return FALSE;
          }*/

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
      /*if(ISSET($_REQUEST['typetraitement']) &&  $_REQUEST['typetraitement'] == 'modification')
        $dao->modifierAnnonceAppart($annonceAppart);*/
     // }
      //return $resultat;
      //pour les tests :
      $_REQUEST['tabTest'] = $annonceAppart;

  }

  public static function creerUneAnnonceMaison($idannonce, $typeAnnonce, $typetraitement) {
      if (!ISSET($_SESSION)) {
        session_start();
      }
      /*if (ISSET($_SESSION["messageErreurCreationCompte"])) {
        UNSET($_SESSION["messageErreurCreationCompte"]);
      }*/
      if(ISSET($_REQUEST['nbrCh']))  $nbrChambres = $_REQUEST['nbrCh'];
        else $nbrChambres = "null";

      $inclus = "";
      //$tabInclus = $_REQUEST['includeMaison'];
      if(!isset($_REQUEST['includeMaison']) || empty($_REQUEST['includeMaison']))   $inclus = "null";
        else
          {
	           $tabChecked = $_REQUEST["includeMaison"];
	           foreach ($tabChecked as $checked) $inclus .= $checked." ";
          }

      if(ISSET($_REQUEST['infoAutreMaison'])) $infos = $_REQUEST['infoAutreMaison'];
        else $infos = "null";

      //$resultat = TRUE;
      /*if ($identifiant == "") {
          $_SESSION["messageErreurCreationCompte"]["identifiant"] = "Identifiant obligatoire";
          $resultat = FALSE;
      }*/
      //if ($resultat) {
      $dao = new AnnonceMaisonDAO();
         /* $annonce = $dao->findAnnonce($identifiant);
          if ($annonce != NULL) {
             $_SESSION["messageErreurCreationCompte"]["identifiant"] = "annonce déjà existante";
             return FALSE;
          }*/
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
     // }
      //return $resultat;
      //pour les tests :
      $_REQUEST['tabTest'] = $annonceMaison;
      $_REQUEST['typetraitement']=$typetraitement;
  }

  public static function creerUneAnnonceBureaux($idannonce, $typeAnnonce, $typetraitement) {
      if (!ISSET($_SESSION)) {
        session_start();
      }
      /*if (ISSET($_SESSION["messageErreurCreationCompte"])) {
        UNSET($_SESSION["messageErreurCreationCompte"]);
      }*/
      if(ISSET($_REQUEST['nbrEmp']))  $nbrEmployes = $_REQUEST['nbrEmp'];
        else $nbrEmployes = "null";

      $inclus = "";
      //$tabInclus = $_REQUEST['includeBur'];
      if(!isset($_REQUEST['includeBur']) || empty($_REQUEST['includeBur']))   $inclus = "null";
        else
          {
	           $tabChecked = $_REQUEST["includeBur"];
	           foreach ($tabChecked as $checked) $inclus .= $checked." ";
          }

      if(ISSET($_REQUEST['infoAutreBur'])) $infos = $_REQUEST['infoAutreBur'];
        else $infos = "null";

      //$resultat = TRUE;
      /*if ($identifiant == "") {
          $_SESSION["messageErreurCreationCompte"]["identifiant"] = "Identifiant obligatoire";
          $resultat = FALSE;
      }*/
      //if ($resultat) {
      $dao = new AnnonceBureauxDAO();
         /* $annonce = $dao->findAnnonce($identifiant);
          if ($annonce != NULL) {
             $_SESSION["messageErreurCreationCompte"]["identifiant"] = "annonce déjà existante";
             return FALSE;
          }*/
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
     // }
      //return $resultat;
      //pour les tests :
      $_REQUEST['tabTest'] = $annonceBureaux;
      $_REQUEST['typetraitement']=$typetraitement;
  }
}
