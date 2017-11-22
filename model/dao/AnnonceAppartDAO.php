<?php
include_once('model/classes/Database.class.php');
include_once('model/classes/Annonce.class.php');
include_once('model/classes/AnnonceAppart.class.php');
//include_once('model/classes/Liste.class.php');

class AnnonceAppartDAO {


    public static function findAnnonceAppart($idannonce)
    {
            $db = Database::getInstance();
            try {
                $pstmt = $db->prepare("SELECT * FROM annoncesapparts WHERE idannonce = :x");
                $pstmt->execute(array(':x' => htmlspecialchars($idannonce)));
                $result = $pstmt->fetch(PDO::FETCH_OBJ);
                if ($result)
                {
                        $annonceAppart = new AnnonceAppart();
                        $annonceAppart->loadFromObject($result);
                        $pstmt->closeCursor();
                        $pstmt = NULL;
                        Database::close();
                        return $annonceAppart;
                }
                $pstmt->closeCursor();
                $pstmt = NULL;
                Database::close();
            }
            catch (PDOException $ex){
            }
            return NULL;
    }


  public static function findAllAnnoncesAppart()
  {
    $db = Database::getInstance();
    try {
      $requete = 'SELECT * FROM annoncesapparts';
      $pstmt = $db->query($requete);
      $listeAnnoncesApparts = array();
      foreach($pstmt as $row) {
          array_push($listeAnnoncesApparts,$row);
        }
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
      return $listeAnnoncesApparts;
    } catch (PDOException $e) {
        print "Error!: ";// . $e->getMessage() . "<br/>";
        return $listeAnnoncesApparts;
    }
  }

    public static function createAnnonceAppart($annonceAppart)
    {
            $db = Database::getInstance();
            try {
                $pstmt = $db->prepare("INSERT INTO annoncesapparts (idannonce, typeannonce, nbrpieces, position, animauxpermis, inclus, infosupplementaire)
                                       VALUES (:a,:b,:c,:d,:e,:f,:g)");
                $pstmt->execute(array(':a' => htmlspecialchars($annonceAppart->getIdAnnonce()),
                                      ':b' => htmlspecialchars($annonceAppart->getTypeAnnonce()),
                                      ':c' => htmlspecialchars($annonceAppart->getNbrPieces()),
                                      ':d' => htmlspecialchars($annonceAppart->getPosition()),
                                      ':e' => htmlspecialchars($annonceAppart->getIsAnimauxPermis()),
                                      ':f' => htmlspecialchars($annonceAppart->getInclus()),
                                      ':g' => htmlspecialchars($annonceAppart->getInfoSupplementaire())
                                      ));
                $pstmt->closeCursor();
                $pstmt = NULL;
                Database::close();
            }
            catch (PDOException $ex){
            }
    }
}
