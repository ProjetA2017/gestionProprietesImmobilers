<?php
/**
 * Description of Messagerie
 *
 * @author DrisAmarray
 */
class Messagerie {
    private $idmessage = "";
    private $nomComplet = "";
    private $courriel = "";
    private $tel = "";
    private $message = "";
    private $identifiantAnnonceur = "";
    private $courrielAnnonceur = "";

    public function __construct() {

    }

    public function getIdmessage() {
        return $this->idmessage;
    }

    public function getNomComplet() {
        return $this->nomComplet;
    }

    public function getCourriel() {
        return $this->courriel;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getIdentifiantAnnonceur() {
        return $this->identifiantAnnonceur;
    }

    public function getCourrielAnnonceur() {
        return $this->courrielAnnonceur;
    }

    public function setIdmessage($idmessage) {
        $this->idmessage = $idmessage;
    }

    public function setNomComplet($nomComplet) {
        $this->nomComplet = $nomComplet;
    }

    public function setCourriel($courriel) {
        $this->courriel = $courriel;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setIdentifiantAnnonceur($identifiantAnnonceur) {
        $this->identifiantAnnonceur = $identifiantAnnonceur;
    }

    public function setCourrielAnnonceur($courrielAnnonceur) {
        $this->courrielAnnonceur = $courrielAnnonceur;
    }




}
