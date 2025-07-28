-- Script de création des tables pour MySQL (modélisation conforme au diagramme)

DROP TABLE IF EXISTS achat;
DROP TABLE IF EXISTS logging;
DROP TABLE IF EXISTS compteur;
DROP TABLE IF EXISTS tranche;
DROP TABLE IF EXISTS client;

-- Table client
CREATE TABLE client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL
);

-- Table tranche
CREATE TABLE tranche (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL,
    consommation FLOAT NOT NULL,
    prixkw FLOAT NOT NULL
);

-- Table compteur
CREATE TABLE compteur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numerocompteur VARCHAR(50) NOT NULL,
    client_id INT,
    tranche_id INT,
    FOREIGN KEY (client_id) REFERENCES client(id),
    FOREIGN KEY (tranche_id) REFERENCES tranche(id)
);

-- Table achat
CREATE TABLE achat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    reference VARCHAR(100) NOT NULL,
    coderecharge VARCHAR(100) NOT NULL,
    nombrekilowatt FLOAT NOT NULL,
    date_heure DATETIME NOT NULL,
    prixkw FLOAT NOT NULL,
    compteur_id INT,
    FOREIGN KEY (compteur_id) REFERENCES compteur(id)
);

-- Table logging
CREATE TABLE logging (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date_heure DATETIME NOT NULL,
    localisation VARCHAR(255),
    statut ENUM('echec','statut') NOT NULL,
    coderecharge VARCHAR(100),
    nombrekilowatt FLOAT
);
