<?php
require_once('./controler/Action.interface.php');
class MarkersCarteAction implements Action, RequestAjaxAction {
	public function execute(){
    	require_once './model/classes/GereAnnonce.php';
			require_once './model/config/Config.Interface.php';
			if (!ISSET($_SESSION)) session_start();
			GereAnnonce::chargerMarkersCarte();
      //return "rien";
}

/*******************************************************************************************************/
/*******************************************************************************************************/
/*******************************************************************************************************/
/*******************************************************************************************************/
/*header('Access-Control-Allow-Origin: *');
//require 'config.php';
require_once('model/classes/Database.class.php');

function parseToXML($htmlStr)
{
		$xmlStr=str_replace('<','&lt;',$htmlStr);
		$xmlStr=str_replace('>','&gt;',$xmlStr);
		$xmlStr=str_replace('"','&quot;',$xmlStr);
		$xmlStr=str_replace("'",'&#39;',$xmlStr);
		$xmlStr=str_replace("&",'&amp;',$xmlStr);
		return $xmlStr;
}

$pdo= new PDO("mysql:dbname=gestionproprietes;host=localhost","root","root");
$requete="SELECT * FROM annonces ";
$res=$pdo->query($requete);


function ChercherId($value)
{
		$x="";
		$pdo= new PDO("mysql:dbname=gestionproprietes;host=localhost","root","root");
		$rqt = "SELECT path FROM imgsannonces,annonces WHERE imgsannonces.idannonce = '$value' LIMIT 1 ";
		$res = $pdo->query($rqt);
		if (!$res) {
				echo "nada";
		}
		foreach ($res as $row) {
				$x= $row['path'];
		}
		return $x;
}

header("Content-type: text/xml");

echo '<markers>';
foreach ($res as $row){

		echo '<marker ';
		echo 'path="' . ChercherId($row['idannonce']). '" ';
		echo 'lat="' . $row['latitude'] . '" ';
		echo 'lng="' . $row['longitude'] . '" ';
		echo 'name="' . parseToXML($row['prenom']) . '" ';
		echo 'address="' . parseToXML($row['adresse']) . '" ';
		echo 'type="' . $row['prix'] . '" ';
		echo '/>';
}

// End XML file
echo '</markers>';
	}*/
/*******************************************************************************************************/
/*******************************************************************************************************/
/*******************************************************************************************************/
/*******************************************************************************************************/

}//fIN CLASSE
