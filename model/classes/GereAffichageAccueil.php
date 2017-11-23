<?php
require_once 'model/dao/AnnonceDAO.php';

class GereAffichageAccueil {
  public static function afficherAnnoncesAccueil() {
      if (!ISSET($_SESSION)) {
        session_start();
      }
      $dao = new AnnonceDAO();
      $_SESSION['lesAnnonces'] = $dao->findAllAnnonces();
  }
}
