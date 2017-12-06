<?php
require_once ('./controler/Action.interface.php');
require_once ('./model/classes/GereMembre.php');
class UpdateProfileAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION['membre']) || empty($_SESSION['membre']))
      return "accueil";
		if(ISSET($_REQUEST['bModifierProfile'])) {
				//if(GereMembre::modifierProfil()) return "accueil";
				GereMembre::modifierProfil();
		}
		return "pageUpdateProfile";
	}
}
