<?php
require_once('./controler/DefaultAction.class.php');
require_once('./controler/AboutAction.class.php');
require_once('./controler/AgentsAction.class.php');
require_once('./controler/BlogAction.class.php');
require_once('./controler/ContactAction.class.php');
require_once('./controler/ChercherAction.class.php');
require_once('./controler/DetailsAction.class.php');
require_once('./controler/BlogDetailsAction.class.php');
require_once('./controler/FormulaireCompteAction.class.php');
require_once('./controler/FormulaireAnnonceAction.class.php');
require_once('./controler/CreationCompteAction.class.php');
require_once('./controler/CreationAnnonceAction.class.php');
require_once('./controler/LoginAction.class.php');
require_once('./controler/LogoutAction.class.php');
require_once('./controler/AjoutImagesAction.class.php');
require_once('./controler/UploadImagesAction.class.php');
require_once('./controler/AfficherCarteAction.class.php');
require_once('./controler/MarkersCarteAction.class.php');
////////////
require_once('./controler/TestAction.class.php');


//require_once('./controler/AjaxAnnonceAction.class.php');

class ActionBuilder{
	public static function getAction($nom){
		switch ($nom)
		{
			case "afficherCarte" :
				return new AfficherCarteAction();
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
			case "creerAnnonceAjax" :
				return new CreationAnnonceAction();
			break;
			case "chargerMarkersCarte" :
				return new MarkersCarteAction();
			break;
			case "deconnection"  :
				return new LogoutAction();
			break;
			case "formulaireCompte" :
				return new FormulaireCompteAction();
			break;
			case "formulaireAnnonce" :
				return new FormulaireAnnonceAction();
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
			case "uploaderImages" :
				return new UploadImagesAction();
			break;
			case "test" :
				return new TestAction();
			break;
			default :
				return new DefaultAction();
				//return new AboutAction();
		}
	}
}
