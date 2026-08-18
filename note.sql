CREATE Table statuts(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

CREATE TABLE eleves(
    id SERIAL PRIMARY KEY,
    nomComplet VARCHAR(50) not NULL,
    matricule VARCHAR(50) not NULL,
    id_responsable int REFERENCES responsables(id)
);

CREATE TABLE responsables(
    id SERIAL PRIMARY KEY,
    prenom VARCHAR(50) not NULL,
    nom VARCHAR(50) not NULL,
    numero VARCHAR(50) not NULL,
    adresse VARCHAR(50) NOT NULL
);

CREATE TABLE utilisateurs(
    id SERIAL PRIMARY KEY,
    nomComplet VARCHAR(50) not NULL,
    login VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(50) NOT NULL,
    role_id int REFERENCES roles(id)
);

CREATE TABLE roles(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT null
);

CREATE TABLE anneeScolaires(
    id SERIAL PRIMARY KEY,
    annee VARCHAR(50) 
);

CREATE Table etablissements(
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT null unique
);

CREATE Table classes(
    id SERIAL PRIMARY KEY,
    id_etablissement int REFERENCES etablissements(id),
    nom VARCHAR(50) NOT null unique
);

CREATE Table inscriptions(
    id SERIAL PRIMARY KEY,
    id_eleve int REFERENCES eleves(id),
    id_annee int REFERENCES anneeScolaires(id),
    id_classe int REFERENCES classes(id),
    id_utilisateur int REFERENCES utilisateurs(id)
);

CREATE TABLE transfert(
    id SERIAL PRIMARY KEY,
    id_etablissement_sortant int REFERENCES etablissements(id),
    id_etablissement_entrant int REFERENCES etablissements(id),
    statut varchar(30) check(statut in ('EN ATTENTE', 'INSCRIT', 'NON AFFECTE'))
);