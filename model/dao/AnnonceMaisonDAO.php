<?php
include_once('model/classes/Database.class.php');
include_once('model/classes/Annonce.class.php');
include_once('model/classes/AnnonceMaison.class.php');
//include_once('model/classes/Liste.class.php');

class AnnonceMaisonDAO {

    public static function findAnnonceMaison($idannonce)
    {
            $db = Database::getInstance();
            try {
                $pstmt = $db->prepare("SELECT * FROM annoncesmaison WHERE idannonce = :x");
                $pstmt->execute(array(':x' => htmlspecialchars($idannonce)));
                $result = $pstmt->fetch(PDO::FETCH_OBJ);
                if ($result)
                {
                        $annonceMaison = new AnnonceMaison();
                        $annonceMaison->loadFromObject($result);
                        $pstmt->closeCursor();
                        $pstmt = NULL;
                        Database::close();
                        return $annonceMaison;
                }
                $pstmt->closeCursor();
                $pstmt = NULL;
                Database::close();
            }
            catch (PDOException $ex){
            }
            return NULL;
    }

  public static function findAllAnnoncesMaison()
  {
    $db = Database::getInstance();
    try {
      $requete = 'SELECT * FROM annoncesmaison';
      $pstmt = $db->query($requete);
      $listeAnnoncesMaison = array();
      foreach($pstmt as $row) {
          array_push($listeAnnoncesMaison,$row);
        }
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
      return $listeAnnoncesMaison;
    } catch (PDOException $e) {
        print "Error!: ";// . $e->getMessage() . "<br/>";
        return $listeAnnoncesMaison;
    }
  }

    public static function createAnnonceMaison($annonceMaison)
    {
            $db = Database::getInstance();
            try {
                $pstmt = $db->prepare("INSERT INTO annoncesmaison (idannonce, typeannonce, nbrchambres, inclus, infosupplementaire)
                                       VALUES (:a,:b,:c,:d,:e)");
                $pstmt->execute(array(':a' => htmlspecialchars($annonceMaison->getIdAnnonce()),
                                      ':b' => htmlspecialchars($annonceMaison->getTypeAnnonce()),
                                      ':c' => htmlspecialchars($annonceMaison->getNbrChambres()),
                                      ':d' => htmlspecialchars($annonceMaison->getInclus()),
                                      ':e' => htmlspecialchars($annonceMaison->getInfoSupplementaire())
                                      ));
                $pstmt->closeCursor();
                $pstmt = NULL;
                Database::close();
            }
            catch (PDOException $ex){
            }
    }

    public static function modifierAnnonceMaison($annonceMaison)
    {
        $db = Database::getInstance();
        try {
            $pstmt = $db->prepare("UPDATE annoncesmaison SET typeannonce = :typeannonce,
                                                       nbrchambres = :nbrchambres,
                                                       inclus = :inclus,
                                                       infosupplementaire = :infosupplementaire
                                  WHERE idannonce = :idannonce");
            $pstmt->execute(array(':typeannonce' => htmlspecialchars($annonceMaison->getTypeAnnonce()),
                                  ':nbrchambres' => htmlspecialchars($annonceMaison->getNbrChambres()),
                                  ':inclus' => htmlspecialchars($annonceMaison->getInclus()),
                                  ':infosupplementaire' => htmlspecialchars($annonceMaison->getInfoSupplementaire()),
                                  ':idannonce' => htmlspecialchars($annonceMaison->getIdAnnonce())
                                ));
            $pstmt->closeCursor();
            $pstmt = NULL;

            Database::close();
        } catch (PDOException $ex)
            {

            }
    }
}
