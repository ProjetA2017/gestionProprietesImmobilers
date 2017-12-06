<?php
require_once ('./controler/Action.interface.php');
require_once ('./model/classes/GereImages.php');
class AfficherGaleryAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if(ISSET($_REQUEST['bGalerieImages'])){
			GereImages::afficherGalerie();
			return "galery";
		}
	return "accueil";
	}
}
