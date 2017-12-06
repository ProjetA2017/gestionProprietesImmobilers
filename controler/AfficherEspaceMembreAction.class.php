<?php
require_once('./controler/Action.interface.php');
require_once('./model/classes/GereAnnonce.php');
class AfficherEspaceMembreAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION['membre']) || empty($_SESSION['membre']))
      return "accueil";
    GereAnnonce::listeAnnoncesMembre();
		return "espaceMembre";
	}
}
