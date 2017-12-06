<?php
require_once('./controler/Action.interface.php');
require_once('./model/classes/GereImages.php');
class SupprimerImageAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION['membre']) || empty($_SESSION['membre']))
      return "accueil";
    GereImages::supprimerImage();
    GereImages::afficherGalerie();
		return "galery";
	}
}
