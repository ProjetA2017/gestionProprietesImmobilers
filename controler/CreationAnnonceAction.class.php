<?php
require_once ('./controler/Action.interface.php');
require_once ('./model/classes/GereAnnonce.php');
class CreationAnnonceAction implements Action {
	public function execute(){
    if (!ISSET($_SESSION)) session_start();
    if (!ISSET($_SESSION['membre']) || empty($_SESSION['membre']))
      return "accueil";
		if(ISSET($_REQUEST['bCreationAnnonce'])) {
			GereAnnonce::creerUneAnnonce();
			return "imagesAnnonces";
		}
  }
}
