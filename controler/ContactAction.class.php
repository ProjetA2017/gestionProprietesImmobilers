<?php
require_once('./controler/Action.interface.php');
class ContactAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		return "contact";
	}
}
?>
