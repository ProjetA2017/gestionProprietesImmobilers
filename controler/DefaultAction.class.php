<?php
require_once('./controler/Action.interface.php');
require_once('./model/classes/GereAffichageAccueil.php');
class DefaultAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if (ISSET($_SESSION['membre'])) UNSET($_SESSION['membre']);
		GereAffichageAccueil::afficherAnnoncesAccueil();
		return "accueil";
	}
}
