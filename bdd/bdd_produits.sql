CREATE DATABASE produits;
USE produits;

CREATE TABLE produit(
	id_produit INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom_produit VARCHAR(50),
    contenu_produit TEXT NULL
);

