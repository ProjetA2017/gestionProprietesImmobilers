<?php
include_once('model/classes/Database.class.php');
include_once('model/classes/Annonce.class.php');
include_once('model/classes/Liste.class.php');

class AnnonceDAO {

  public static function findAnnonce($idannonce)
  {
          $db = Database::getInstance();
          try {
              $pstmt = $db->prepare("SELECT * FROM annonces WHERE idannonce = :x");
              $pstmt->execute(array(':x' => htmlspecialchars($idannonce)));
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

  public static function findAnnonceAvecType($idannonce, $table)
  {
          $db = Database::getInstance();
          try {
              $pstmt = $db->prepare("SELECT * FROM annonces, ".$table." WHERE `annonces`.`idannonce` = :x AND `annonces`.`idannonce` = `".$table."`.`idannonce`");
              //SELECT * FROM annonces, annoncesmaison WHERE `annonces`.`idannonce` = 'dris_maison_45.5141734_-73.68231480000003' AND `annonces`.`idannonce` = `annoncesmaison`.`idannonce`
              $pstmt->execute(array(':x' => htmlspecialchars($idannonce)));
              $result = $pstmt->fetch(PDO::FETCH_OBJ);
              if ($result) return $result;
              $pstmt->closeCursor();
              $pstmt = NULL;
              Database::close();
          }
          catch (PDOException $ex){
          }
          return NULL;
  }

  public static function findTop4Annonces()
  {
    $db = Database::getInstance();
    try {
      $requete = 'SELECT * FROM annonces WHERE typelogement = "maison" AND typeannonce = "vente" ORDER BY prix ASC LIMIT 4';
      $pstmt = $db->query($requete);
      $listeAnnonces = array();
      foreach($pstmt as $row) {
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

  public static function findAllAnnonces()
  {
    $db = Database::getInstance();
    try {
      $requete = 'SELECT * FROM annonces';
      $pstmt = $db->query($requete);
      $listeAnnonces = array();
      foreach($pstmt as $row) {
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

  public static function findAllAnnoncesByMembre($idannonceur)
  {
    $db = Database::getInstance();
    try {
      $requete = 'SELECT * FROM annonces WHERE idannonceur = "'.$idannonceur.'"';
      $pstmt = $db->query($requete);
      $listeAnnonces = array();
      foreach($pstmt as $row) {
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

//TODO : à revoir utiliser peur être findAllAnnonces qui retourne un tableau
  public static function findAllAnnoncesListe()
  {
    $db = Database::getInstance();
    try {
      $liste = new Liste();
      $requete = 'SELECT * FROM annonces ORDER BY prix DESC';
      $pstmt = $db->query($requete);
      foreach($pstmt as $row) {
          $annonce = new Annonce();
          $annonce->loadFromArray($row);
          $liste->add($annonce);
        }
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
      return $liste;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return $liste;
    }
  }

    public static function findLastAnnonce()
    {
            $db = Database::getInstance();
            try
            {
              $pstmt = $db->query("SELECT idannonce AS last_annonce FROM annonces ORDER BY id DESC LIMIT 1");//TODO:la refaire autrement (mettre le id annonce dans la session pour la récupérer lors du upload image)
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

    public static function ajouterImageAnnonce($idannonce, $img)
  {
          $db = Database::getInstance();
          try {
              $pstmt = $db->prepare("UPDATE annonces SET imgannonce = :img
                                     WHERE idannonce = :id");
              $pstmt->execute(array(':img' => htmlspecialchars($img),
                                    ':id' => htmlspecialchars($idannonce)
                                    ));
              $pstmt->closeCursor();
              $pstmt = NULL;
              Database::close();
          }
          catch (PDOException $ex){
          }
  }

  //TODO : A enlever, plus besoin => migrer dans ImagesDAO
  public static function uploaderImagesAnnonce($idImage, $idAnnonce,$filename,$path)
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

    public function supprimerAnnonce($x) {
      $db = Database::getInstance();
      try
      {
        $request = "DELETE FROM annonces WHERE idannonce = '".$x."'";
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

    public static function modifierAnnonce($annonce)
    {
        $db = Database::getInstance();
        try {
            $pstmt = $db->prepare("UPDATE annonces SET latitude = :latitude,
                                                       longitude = :longitude,
                                                       adresse = :adresse,
                                                       prix = :prix,
                                                       typeannonce = :typeannonce,
                                                       typelogement = :typelogement,
                                                       status = :status,
                                                       datetraitementannonce = :datetraitementannonce
                                  WHERE idannonce = :idannonce");
            $pstmt->execute(array(':latitude' => htmlspecialchars($annonce->getLatitude()),
                                  ':longitude' => htmlspecialchars($annonce->getLongitude()),
                                  ':adresse' => htmlspecialchars($annonce->getAdresse()),
                                  ':prix' => htmlspecialchars($annonce->getPrix()),
                                  ':typeannonce' => htmlspecialchars($annonce->getTypeAnnonce()),
                                  ':typelogement' => htmlspecialchars($annonce->getTypeLogement()),
                                  ':status' => htmlspecialchars($annonce->getStatus()),
                                  ':datetraitementannonce' => htmlspecialchars($annonce->getDateTraitement()),
                                  ':idannonce' => htmlspecialchars($annonce->getIdAnnonce())
                                ));
            $pstmt->closeCursor();
            $pstmt = NULL;

            Database::close();
        } catch (PDOException $ex)
            {

            }
    }


    //Utilisé pour la page recherche selon des critères et permettre la pagination
    public static function getPage($numPage, $critere="toutes")
    {
          $requete = "";
          $tableau = array();
          $listeAnnonces = array();
          $TAILLE_PAGE = 5;
          //$liste = new ListeAffichage();//array() au lieu de list
          $debut = ($numPage - 1)*$TAILLE_PAGE;
          $pstmt = "";
          $afficher = "";
          if ($critere[0]=='2') $afficher="date";
          else if ($critere == "toutes") $afficher="toutes";
          else if ($critere == "location" || $critere == "vente") $afficher="typeannonce";
          else $afficher="ville";
      try {
            $db = Database::getInstance();
            switch ($afficher) {
                case  "toutes" :
                    $pstmtNbr = $db->query("SELECT COUNT(idannonce) AS nbrannonces FROM annonces");
                    $Nbr = $pstmtNbr->fetch();
                    $tableau['nbrDeResultat'] = $Nbr['nbrannonces'];
                    $pstmt = $db->prepare('SELECT * FROM annonces
                                           ORDER BY dateannonce DESC LIMIT '.$debut.', '.$TAILLE_PAGE);
                    $pstmt->execute();
                break;

                case  "typeannonce" :
                    $pstmtNbr = $db->query("SELECT COUNT(idannonce) AS nbrannonces
                                            FROM annonces WHERE typeannonce  = '.$critere.'");
                    $Nbr = $pstmtNbr->fetch();
                    $tableau['nbrDeResultat'] = $Nbr['nbrannonces'];
                    $pstmt = $db->prepare('SELECT * FROM annonces WHERE typeannonce = "'.$critere.'"
                                           ORDER BY IDENTIFIANT ASC LIMIT '.$debut.', '.$TAILLE_PAGE);
                    $pstmt->execute();
                break;

                case  "date" :
                    $_SESSION['ladate'] = $critere;
                    $pstmtNbr = $db->query("SELECT COUNT(`user`.`IDENTIFIANT`) AS NBRUTILISATEURS
                                            FROM `user`, `disponibilites`
                                            WHERE `user`.IDENTIFIANT = `disponibilites`.IDENTIFIANT
                                            AND `user`.VISIBLE = 1
                                            AND DATE('".$critere."') BETWEEN `disponibilites`.DATEDEBUT AND `disponibilites`.DATEFIN");
                    $Nbr = $pstmtNbr->fetch();
                    $tableau['nbrDeResultat'] = $Nbr['NBRUTILISATEURS'];
                    $pstmt = $db->prepare('SELECT `user`.*, `disponibilites`.`DATEDEBUT`, `disponibilites`.`DATEFIN`
                                           FROM `user`, `disponibilites`
                                           WHERE `user`.`IDENTIFIANT`=`disponibilites`.`IDENTIFIANT`
                                           AND `user`.`VISIBLE`= 1 AND
                                           /*DATE("'.$critere.'") BETWEEN `disponibilites`.`DATEDEBUT` AND `disponibilites`.`DATEFIN`*/
                                           :critere BETWEEN `disponibilites`.`DATEDEBUT` AND `disponibilites`.`DATEFIN`
                                           ORDER BY IDENTIFIANT ASC LIMIT '.$debut.', '.$TAILLE_PAGE);
                    $pstmt->execute(array(':critere' => htmlspecialchars($critere)));
                    //array(':critere' => htmlspecialchars($critere))
                break;

                case "ville" :
                //default :
                    $pstmtNbr = $db->query("SELECT COUNT(IDENTIFIANT) AS NBRUTILISATEURS FROM user
                                            WHERE VISIBLE = 1 AND VILLE = '.$critere.'");
                    $Nbr = $pstmtNbr->fetch();
                    $tableau['nbrDeResultat'] = $Nbr['NBRUTILISATEURS'];
                    $pstmt = $db->prepare('SELECT * FROM user WHERE VISIBLE = 1 AND VILLE = :critere
                                 ORDER BY IDENTIFIANT ASC LIMIT '.$debut.', '.$TAILLE_PAGE);
                    $pstmt->execute(array(':critere' => htmlspecialchars($critere)));
            }

             /*foreach($pstmt as $row) { //initial
                $user = new Utilisateur();
                $user->loadFromArray($row);
                $liste->add($user);
              }*/
              foreach($pstmt as $row) {
                  array_push($listeAnnonces,$row);
                }
              /*if($tableau['nbrDeResultat'] == 0)
                $_SESSION["messagesNbrError"] = "0";*/
              $tableau['liste'] = $listeAnnonces;
              $pstmt->closeCursor();
              $pstmt = null;
              Database::close();
              return $tableau;
      } catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
          return $tableau;
      }
    }

}
