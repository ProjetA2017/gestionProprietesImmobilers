<?php
require_once('./controler/Action.interface.php');
class LoginAction implements Action {
		public function execute(){
				require_once './model/classes/GereMembre.php';
				if (!ISSET($_SESSION)) session_start();
				if (ISSET($_REQUEST["bConnexion"])) {
					GereMembre::connexion();
				return "accueil";
				}
		}
}
