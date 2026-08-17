CREATE TABLE roles (
    id SERIAL PRIMARY KEY,
    nomRole VARCHAR(50) NOT NULL UNIQUE
);
CREATE TABLE utilisateurs (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    motDePasse VARCHAR(255) NOT NULL,
    idRole INT NOT NULL REFERENCES roles(id)
);
CREATE TABLE anneescolaires (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL UNIQUE
);
CREATE TABLE classes (
    id SERIAL PRIMARY KEY,
    nomClasse VARCHAR(100) NOT NULL UNIQUE
);
CREATE TABLE eleves (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    matricule VARCHAR(50) NOT NULL UNIQUE
);
CREATE TABLE inscriptions (
    id SERIAL PRIMARY KEY,
    idEleve INT NOT NULL REFERENCES eleves(id),
    idClasse INT NOT NULL REFERENCES classes(id),
    idAnneeScolaire INT NOT NULL REFERENCES anneescolaires(id),
    UNIQUE(idEleve, idAnneeScolaire)
);
