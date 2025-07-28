
-- Script de création des tables pour PostgreSQL (modélisation conforme au diagramme)

DROP TABLE IF EXISTS achat CASCADE;
DROP TABLE IF EXISTS logging CASCADE;
DROP TABLE IF EXISTS compteur CASCADE;
DROP TABLE IF EXISTS tranche CASCADE;
DROP TABLE IF EXISTS client CASCADE;
DROP TYPE IF EXISTS statut_enum CASCADE;

-- Enum statut
CREATE TYPE statut_enum AS ENUM ('echec', 'statut');

-- Table client
CREATE TABLE client (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL
);

-- Table tranche
CREATE TABLE tranche (
    id SERIAL PRIMARY KEY,
    type VARCHAR(50) NOT NULL,
    consommation FLOAT NOT NULL,
    prixkw FLOAT NOT NULL
);

-- Table compteur
CREATE TABLE compteur (
    id SERIAL PRIMARY KEY,
    numerocompteur VARCHAR(50) NOT NULL,
    client_id INT REFERENCES client(id),
    tranche_id INT REFERENCES tranche(id)
);

-- Table achat
CREATE TABLE achat (
    id SERIAL PRIMARY KEY,
    reference VARCHAR(100) NOT NULL,
    coderecharge VARCHAR(100) NOT NULL,
    nombrekilowatt FLOAT NOT NULL,
    date_heure TIMESTAMP NOT NULL,
    prixkw FLOAT NOT NULL,
    compteur_id INT REFERENCES compteur(id)
);

-- Table logging
CREATE TABLE logging (
    id SERIAL PRIMARY KEY,
    date_heure TIMESTAMP NOT NULL,
    localisation VARCHAR(255),
    statut statut_enum NOT NULL,
    coderecharge VARCHAR(100),
    nombrekilowatt FLOAT
);
