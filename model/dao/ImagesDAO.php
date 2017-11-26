<?php
include_once('model/classes/Database.class.php');
include_once('model/classes/Image.class.php');
//include_once('model/classes/Liste.class.php');

class ImagesDAO {

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
}
