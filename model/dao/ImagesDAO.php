<?php
include_once('model/classes/Database.class.php');
include_once('model/classes/Image.class.php');
//include_once('model/classes/Liste.class.php');

class ImagesDAO {


  public static function findImage($idimage)
  {
          $db = Database::getInstance();
          try {
              $pstmt = $db->prepare("SELECT * FROM imgsannonces WHERE idimage = :x");
              $pstmt->execute(array(':x' => htmlspecialchars($idimage)));
              $result = $pstmt->fetch(PDO::FETCH_OBJ);
              if ($result)
              {
                      $image = new Image();
                      $image->loadFromObject($result);
                      $pstmt->closeCursor();
                      $pstmt = NULL;
                      Database::close();
                      return $image;
              }
              $pstmt->closeCursor();
              $pstmt = NULL;
              Database::close();
          }
          catch (PDOException $ex){
          }
          return NULL;
  }

  public static function findAllImagesUneAnnonce($idannonce)
  {
    $db = Database::getInstance();
    try {
      $requete = 'SELECT * FROM imgsannonces WHERE idannonce = "'.$idannonce.'"';
      $pstmt = $db->query($requete);
      $listeImgs = array();
      foreach($pstmt as $row) {
          array_push($listeImgs,$row);
        }
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
      return $listeImgs;
    } catch (PDOException $e) {
        print "Error!: ";
        return $listeImgs;
    }
  }

  public static function findGalerieUneAnnonce($idannonce)
  {
    $db = Database::getInstance();
    $listeImgs = array();
    $tableau = array();
    try {
      $pstmtMembre = $db->query('SELECT idannonceur AS membre FROM annonces WHERE `idannonce` =  "'.$idannonce.'"');
      $membreConnecte = $pstmtMembre->fetch();
      $tableau['membre'] = $membreConnecte['membre'];

      $requete = 'SELECT * FROM imgsannonces WHERE idannonce = "'.$idannonce.'"';
      $pstmt = $db->query($requete);
      foreach($pstmt as $row) {
          array_push($listeImgs,$row);
        }
      $tableau['lesImages'] = $listeImgs;
      $pstmt->closeCursor();
      $pstmt = NULL;
      Database::close();
      return $tableau;
    } catch (PDOException $e) {
        print "Error!: ";
        return $tableau;
    }
  }

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

public function deleteImage($x) {
  $db = Database::getInstance();
  try
  {
    $request = "DELETE FROM imgsannonces WHERE idimage = '".$x."'";
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

public function supprimerLesImagesAnnonce($x) {
  $db = Database::getInstance();
  try
  {
    $request = "DELETE FROM imgsannonces WHERE idannonce = '".$x."'";
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
