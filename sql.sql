-- Créer la base de données
CREATE DATABASE colle2024;

-- Utiliser la base de données
USE colle2024;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', PASSWORD('admin'));
INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, 'aymane', 'aymane');

-- Créer la table des départements
CREATE TABLE departements (
    CodeD VARCHAR(10) PRIMARY KEY,
    Nom_du_departement VARCHAR(255) NOT NULL
);

-- Créer la table des filières
CREATE TABLE filieres (
    CodeF VARCHAR(10) PRIMARY KEY,
    IntituleF VARCHAR(255) NOT NULL
);

-- Créer la table des étudiants
CREATE TABLE etudiants (
    CodeE VARCHAR(10) PRIMARY KEY,
    Nom VARCHAR(255) NOT NULL,
    Prenom VARCHAR(255) NOT NULL,
    Note DECIMAL(4,2) NOT NULL,
    Filiere VARCHAR(10),
    FOREIGN KEY (Filiere) REFERENCES filieres(CodeF)
);

-- Insérer des données dans la table des départements
INSERT INTO departements (CodeD, Nom_du_departement) VALUES
('CHI', 'Chimie'),
('MATH', 'Mathematique'),
('BIO', 'Biologie'),
('PHY', 'Physique'),
('GEO', 'Géologie');

-- Insérer des données dans la table des filières
INSERT INTO filieres (CodeF, IntituleF) VALUES
('SMI', 'Sciences Mathematiques et Informatiques'),
('SMA', 'Sciences Mathematiques et Applications'),
('BIO', 'Biologie'),
('PHY', 'Physique'),
('CHI', 'Chimie'),
('MATH', 'Mathématiques');

-- Insérer des données dans la table des étudiants
INSERT INTO etudiants (CodeE, Nom, Prenom, Note, Filiere) VALUES
('usmba001', 'Kourouma', 'Elisée', 18, 'SMI'),
('usmba002', 'Kourouma', 'Shamar', 19, 'SMA'),
('usmba003', 'Loua', 'Celestin', 20, 'SMI'),
('usmba004', 'Goumou', 'Adolphe', 17, 'SMA'),
('usmba005', 'Haba', 'Emmanuel', 16, 'SMI'),
('usmba006', 'Diallo', 'Fatoumata', 14, 'BIO'),
('usmba007', 'Traoré', 'Ibrahim', 15, 'CHI'),
('usmba008', 'Camara', 'Mariam', 13, 'PHY'),
('usmba009', 'Sy', 'Amadou', 16, 'MATH'),
('usmba010', 'Koné', 'Aissata', 17, 'BIO');

-- Ajouter un utilisateur (exemple)
INSERT INTO users (username, password) VALUES ('admin', PASSWORD('admin'));


