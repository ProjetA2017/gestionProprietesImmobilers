<?php
require_once ('./controler/Action.interface.php');
require_once ('./controler/RequirePRGAction.interface.php');
require_once ('./model/classes/GereMessage.php');
require_once ('./model/classes/GereAnnonce.php');
class EnvoyerMessageAction implements Action, RequirePRGAction {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if(ISSET($_REQUEST['bEnvoyerMessageAnnonceur'])){
			GereMessage::envoyer();
			return "pageDetails";
		}
		if(ISSET($_REQUEST['bEnvoyerMessageAdmin'])){
			GereMessage::envoyer();
			return "pageContact";
		}
		return "accueil";
	}
}
