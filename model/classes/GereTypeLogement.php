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
  public static function creerUneAnnonceAppart($idannonce, $typeAnnonce) {
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

      if(ISSET($_REQUEST['animal'])) $isAnimauxPermis = ($_REQUEST['animal'] == 'oui' ? true : false);
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
      $annonceAppart = new AnnonceAppart();
      $annonceAppart->setIdAnnonce($idannonce);
      $annonceAppart->setTypeAnnonce($typeAnnonce);
      $annonceAppart->setNbrPieces($nbrPieces);
      $annonceAppart->setPosition($position);
      $annonceAppart->setIsAnimauxPermis($isAnimauxPermis);
      $annonceAppart->setInclus($inclus);
      $annonceAppart->setInfoSupplementaire($infos);
      $dao->createAnnonceAppart($annonceAppart);
     // }
      //return $resultat;
      //pour les tests :
      $_SESSION['tabTest'] = array();
      array_push($_SESSION['tabTest'] ,$idannonce);
      array_push($_SESSION['tabTest'] ,$_REQUEST['typeAnnonce']);
      array_push($_SESSION['tabTest'] ,$nbrPieces);
      array_push($_SESSION['tabTest'] ,$position);
      array_push($_SESSION['tabTest'] ,$isAnimauxPermis);
      array_push($_SESSION['tabTest'] ,$inclus);
      array_push($_SESSION['tabTest'] ,$infos);
  }

  public static function creerUneAnnonceMaison($idannonce, $typeAnnonce) {
      if (!ISSET($_SESSION)) {
        session_start();
      }
      /*if (ISSET($_SESSION["messageErreurCreationCompte"])) {
        UNSET($_SESSION["messageErreurCreationCompte"]);
      }*/
      if(ISSET($_REQUEST['nbrCh']))  $nbrChambres = $_REQUEST['nbrCh'];
        else $nbrPieces = "null";

      $inclus = "";
      //$tabInclus = $_REQUEST['IncludeApt'];
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
      $dao->createAnnonceMaison($annonceMaison);
     // }
      //return $resultat;
      //pour les tests :
      $_SESSION['tabTest'] = array();
      array_push($_SESSION['tabTest'] ,$idannonce);
      array_push($_SESSION['tabTest'] ,$_REQUEST['typeAnnonce']);
      array_push($_SESSION['tabTest'] ,$nbrChambres);
      array_push($_SESSION['tabTest'] ,$inclus);
      array_push($_SESSION['tabTest'] ,$infos);
  }


}
