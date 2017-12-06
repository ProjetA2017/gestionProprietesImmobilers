<?php
require_once ('./controler/AboutAction.class.php');
require_once ('./controler/AccueilAction.class.php');
require_once ('./controler/AfficherCarteAction.class.php');
require_once ('./controler/AfficherEspaceMembreAction.class.php');
require_once ('./controler/AgentsAction.class.php');
require_once ('./controler/AfficherGaleryAction.class.php');
require_once ('./controler/AjoutImagesAction.class.php');
require_once ('./controler/BlogAction.class.php');
require_once ('./controler/BlogDetailsAction.class.php');
require_once ('./controler/ChercherAction.class.php');
require_once ('./controler/ContactAction.class.php');
require_once ('./controler/CreationAnnonceAction.class.php');
require_once ('./controler/CreationCompteAction.class.php');
require_once ('./controler/DefaultAction.class.php');
require_once ('./controler/DetailsAction.class.php');
require_once ('./controler/EnvoyerMessageAction.class.php');
require_once ('./controler/FormulaireAnnonceAction.class.php');
require_once ('./controler/FormulaireCompteAction.class.php');
require_once ('./controler/FormulaireModifierAnnonceAction.class.php');
require_once ('./controler/LoginAction.class.php');
require_once ('./controler/LogoutAction.class.php');
require_once ('./controler/MarkersCarteAction.class.php');
require_once ('./controler/ModifierAnnonceAction.class.php');
require_once ('./controler/SupprimerAnnonceAction.class.php');
require_once ('./controler/SupprimerImageAction.class.php');
require_once ('./controler/UpdateMotDePasseAction.class.php');
require_once ('./controler/UpdateProfileAction.class.php');
require_once ('./controler/UploadImagesAction.class.php');
require_once ('./controler/TestAction.class.php');

class ActionBuilder{
	public static function getAction($nom){
		switch ($nom)
		{
			case "pageAccueil" :
				return new AccueilAction();
			break;
			case "afficherCarte" :
				return new AfficherCarteAction();
			break;
			case "afficherEspaceMembre" :
				return new AfficherEspaceMembreAction();
			break;
			case "afficherGalery" :
				return new AfficherGaleryAction();
			break;
			case "ajouterImagesAnnonces" :
				return new AjoutImagesAction();
			break;
			case "connection"  :
				return new LoginAction();
			break;
			case "creerCompteMembre" :
				return new CreationCompteAction();
			break;
			case "creerAnnonce" :
				return new CreationAnnonceAction();
			break;
			case "chargerMarkersCarte" :
				return new MarkersCarteAction();
			break;
			case "deconnection"  :
				return new LogoutAction();
			break;
			case "envoyerMessage"  :
				return new EnvoyerMessageAction();
			break;
			case "formulaireCompte" :
				return new FormulaireCompteAction();
			break;
			case "formulaireAnnonce" :
				return new FormulaireAnnonceAction();
			break;
			case "formulairModifierAnnonce" :
				return new FormulaireModifierAnnonceAction();
			break;
			case "modifierAnnonce" :
				return new ModifierAnnonceAction();
			break;
			case "pageAbout" :
				return new AboutAction();
			break;
			case "pageAgents" :
				return new AgentsAction();
			break;
			case "pageBlog" :
				return new BlogAction();
			break;
			case "pageContact" :
				return new ContactAction();
			break;
			case "pageChercher" :
				return new ChercherAction();
			break;
			case "pageDetails" :
				return new DetailsAction();
			break;
			case "pageBlogDetails" :
				return new BlogDetailsAction();
			break;
			case "supprimerAnnonce" :
				return new SupprimerAnnonceAction();
			break;
			case "supprimerImage" :
				return new SupprimerImageAction();
			break;
			case "uploaderImages" :
				return new UploadImagesAction();
			break;
			//Ajout par dris : me permet de faire des tests pour l'affichage
			//Fichier concerné : la vue test.php
			case "test" :
				return new TestAction();
			break;
			/* ** ajouté par Yang
			  Les pages concernées :

			*/
			case "updateProfile" :
				return new UpdateProfileAction();
			break;
			case "updateMotDePasse" :
				return new UpdateMotDePasseAction();
			break;
			default :
				return new DefaultAction();
		}
	}
}
