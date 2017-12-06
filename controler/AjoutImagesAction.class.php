<?php
require_once('./controler/Action.interface.php');
class AjoutImagesAction implements Action {
	public function execute(){
			if (!ISSET($_SESSION)) session_start();
			if (!ISSET($_SESSION['membre']) || empty($_SESSION['membre']))
	      return "accueil";
			return "imagesAnnonces";
		}
	}
?>
