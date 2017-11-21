<?php
require_once('./controler/Action.interface.php');
class UploadImagesAction implements Action, RequestAjaxAction {
	public function execute(){
    require_once './model/classes/GereAnnonce.php';
			if (!ISSET($_SESSION)) session_start();
			//if(GereAnnonce::uploaderImages())
			GereAnnonce::uploaderImages();
        //return "contact";
			//return "about";// à corriger
		//}
	}
}
?>
