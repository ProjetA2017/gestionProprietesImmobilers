<?php
require_once('./controler/Action.interface.php');
class TestAction implements Action{
	public function execute(){
    	require_once './model/classes/GereAnnonce.php';
			if (!ISSET($_SESSION)) session_start();
			GereAnnonce::chargerMarkersCarte();
      return "test";
}
}
