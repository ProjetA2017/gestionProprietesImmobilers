<?php
require_once('./controler/Action.interface.php');
require_once('model/dao/MembreDAO.php');
require_once('./model/classes/Membre.class.php');

class UpdateMotDePasseAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();

		$error = False;
		$user = $_SESSION['connected'];

		if($membre = MembreDAO::findMembre($user)) {

			if(ISSET($_REQUEST['btnEnregistrerMdp'])) {
				$mdpSaisiNouv = $_REQUEST['mdpNouv'];
				$mdpSaisiNouvConfir = $_REQUEST['mdpNouvConf'];
				if ($mdpSaisiNouv != $mdpSaisiNouvConfir) {
					$_SESSION['msgError']['mdpNonIdentique'] = "Le nouveau mot de passe doit être identique.";
					$error = true;
				}
				$mdpSaisi = $_REQUEST['oldMdp'];
				$mdpStock = $membre->getMotDePasse();
				if ((password_verify($mdpSaisi,$mdpStock)) && ($error == false)) {
					$motDePasse = password_hash($mdpSaisiNouv, PASSWORD_BCRYPT);
            		$membre->setMotDePasse($motDePasse);
					MembreDAO::updateMembreMdp($membre);
					return "accueil";
				} else {
					$_SESSION['msgError']['oldMdp'] = "Ce mot de passe est inexistant.";
				}
				return "pageUpdateMotDePasse";
	    }
	    unset($_SESSION['msgError']['mdpNonIdentique']);
	    unset($_SESSION['msgError']['oldMdp']);
		return "pageUpdateMotDePasse";
	}
}
}
