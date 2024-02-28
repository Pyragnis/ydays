<?php
require_once('../modele/utilisateur.php');
require_once('../connexion.php');

if(isset($_POST['email'], $_POST['mot_de_passe'])) {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $utilisateur = new Utilisateur($db);
    $result = $utilisateur->connexion($email, $mot_de_passe);

    if($result) {
        echo "Connexion réussie!";
    } else {
        echo "Identifiants invalides!";
    }
}
?>
