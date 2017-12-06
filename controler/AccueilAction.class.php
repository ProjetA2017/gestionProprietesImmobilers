<?php
require_once('./controler/Action.interface.php');
require_once('./model/classes/GereAffichageAccueil.php');
class AccueilAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		GereAffichageAccueil::afficherAnnoncesAccueil();
		return "accueil";
	}
}
