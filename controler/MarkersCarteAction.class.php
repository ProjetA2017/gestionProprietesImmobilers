<?php
require_once('./controler/Action.interface.php');
require_once('./controler/RequestAjaxAction.interface.php');
class MarkersCarteAction implements Action, RequestAjaxAction {
	public function execute(){
    	require_once './model/classes/GereAnnonce.php';
			require_once './model/config/Config.Interface.php';
			if (!ISSET($_SESSION)) session_start();
			if(ISSET($_SESSION['annonceAafficher']))
			{
				GereAnnonce::chargerMarkersCarteUneAnnonce();
				UNSET($_SESSION['annonceAafficher']);
			}
			else
				GereAnnonce::chargerMarkersCarte();
      //return "rien";TODO: enlever les commentaires
		}
}//fIN CLASSE
