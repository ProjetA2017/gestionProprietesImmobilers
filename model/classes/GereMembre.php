<?php
require_once 'model/dao/MembreDAO.php';
require_once 'model/classes/Membre.class.php';
require_once 'model/classes/Services.class.php';

class GereMembre {
    public static function connexion() {
        if (!ISSET($_SESSION)) session_start();
        if (ISSET($_SESSION["messagesFormConexError"])) {
          UNSET($_SESSION["messagesFormConexError"]);
        }
        $identifiant =$_REQUEST['identifiant'];
        $motDePasse =$_REQUEST['motDePasse'];
        $resultat = TRUE;
        if ($identifiant == "") {
            $_SESSION["messagesFormConexError"]["identifiant"] = "Il faut renseigner un identifiant : il est obligatoire";
            $resultat = FALSE;
        }
        if ($motDePasse == "") {
            $_SESSION["messagesFormConexError"]["motDePasse"] = "Le mot de passe obligatoire";
            $resultat = FALSE;
        }
        if ($resultat) {
            $dao = new MembreDAO();
            $membre = $dao->findMembre($identifiant);
            if ($membre == NULL) {
                $_SESSION["messagesFormConexError"]["identifiant"] = "Identifiant/Courriel inexistant";
                $resultat = FALSE;
            }
            elseif (!password_verify($motDePasse, $membre->getMotDePasse())) {
                $_SESSION["messagesFormConexError"]["motDePasse"] = "Mot de passe incorrect";
                $resultat = FALSE;
            }
            else {
                $_SESSION["connected"] = $identifiant;
                //UNSET($_SESSION["messagesFormConexError"]);
            }
        }
        return $resultat;
    }

    public static function creerUnCompte() {
        if (!ISSET($_SESSION)) {
          session_start();
        }
        if (ISSET($_SESSION["messageErreurCreationCompte"])) {
          UNSET($_SESSION["messageErreurCreationCompte"]);
        }
        $identifiant=$_REQUEST['identifiant'];
        $courriel =$_REQUEST['courriel'];
        $motDePasse =$_REQUEST['motdpass'];
        $motDePasseConfirm =$_REQUEST['motdpassConfirm'];
        $resultat = TRUE;
        if ($identifiant == "") {
            $_SESSION["messageErreurCreationCompte"]["identifiant"] = "Identifiant obligatoire";
            $resultat = FALSE;
        }
        if ($courriel == "") {
            $_SESSION["messageErreurCreationCompte"]["courriel"] = "Courriel obligatoire";
            $resultat = FALSE;
        }
        if ($motDePasse == "") {
            $_SESSION["messageErreurCreationCompte"]["motDePasse"] = "Mot de passe obligatoire";
            $resultat = FALSE;
        }
        if ($motDePasse != $motDePasseConfirm) {
            $_SESSION["messageErreurCreationCompte"]["motdpassConfirm"] = "Les mots de passe doivent être identiques";
            $resultat = FALSE;
        }
        if ($resultat) {
            $dao = new MembreDAO();
            $membre = $dao->findMembre($identifiant);
            if ($membre != NULL) {
               $_SESSION["messageErreurCreationCompte"]["identifiant"] = "Identifiant déjà existant";
               return FALSE;
            }
            $membre = $dao->findMembre($courriel);
            if ($membre != NULL) {
               $_SESSION["messageErreurCreationCompte"]["courriel"] = "courriel déjà existant";
               return FALSE;
            }
            $membre = new Membre();
            $membre->setIdentifiant($identifiant);
            $membre->setCourriel($courriel);
            $motDePasse = password_hash($_REQUEST['motdpass'], PASSWORD_BCRYPT);
            $membre->setMotDePasse($motDePasse);
            $dao->createMembre($membre);
            $_SESSION["connected"] = $identifiant;
        }
        return $resultat;
    }

    public static function getMessage($champ) {
        if (ISSET($_SESSION["messages"][$champ]))
            return $_SESSION["messages"][$champ];
        return "";
    }
}
