<?php
$host = 'localhost';
$port = '5432';
$dbname = 'nom_de_votre_base_de_donnees';
$user = 'votre_utilisateur_postgres';
$password = 'votre_mot_de_passe_postgres';

$db = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");

if (!$db) {
    die("Échec de la connexion : " . pg_last_error());
}
?>
