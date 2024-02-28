<?php
class Utilisateur {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function connexion($email, $mot_de_passe) {
        $query = $this->db->prepare("SELECT * FROM utilisateur WHERE email = :email AND mot_de_passe = :mot_de_passe");
        $query->bindParam(':email', $email);
        $query->bindParam(':mot_de_passe', $mot_de_passe);
        $query->execute();
        return $query->fetch();
    }

    public function inscription($nom, $prenom, $email, $mot_de_passe) {
        $query = $this->db->prepare("INSERT INTO utilisateur (nom, prenom, email, mot_de_passe) VALUES (:nom, :prenom, :email, :mot_de_passe)");
        $query->bindParam(':nom', $nom);
        $query->bindParam(':prenom', $prenom);
        $query->bindParam(':email', $email);
        $query->bindParam(':mot_de_passe', $mot_de_passe);
        return $query->execute();
    }
}
?>
