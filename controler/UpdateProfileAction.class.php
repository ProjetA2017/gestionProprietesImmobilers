<?php
require_once('./controler/Action.interface.php');
require_once('model/dao/MembreDAO.php');
require_once('./model/classes/Membre.class.php');

class UpdateProfileAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) {
			session_start();
		}

		$user = $_SESSION['connected'];
		if($membre = MembreDAO::findMembre($user)) {

			if(ISSET($_REQUEST['btnEnregistrer'])) {
				$membre->setIdentifiant($_REQUEST['identifiant']);
				$membre->setCourriel($_REQUEST['courriel']);
				$membre->setNom($_REQUEST['nfamille']);
				$membre->setPrenom($_REQUEST['prenom']);
				$membre->setAdresse($_REQUEST['adresse']);
				$membre->setVille($_REQUEST['ville']);
				$membre->setPays($_REQUEST['pays']);
				$membre->setTelephone($_REQUEST['telp']);
				MembreDAO::updateMembre($membre);

			}
			$_SESSION['id'] = $membre->getIdentifiant();
			$_SESSION['courriel'] = $membre->getCourriel();
			$_SESSION['nom'] = $membre->getNom();
			$_SESSION['prenom'] = $membre->getPrenom();
			$_SESSION['adresse'] = $membre->getAdresse();
			$_SESSION['ville'] = $membre->getVille();
			$_SESSION['pays'] = $membre->getPays();
			$_SESSION['telephone'] = $membre->getTelephone();
			return "pageUpdateProfile";
	    }
		return "accueil";
	}
}
