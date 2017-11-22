<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of annoncesbureaux
 *
 * @author DrisAmarray
 */
class AnnonceMaison {
    private $idAnnonce = "";
    private $typeAnnonce = "";
    private $nbrChambres = "";
    private $inclus = "";
    private $infoSupplementaire = "";

    /*public function __construct($idAnnonce, $typeAnnonce, $nbrChambres, $inclus, $infoSupplementaire) {
        $this->idAnnonce = $idAnnonce;
        $this->typeAnnonce = $typeAnnonce;
        $this->nbrChambres = $nbrChambres;
        $this->inclus = $inclus;
        $this->infoSupplementaire = $infoSupplementaire;
    }*/

    public function getIdAnnonce() {
        return $this->idAnnonce;
    }

    public function getTypeAnnonce() {
        return $this->typeAnnonce;
    }

    public function getNbrChambres() {
        return $this->nbrChambres;
    }

    public function getInclus() {
        return $this->inclus;
    }

    public function getInfoSupplementaire() {
        return $this->infoSupplementaire;
    }

    public function setIdAnnonce($idAnnonce) {
        $this->idAnnonce = $idAnnonce;
    }

    public function setTypeAnnonce($typeAnnonce) {
        $this->typeAnnonce = $typeAnnonce;
    }

    public function setNbrChambres($nbrChambres) {
        $this->nbrChambres = $nbrChambres;
    }

    public function setInclus($inclus) {
        $this->inclus = $inclus;
    }

    public function setInfoSupplementaire($infoSupplementaire) {
        $this->infoSupplementaire = $infoSupplementaire;
    }

    public function loadFromObject($x) {
        $this->idannonce = $x->idannonce;
        $this->typeAnnonce = $x->typeannonce;
        $this->nbrChambres = $x->nbrChambres;
        $this->inclus = $x->inclus;
        $this->infoSupplementaire = $x->infoSupplementaire;
    }

    public function loadFromArray($tab) {
        $this->idannonce = $tab["idannonce"];
        $this->typeAnnonce = $tab["typeannonce"];
        $this->nbrChambres = $tab["nbrchambres"];
        $this->inclus = $tab["inclus"];
        $this->infoSupplementaire = $tab["infosupplementaire"];
    }

}
