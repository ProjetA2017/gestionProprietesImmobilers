<?php
require_once('./controler/Action.interface.php');
class TestAction implements Action, RequestAjaxAction {
	public function execute(){
    	require_once './model/classes/GereAnnonce.php';
			if (!ISSET($_SESSION)) session_start();
			GereAnnonce::chargerMarkersCarte();
			//GereAnnonce::uploaderImages();
			//GereAffichageAccueil::afficherAnnoncesAccueil();
      //return "test";TODO: enlever les commentaires
}
}
