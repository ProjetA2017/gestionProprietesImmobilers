<?php
include_once('model/classes/Database.class.php');
include_once('model/classes/Messagerie.class.php');
//include_once('model/classes/ListeAffichage.class.php');

class MessagerieDAO {

public static function createMessage($message)
{
        $db = Database::getInstance();
        try {
            $pstmt = $db->prepare("INSERT INTO messagerie (`idmessage`, `idannonceur`, `courrielannonceur`, `nomcomplet`, `courriel`, `tel`, `message`)
                                   VALUES (:im,:ida,:ca,:nc,:c,:tel,:msg)");
            $pstmt->execute(array(':im' => htmlspecialchars($message->getIdmessage()),
                                  ':ida' => htmlspecialchars($message->getIdentifiantAnnonceur()),
                                  ':ca' => htmlspecialchars($message->getCourrielAnnonceur()),
                                  ':nc' => htmlspecialchars($message->getNomComplet()),
                                  ':c' => htmlspecialchars($message->getCourriel()),
                                  ':tel' => htmlspecialchars($message->getTel()),
                                  ':msg' => htmlspecialchars($message->getMessage())
                                  ));
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
        }
        catch (PDOException $ex){
        }
}

}
