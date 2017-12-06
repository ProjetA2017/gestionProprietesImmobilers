<?php
require_once 'model/dao/MembreDAO.php';
require_once 'model/classes/Membre.class.php';
require_once 'model/classes/Messagerie.class.php';
require_once 'model/dao/MessagerieDAO.php';
require_once 'model/classes/Services.class.php';

class GereMessage {
  public static function envoyer() {
    $resultat = TRUE;
        if (!ISSET($_SESSION)) {
          session_start();
        }
        //TODO : N oublie pas de valider coté serveur
        /*if(ISSET($_REQUEST['idannonce']))
          $idannonce = $_REQUEST['idannonce'];*/
        $idannonceur = $_REQUEST['identifiant'];
        if($idannonceur != 'admin'){
          $dao = new MembreDAO();
          $courrielAnnononceur = $dao->getCourriel($idannonceur);
        } else {
          $courrielAnnononceur = 'comptedetudiant@gmail.com';
        }
        $nomDestinateur = $_REQUEST['nomcomplet'];
        $courrielDestinateur = $_REQUEST['courriel'];
        $tel = $_REQUEST['tel'];
        date_default_timezone_set('America/Montreal');
        $date = $maintenant = date("Y-m-d H:i:s");//now()*/
        $idmessage = $idannonceur.'_'.$courrielDestinateur.'_'.$date;
        $message = $_REQUEST['message'];

        if ($resultat) {
            $messagerie = new Messagerie();
            $messagerie->setIdentifiantAnnonceur($idannonceur);
            $messagerie->setCourrielAnnonceur($courrielAnnononceur);
            $messagerie->setCourriel($courrielDestinateur);
            $messagerie->setNomComplet($nomDestinateur);
            $messagerie->setTel($tel);
            $messagerie->setMessage($message);
            $messagerie->setIdmessage($idmessage);
            $dao = new MessagerieDAO();
            $dao->createMessage($messagerie);
            $header="MIME-Version: 1.0\r\n";
            $header.='From:"GestionPropriétés.com"<comptedetudiant@gmail.com>'."\n";
            $header.='Content-Type:text/html; charset="uft-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';
            $msg='
            <html>
            	<body>
            		<div align="left">
            			 '.$message.'
                </div>
            			<br />
            	</body>
            </html>
            ';
            $msg = wordwrap($msg, 70, "\r\n");
			      mail('comptedetudiant@gmail.com', 'Message', $msg, $header);
            $_SESSION["messagesSucces"] = "Message envoyé!";
        }
        if(ISSET($_REQUEST['idannonce']))
          $_SESSION['PRG'] = $_REQUEST['idannonce'];//pour le PRG
        return $resultat;
  }
}
