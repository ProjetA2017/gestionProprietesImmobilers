<?php
include_once('model/classes/Database.class.php');
include_once('model/classes/Annonce.class.php');
//include_once('model/classes/Liste.class.php');

class AnnonceDAO {

    public static function findAnnonce($identifiant)
    {
            $db = Database::getInstance();
            try {
                $pstmt = $db->prepare("SELECT * FROM annonces WHERE IDENTIFIANT = :x");
                $pstmt->execute(array(':x' => htmlspecialchars($identifiant)));
                $result = $pstmt->fetch(PDO::FETCH_OBJ);
                if ($result)
                {
                        $annonce = new Annonce();
                        $annonce->loadFromObject($result);
                        $pstmt->closeCursor();
                        $pstmt = NULL;
                        Database::close();
                        return $annonce;
                }
                $pstmt->closeCursor();
                $pstmt = NULL;
                Database::close();
            }
            catch (PDOException $ex){
            }
            return NULL;
    }


  public static function findAllAnnonces()
  {
    $db = Database::getInstance();
    try {
      $requete = 'SELECT * FROM annonces';
      $pstmt = $db->query($requete);
      $listeAnnonces = array();
      foreach($pstmt as $row) {
          /*$annonce = new Annonce(); // si l ontravaille avec une liste d'objets
          $annonce->loadFromArray($row);
          $listeAnnonces->add($annonce);*/
          array_push($listeAnnonces,$row);
        }
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
      return $listeAnnonces;
    } catch (PDOException $e) {
        print "Error!: ";// . $e->getMessage() . "<br/>";
        return $listeAnnonces;
    }
  }

    public static function findLastAnnonce()
    {
            $db = Database::getInstance();
            try
            {
              $pstmt = $db->query("SELECT MAX(idannonce) AS last_annonce FROM annonces");//TODO:la refaire autrement (mettre le id annonce dans la session pour la récupérer lors du upload image)
              //$pstmt->execute();
              $derniereAnnonce = $pstmt->fetch();
              $pstmt->closeCursor();
              $pstmt = NULL;
              Database::close();
              return $derniereAnnonce['last_annonce'];
            }
              catch (PDOException $ex)
            {

            }
          return 0;
    }

    public static function createAnnonce($annonce)
    {
            $db = Database::getInstance();
            try {
                $pstmt = $db->prepare("INSERT INTO annonces (idannonce, idannonceur,latitude,longitude,prenom,nfamille,adresse,prix,typeannonce,typelogement)
                                       VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i,:j)");
                $pstmt->execute(array(':a' => htmlspecialchars($annonce->getIdAnnonce()),
                                      ':b' => htmlspecialchars($annonce->getIdAnnonceur()),
                                      ':c' => htmlspecialchars($annonce->getLatitude()),
                                      ':d' => htmlspecialchars($annonce->getLongitude()),
                                      ':e' => htmlspecialchars($annonce->getPrenom()),
                                      ':f' => htmlspecialchars($annonce->getNom()),
                                      ':g' => htmlspecialchars($annonce->getAdresse()),
                                      ':h' => htmlspecialchars($annonce->getPrix()),
                                      ':i' => htmlspecialchars($annonce->getTypeAnnonce()),
                                      ':j' => htmlspecialchars($annonce->getTypeLogement())
                                      ));
                $pstmt->closeCursor();
                $pstmt = NULL;
                Database::close();
            }
            catch (PDOException $ex){
            }
    }

    public static function uploaderImagesAnnonce($idImage, $idAnnonce,$filename,$path)
    //public static function uploaderImagesAnnonce($idannonce)//test
    {
            $db = Database::getInstance();
            try {
                $pstmt = $db->prepare("INSERT INTO imgsannonces (idimage,idannonce,filename,path)
                                       VALUES (:a,:b,:c,:d)");
                $pstmt->execute(array(':a' => htmlspecialchars($idImage),
                                      ':b' => htmlspecialchars($idAnnonce),
                                      ':c' => htmlspecialchars($filename),
                                      ':d' => htmlspecialchars($path)
                                    ));
                                    /*$pstmt->execute(array(':a' => 's4444me',
                                                          ':b' =>  $idannonce,
                                                          ':c' => 'dd',
                                                          ':d' => 'dd'
                                                        ));*///test
                $pstmt->closeCursor();
                $pstmt = NULL;
                Database::close();
            }
            catch (PDOException $ex){
            }
    }

    public static function chercherIdMarker($value)
    {
      $x="";
      $db = Database::getInstance();
      try
      {
        $requete = "SELECT path FROM imgsannonces,annonces WHERE imgsannonces.idannonce = '$value' LIMIT 1 ";
        $pstmt = $db->query($requete);
        if (!$pstmt) {
            echo "rien";
        }
        foreach ($pstmt as $row) {
            $x= $row['path'];
        }
        $pstmt->closeCursor();
        $pstmt = NULL;
        Database::close();
        return $x;
      }
      catch (PDOException $e)
      {
        print "Error!: ";
        return $x;
      }
    }

}
