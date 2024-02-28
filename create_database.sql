CREATE DATABASE nom_de_votre_base_de_donnees;

\c nom_de_votre_base_de_donnees;

CREATE TABLE utilisateur (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100),
    mot_de_passe VARCHAR(255)
);
