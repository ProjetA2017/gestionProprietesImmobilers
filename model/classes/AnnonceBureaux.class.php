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
class AnnonceBureaux {
    private $idAnnonce = "";
    private $typeAnnonce = "";
    private $nbrEmployes = "";
    private $inclus = "";
    private $infoSupplementaire = "";

    /*public function __construct($idAnnonce, $typeAnnonce, $nbrEmployes, $inclus, $infoSupplementaire) {
        $this->idAnnonce = $idAnnonce;
        $this->typeAnnonce = $typeAnnonce;
        $this->nbrEmployes = $nbrEmployes;
        $this->inclus = $inclus;
        $this->infoSupplementaire = $infoSupplementaire;
    }*/

    public function getIdAnnonce() {
        return $this->idAnnonce;
    }

    public function getTypeAnnonce() {
        return $this->typeAnnonce;
    }

    public function getNbrEmployes() {
        return $this->nbrEmployes;
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

    public function setNbrEmployes($nbrEmployes) {
        $this->nbrEmployes = $nbrEmployes;
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
        $this->nbrEmployes = $x->nbrEmployes;
        $this->inclus = $x->inclus;
        $this->infoSupplementaire = $x->infoSupplementaire;
    }

    public function loadFromArray($tab) {
        $this->idannonce = $tab["idannonce"];
        $this->typeAnnonce = $tab["typeannonce"];
        $this->nbrEmployes = $tab["nbremployes"];
        $this->inclus = $tab["inclus"];
        $this->infoSupplementaire = $tab["infosupplementaire"];
    }

}
