<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of annoncesapparts
 *
 * @author DrisAmarray
 */
class AnnonceAppart {
  private $idAnnonce = "";
  private $typeAnnonce = "";
  private $nbrPieces = "";
  private $position = "";
  private $isAnimauxPermis = "";
  private $inclus = "";
  private $infoSupplementaire = "";

  /*public function __construct($idAnnonce, $typeAnnonce, $nbrPieces, $position, $isAnimauxPermis) {
      $this->idAnnonce = $idAnnonce;
      $this->typeAnnonce = $typeAnnonce;
      $this->nbrPieces = $nbrPieces;
      $this->position = $position;
      $this->isAnimauxPermis = $isAnimauxPermis;
  }*/

  public function getIdAnnonce() {
      return $this->idAnnonce;
  }

  public function getTypeAnnonce() {
      return $this->typeAnnonce;
  }

  public function getNbrPieces() {
      return $this->nbrPieces;
  }

  public function getPosition() {
      return $this->position;
  }

  public function getIsAnimauxPermis() {
      return $this->isAnimauxPermis;
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

  public function setNbrPieces($nbrPieces) {
      $this->nbrPieces = $nbrPieces;
  }

  public function setPosition($position) {
      $this->position = $position;
  }

  public function setIsAnimauxPermis($isAnimauxPermis) {
      $this->isAnimauxPermis = $isAnimauxPermis;
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
      $this->nbrPieces = $x->nbrPieces;
      $this->position = $x->position;
      $this->isAnimauxPermis = $x->isAnimauxPermis;
      $this->inclus = $x->inclus;
      $this->infoSupplementaire = $x->infoSupplementaire;
  }

  public function loadFromArray($tab) {
      $this->idannonce = $tab["idannonce"];
      $this->typeAnnonce = $tab["typeannonce"];
      $this->nbrPieces = $tab["nbrpieces"];
      $this->position = $tab["position"];
      $this->isAnimauxPermis = $tab["animauxpermis"];
      $this->inclus = $tab["inclus"];
      $this->infoSupplementaire = $tab["infosupplementaire"];
  }

}
