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

    public static function modifierAnnonceBureaux($annonceBureaux)
    {
        $db = Database::getInstance();
        try {
            $pstmt = $db->prepare("UPDATE annoncesbureaux SET typeannonce = :typeannonce,
                                                       nbremployes = :nbremployes,
                                                       inclus = :inclus,
                                                       infosupplementaire = :infosupplementaire
                                  WHERE idannonce = :idannonce");
            $pstmt->execute(array(':typeannonce' => htmlspecialchars($annonceBureaux->getTypeAnnonce()),
                                  ':nbremployes' => htmlspecialchars($annonceBureaux->getNbrEmployes()),
                                  ':inclus' => htmlspecialchars($annonceBureaux->getInclus()),
                                  ':infosupplementaire' => htmlspecialchars($annonceBureaux->getInfoSupplementaire()),
                                  ':idannonce' => htmlspecialchars($annonceBureaux->getIdAnnonce())
                                ));
            $pstmt->closeCursor();
            $pstmt = NULL;

            Database::close();
        } catch (PDOException $ex)
            {

            }
    }

    public function supprimerAnnonceBureaux($x) {
      $db = Database::getInstance();
      try
      {
        $request = "DELETE FROM annoncesbureaux WHERE idannonce = '".$x."'";
        return $db->exec($request);
        $request->closeCursor();
        $request = NULL;
        Database::close();
      }
      catch(PDOException $e)
      {
        throw $e;
      }
    }

}
