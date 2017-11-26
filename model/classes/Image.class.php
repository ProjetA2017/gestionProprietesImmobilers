<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Image
 *
 * @author DrisAmarray
 */
class Image {
    private $idimage = "";
    private $idannonce = "";
    private $filename = "";
    private $path = "";

    public function __construct() {

    }

    public function getIdimage() {
        return $this->idimage;
    }

    public function getIdannonce() {
        return $this->idannonce;
    }

    public function getFilename() {
        return $this->filename;
    }

    public function getPath() {
        return $this->path;
    }

    public function setIdimage($idimage) {
        $this->idimage = $idimage;
    }

    public function setIdannonce($idannonce) {
        $this->idannonce = $idannonce;
    }

    public function setFilename($filename) {
        $this->filename = $filename;
    }

    public function setPath($path) {
        $this->path = $path;
    }

    function loadFromObject($x) {
        $this->idannonce = $x->idannonce;
        $this->idimage = $x->idimage;
        $this->filename = $x->filename;
        $this->path = $x->path;
    }

    function loadFromArray($tab) {
        $this->idimage = $tab["idimage"];
        $this->idannonce = $tab["idannonce"];
        $this->filename = $tab["filename"];
        $this->path = $tab["path"];
    }    
}
