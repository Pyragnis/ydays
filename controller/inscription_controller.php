<?php
require_once('../modele/utilisateur.php');
require_once('../connexion.php');

if(isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mot_de_passe'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $utilisateur = new Utilisateur($db);
    $result = $utilisateur->inscription($nom, $prenom, $email, $mot_de_passe);

    if($result) {
        echo "Inscription réussie!";
    } else {
        echo "Une erreur s'est produite lors de l'inscription!";
    }
}
?>
