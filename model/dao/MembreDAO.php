<?php
include_once('model/classes/Database.class.php');
include_once('model/classes/Membre.class.php');
//include_once('model/classes/ListeAffichage.class.php');

class MembreDAO {

public static function findMembre($identifiant)
{
        $db = Database::getInstance();
        try {
            $pstmt = $db->prepare("SELECT * FROM membre WHERE IDENTIFIANT = :x OR COURRIEL = :x");
            $pstmt->execute(array(':x' => htmlspecialchars($identifiant)));

            $result = $pstmt->fetch(PDO::FETCH_OBJ);

            if ($result)
            {
                    $membre = new Membre();
                    $membre->loadFromObject($result);
                    $pstmt->closeCursor();
                    $pstmt = NULL;
                    Database::close();
                    return $membre;
            }
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
        }
        catch (PDOException $ex){
        }
        return NULL;
}

public static function createMembre($membre)
{
        $db = Database::getInstance();
        try {
            $pstmt = $db->prepare("INSERT INTO membre (`IDENTIFIANT`, `MOTDEPASSE`, `COURRIEL`, `NOM`, `PRENOM`)
                                   VALUES (:i,:mp,:c,:n,:p)");
            $pstmt->execute(array(':i' => htmlspecialchars($membre->getIdentifiant()),
                                  ':mp' => htmlspecialchars($membre->getMotDePasse()),
                                  ':c' => htmlspecialchars($membre->getCourriel()),
                                  ':n' => htmlspecialchars($membre->getNom()),
                                  ':p' => htmlspecialchars($membre->getPrenom())
                                  ));
            $pstmt->closeCursor();
            $pstmt = NULL;
            Database::close();
        }
        catch (PDOException $ex){
        }
}
}
