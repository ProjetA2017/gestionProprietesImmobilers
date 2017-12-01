<?php
require_once 'model/dao/AnnonceDAO.php';

class GereAffichageAccueil {
  public static function afficherAnnoncesAccueil() {
      if (!ISSET($_SESSION)) {
        session_start();
      }
      $dao = new AnnonceDAO();
      $_SESSION['lesAnnonces'] = $dao->findAllAnnonces();
      $_SESSION['lesAnnoncesTop4Maisons'] = $dao->findTop4Annonces();
      //test
      /*$annonce = $dao->findAnnonce('dris-appartement--32.9421204--60.65503050000001');
      $_SESSION['lannonce'] = $annonce;
      $_SESSION['lannonceimg'] = $annonce->getImgAnnonce();*/
  }

  public static function chercherSelon(){
        if(ISSET($_REQUEST['typeannonce'])){
          $_SESSION['recherche']['criterRcherche'] = $_REQUEST['typeannonce'];
          return;
        }
        if(!ISSET($_SESSION['recherche']['criterRcherche'])){
          $_SESSION['recherche']['criterRcherche'] = "toutes";
          return;
        }
        if(ISSET($_REQUEST['tousoudispo'])){
          $_SESSION['recherche']['criterRcherche'] = $_REQUEST['tousoudispo'];
          return;
        }
  }

  public static function afficherAnnoncesFiltre() {
      if (!ISSET($_SESSION)) {
        session_start();
      }
      if (ISSET($_REQUEST["numPage"]))
      {
        $numPage = $_REQUEST["numPage"];
      } else {
        $numPage = 1;
      }

      $dao = new AnnonceDAO();
      $_SESSION['lesAnnoncesFiltres'] = $dao->getPage($numPage);//, $_SESSION['recherche']['criterRcherche']);
      //$nbrDeResultat = $_SESSION['lesAnnoncesFiltres']['nbrDeResultat'];//total TODO: refaire avec count
      $_REQUEST["nbrResultats"] = $_SESSION['lesAnnoncesFiltres']['nbrDeResultat'];
      $_REQUEST['nbrDePages'] = (int)(($_REQUEST["nbrResultats"]-1)/5)+1;
      $_REQUEST["numPage"]=$numPage;

      //test
      /*$annonce = $dao->findAnnonce('dris-appartement--32.9421204--60.65503050000001');
      $_SESSION['lannonce'] = $annonce;
      $_SESSION['lannonceimg'] = $annonce->getImgAnnonce();*/
  }
}
