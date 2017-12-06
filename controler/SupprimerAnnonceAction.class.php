<?php
require_once('./controler/Action.interface.php');
require_once('./model/classes/GereAnnonce.php');
class SupprimerAnnonceAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION['membre']) || empty($_SESSION['membre']))
      return "accueil";
    GereAnnonce::supprimerUneAnnonce();
    GereAnnonce::listeAnnoncesMembre();
		return "espaceMembre";
	}
}
