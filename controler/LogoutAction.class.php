<?php
require_once('./controler/Action.interface.php');
class LogoutAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if (ISSET($_REQUEST["bDeconnexion"])) { 
			UNSET($_SESSION["connected"]);
			session_destroy();
		}
		return "accueil";
	}
}
?>
