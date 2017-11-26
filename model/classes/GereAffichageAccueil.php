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
}
