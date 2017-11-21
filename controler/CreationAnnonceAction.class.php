<?php
require_once('./controler/Action.interface.php');
require_once('./controler/RequestAjaxAction.interface.php');
class CreationAnnonceAction implements Action, RequestAjaxAction {
	public function execute(){
    if (!ISSET($_SESSION)) session_start();
    if (!ISSET($_SESSION['connected']) || empty($_SESSION['connected']))
      return "default";
    require_once './model/classes/GereAnnonce.php';
		  GereAnnonce::creerUneAnnonce();
  }
}
?>
