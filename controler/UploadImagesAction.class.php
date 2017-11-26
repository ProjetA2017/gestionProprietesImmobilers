<?php
require_once('./controler/Action.interface.php');
class UploadImagesAction implements Action, RequestAjaxAction {
	public function execute(){
    //require_once './model/classes/GereAnnonce.php';
		require_once './model/classes/GereImages.php';
			if (!ISSET($_SESSION)) session_start();
			GereImages::uploaderImages();
			//GereAnnonce::uploaderImages();//fonctionne
	}
}
?>
