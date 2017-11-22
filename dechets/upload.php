<?php

if(!empty($_FILES)){
    try{

        $pdo=new PDO("mysql:dbname=gestionproprietes;host:localhost","root","root");
    }catch(PDOException $e){
        print "Error: ".$e->getMessage()."<br/>";
        die();
    }
    $requeteId=$pdo->prepare("SELECT MAX(id) as last_publication from annonces");
    $requete=$requeteId->execute();
    $id=$requeteId->fetch(PDO::FETCH_ASSOC);
    $idannonce=$id['last_publication'];
    $requeteId->closeCursor();
    $targetDir="upload/";
    $filename=$_FILES['file']['name'];
    $tmpName=$_FILES['file']['tmp_name'];
    $idimage=$idannonce.'_'.$filename;
    $targetFile=$targetDir.'_'.$idimage;


    if(move_uploaded_file($tmpName,$targetFile)){
        $smt=$pdo->prepare("INSERT INTO imgsannonces (idimage,idannonce,filename,path) VALUES(?,?,?,?)");
        $smt->bindParam(1,$idimage);
        $smt->bindParam(2,$idannonce);
        $smt->bindParam(3,$filename);
        $smt->bindParam(4,$targetFile);
        $smt->execute();
        $smt->closeCursor();
    }



}
