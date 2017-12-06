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
        //TODO : essayer d'intialiser Session Min  et Max pour enlever accueil
        if (ISSET($_REQUEST["prixMin"]))
          $_SESSION['min'] = $_REQUEST["prixMin"];
        if (ISSET($_REQUEST["prixMax"]))
          $_SESSION['max'] = $_REQUEST["prixMax"];
        if (ISSET($_REQUEST["typeannonce"]))
          $_SESSION['filtreAnnonces'] = $_REQUEST["typeannonce"];
        /*if(ISSET($_REQUEST['typeannonce']) && ($_REQUEST['typeannonce'] == 'location' || $_REQUEST['typeannonce'] == 'vente')){
          $_SESSION['filtreAnnonces'] = $_REQUEST['typeannonce'];
          $_SESSION['pagination']=true;
          return;
        }*/
        //$_SESSION['filtreAnnonces'] = "toutes";
  }

  public static function afficherAnnoncesFiltre() {
      if (!ISSET($_SESSION)) {
        session_start();
      }
      /*if (ISSET($_REQUEST["numPage"]))
      {
        $numPage = $_REQUEST["numPage"];
      } else {
        $numPage = 1;
      }*/

      /*if (ISSET($_REQUEST["typeannonce"]))
        $_SESSION['typeannonce']= $_REQUEST["typeannonce"];*/
      /*$_SESSION['min'] = (!ISSET($_REQUEST["prixMin"]) || empty($_REQUEST["prixMin"]) ? 0 : $_REQUEST["prixMin"]);
      $_SESSION['max']= (!ISSET($_REQUEST["prixMax"]) || empty($_REQUEST["prixMax"]) ? 5000000 : $_REQUEST["prixMax"]);*/
      $numPage = (ISSET($_REQUEST["numPage"]) ? $_REQUEST["numPage"] : 1);
      $_REQUEST['taillePage'] = 6;
      $dao = new AnnonceDAO();
      $_REQUEST['lesAnnoncesFiltres'] = $dao->getPage($numPage, $_SESSION['min'], $_SESSION['max'], $_SESSION['filtreAnnonces']);//, $_SESSION['recherche']['criterRcherche']);
      //$_REQUEST["nbrResultats"] = count($_SESSION['lesAnnoncesFiltres']['liste']); ==> donne 5 rsultats ??????????
      $_REQUEST["nbrResultats"] = $_REQUEST['lesAnnoncesFiltres']['nbrDeResultat'];
      $_REQUEST['nbrDePages'] = (int)(($_REQUEST['lesAnnoncesFiltres']['nbrDeResultat']-1)/5)+1;
      $_REQUEST["numPage"]=$numPage;
      //test
      $_REQUEST["case"]=$_REQUEST['lesAnnoncesFiltres']['case'];
      $_REQUEST['min']=$_REQUEST['lesAnnoncesFiltres']['min'];
      $_REQUEST['max']=$_REQUEST['lesAnnoncesFiltres']['max'];
      //test
      /*$annonce = $dao->findAnnonce('dris-appartement--32.9421204--60.65503050000001');
      $_SESSION['lannonce'] = $annonce;
      $_SESSION['lannonceimg'] = $annonce->getImgAnnonce();*/
  }
}
