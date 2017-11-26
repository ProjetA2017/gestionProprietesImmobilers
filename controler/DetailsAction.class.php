<?php
require_once('./controler/Action.interface.php');
require_once('./model/classes/GereAnnonce.php');
class DetailsAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		GereAnnonce::afficherDetailsUneAnnonce();
		return "detailsPropriete";
		//return "test";
	}
}
?>
