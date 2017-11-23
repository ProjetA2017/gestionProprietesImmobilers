<?php

class Annonce {

    private $idannonce = "";
    private $idannonceur;
    private $nom = "";
    private $prenom = "";
    private $adresse = "";
    private $longitude = "";
    private $latitude = "";
    private $prix = "";
    private $typeAnnonce = "";
    private $typeLogement = "";
    private $date = "";
    private $status = "";
    private $dateTraitementAnnonce = "";

    /*function __construct($idannonce, $idannonceur, $nom, $prenom, $adresse, $longitude, $latitude, $prix, $typeAnnonce, $typeLogement)
    {
        $this->idannonce = $idannonce;
        $this->idannonceur = $idannonceur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->prix = $prix;
        $this->typeAnnonce = $typeAnnonce;
        $this->typeLogement = $typeLogement;
    }*/

    public function __construct()
    {
        $this->idannonce = "";
        $this->idannonceur = "";
        $this->nom = "";
        $this->prenom = "";
        $this->adresse = "";
        $this->longitude = "";
        $this->latitude = "";
        $this->prix = "";
        $this->typeAnnonce = "";
        $this->typeLogement = "";
        $this->date = "";
        $this->status = "";
        $this->dateTraitementAnnonce = "";
    }

    public function getIdAnnonceur() {
        return $this->idannonceur;
    }

    public function getIdAnnonce() {
        return $this->idannonce;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getTypeAnnonce() {
        return $this->typeAnnonce;
    }

    public function getTypeLogement() {
        return $this->typeLogement;
    }

    public function getDate() {
        return $this->date;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getDateTraitement() {
        return $this->dateTraitementAnnonce;
    }

    public function setIdAnnonceur($idannonceur) {
        $this->idannonceur = $idannonceur;
    }

    public function setIdAnnonce($idannonce) {
        $this->idannonce = $idannonce;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function setTypeAnnonce($typeAnnonce) {
        $this->typeAnnonce = $typeAnnonce;
    }

    public function setTypeLogement($typeLogement) {
        $this->typeLogement = $typeLogement;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setDateTraitement($date) {
        $this->dateTraitementAnnonce = $date;
    }

    public function loadFromObject($x) {
        $this->idannonce = $x->idannonce;
        $this->idannonceur = $x->idannonceur;
        $this->nom = $x->nom;
        $this->prenom = $x->prenom;
        $this->adresse = $x->adresse;
        $this->latitude = $x->latitude;
        $this->longitude = $x->longitude;
        $this->prix = $x->prix;
        $this->typeAnnonce = $x->typeannonce;
        $this->typeLogement = $x->logement;
        $this->date = $x->date;
        $this->status = $x->status;
        $this->dateTraitementAnnonce = $x->dateTraitementAnnonce;
    }

    public function loadFromArray($tab) {
        $this->idannonce = $tab["idannonce"];
        $this->idannonceur = $tab["idannonceur"];
        $this->latitude = $tab["latitude"];
        $this->longitude = $tab["longitude"];
        $this->prenom = $tab["prenom"];
        $this->nom = $tab["nfamille"];
        $this->adresse = $tab["adresse"];
        $this->prix = $tab["prix"];
        $this->typeAnnonce = $tab["typeannonce"];
        $this->typeLogement = $tab["typelogement"];
        $this->date = $tab["date"];
        $this->status = $tab["status"];
        $this->dateTraitementAnnonce = $tab["datetraitementannonce"];
    }

}
