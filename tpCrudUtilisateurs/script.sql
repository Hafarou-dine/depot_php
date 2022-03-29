CREATE DATABASE utilisateurs;
USE utilisateurs;

CREATE TABLE utilisateur(
	id_util INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom_util VARCHAR(50),
    prenom_util VARCHAR(50),
    mail_util VARCHAR(50),
    mdp_util VARCHAR(100),
    img_util VARCHAR(100) NULL
);

