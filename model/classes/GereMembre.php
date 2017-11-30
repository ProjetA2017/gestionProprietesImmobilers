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
        $motDePasse =$_REQUEST['motdpass'];
        $resultat = TRUE;
        if ($identifiant == "") {
            $_SESSION["messagesFormConexError"]["identifiant"] = "Il faut renseigner un identifiant : il est obligatoire";
            $resultat = FALSE;
        }
        if ($motDePasse == "") {
            $_SESSION["messagesFormConexError"]["motdpass"] = "Le mot de passe est obligatoire";
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
                /*$_SESSION['donnesMembre']["connected"] = $membre->getIdentifiant();
                $_SESSION['donnesMembre']["nom"] = $membre->getNom();
                $_SESSION['donnesMembre']["prenom"] = $membre->getPrenom();*/
                $_SESSION['membre']=$membre;
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
        $nom =$_REQUEST['nom'];
        $prenom =$_REQUEST['prenom'];
        $motDePasse =$_REQUEST['motdpass'];
        $motDePasseConfirm =$_REQUEST['motdpassconfirm'];
        $resultat = TRUE;
        if ($identifiant == "") {
            $_SESSION["messageErreurCreationCompte"]["identifiant"] = "Identifiant obligatoire";
            $resultat = FALSE;
        }
        if ($courriel == "") {
            $_SESSION["messageErreurCreationCompte"]["courriel"] = "Courriel obligatoire";
            $resultat = FALSE;
        }
        if ($nom == "") {
            $_SESSION["messageErreurCreationCompte"]["nom"] = "Il faut renseigner le nom : il est obligatoire";
            $resultat = FALSE;
        }
        if ($prenom == "") {
            $_SESSION["messageErreurCreationCompte"]["identifiant"] = "Il faut renseigner le prénom : il est obligatoire";
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
            $membre->setNom($nom);
            $membre->setPrenom($prenom);
            $motDePasse = password_hash($_REQUEST['motdpass'], PASSWORD_BCRYPT);
            $membre->setMotDePasse($motDePasse);
            $dao->createMembre($membre);
            /*$_SESSION['donnesMembre']["connected"] = $identifiant;
            $_SESSION['donnesMembre']["nom"] = $nom;
            $_SESSION['donnesMembre']["prenom"] = $prenom;*/
            $_SESSION['membre']=$membre;
        }
        return $resultat;
    }

    public static function getMessage($champ) {
        if (ISSET($_SESSION["messages"][$champ]))
            return $_SESSION["messages"][$champ];
        return "";
    }
}
