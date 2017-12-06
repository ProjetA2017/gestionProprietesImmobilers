<?php
require_once('./controler/Action.interface.php');
class ChercherAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		GereAffichageAccueil::chercherSelon();
		GereAffichageAccueil::afficherAnnoncesFiltre();
		return "chercher";
	}
}
