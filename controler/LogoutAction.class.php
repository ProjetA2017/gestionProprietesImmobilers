<?php
require_once('./controler/Action.interface.php');
class LogoutAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
			UNSET($_SESSION["membre"]);
		GereAffichageAccueil::afficherAnnoncesAccueil();
		return "accueil";
	}
}
?>
