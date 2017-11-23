<?php
include_once('model/classes/Database.class.php');
include_once('model/classes/Annonce.class.php');
include_once('model/classes/AnnonceBureaux.class.php');
//include_once('model/classes/Liste.class.php');

class AnnonceBureauxDAO {

    public static function findAnnonceBureaux($idannonce)
    {
            $db = Database::getInstance();
            try {
                $pstmt = $db->prepare("SELECT * FROM annoncesbureaux WHERE idannonce = :x");
                $pstmt->execute(array(':x' => htmlspecialchars($idannonce)));
                $result = $pstmt->fetch(PDO::FETCH_OBJ);
                if ($result)
                {
                        $annonceBureaux = new AnnonceBureaux();
                        $annonceBureaux->loadFromObject($result);
                        $pstmt->closeCursor();
                        $pstmt = NULL;
                        Database::close();
                        return $annonceBureaux;
                }
                $pstmt->closeCursor();
                $pstmt = NULL;
                Database::close();
            }
            catch (PDOException $ex){
            }
            return NULL;
    }


  public static function findAllAnnoncesBureaux()
  {
    $db = Database::getInstance();
    try {
      $requete = 'SELECT * FROM annoncesbureaux';
      $pstmt = $db->query($requete);
      $listeAnnoncesBureaux = array();
      foreach($pstmt as $row) {
          array_push($listeAnnoncesBureaux,$row);
        }
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
      return $listeAnnoncesBureaux;
    } catch (PDOException $e) {
        print "Error!: ";// . $e->getMessage() . "<br/>";
        return $listeAnnoncesBureaux;
    }
  }

    public static function createAnnonceBureaux($annonceBureaux)
    {
            $db = Database::getInstance();
            try {
                $pstmt = $db->prepare("INSERT INTO annoncesbureaux (idannonce, typeannonce, nbremployes, inclus, infosupplementaire)
                                       VALUES (:a,:b,:c,:d,:e)");
                $pstmt->execute(array(':a' => htmlspecialchars($annonceBureaux->getIdAnnonce()),
                                      ':b' => htmlspecialchars($annonceBureaux->getTypeAnnonce()),
                                      ':c' => htmlspecialchars($annonceBureaux->getNbrEmployes()),
                                      ':d' => htmlspecialchars($annonceBureaux->getInclus()),
                                      ':e' => htmlspecialchars($annonceBureaux->getInfoSupplementaire())
                                      ));
                $pstmt->closeCursor();
                $pstmt = NULL;
                Database::close();
            }
            catch (PDOException $ex){
            }
    }

}
