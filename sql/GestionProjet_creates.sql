SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
CREATE DATABASE IF NOT EXISTS GestionProjet DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE GestionProjet;

DROP TABLE IF EXISTS Competence;
CREATE TABLE Competence (
  idCompetence int(11) NOT NULL,
  competence varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS Developpeur;
CREATE TABLE Developpeur (
  idDeveloppeur int(11) NOT NULL,
  nomDeveloppeur varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS DeveloppeurCompetence;
CREATE TABLE DeveloppeurCompetence (
  idDeveloppeur int(11) NOT NULL,
  idCompetence int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS Projet;
CREATE TABLE Projet (
  idProjet int(11) NOT NULL,
  nomProjet varchar(50) NOT NULL,
  dateDebut date NOT NULL,
  description varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS Tache;
CREATE TABLE Tache (
  idTache int(11) NOT NULL,
  nomTache varchar(50) NOT NULL,
  idProjet int(11) NOT NULL,
  dateDebut date NOT NULL,
  priorite int(11) NOT NULL,
  idDeveloppeur int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS TacheCompetence;
CREATE TABLE TacheCompetence (
  idTache int(11) NOT NULL,
  idCompetence int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE Competence
  ADD PRIMARY KEY (idCompetence);

ALTER TABLE Developpeur
  ADD PRIMARY KEY (idDeveloppeur);

ALTER TABLE DeveloppeurCompetence
  ADD PRIMARY KEY (idDeveloppeur,idCompetence),
  ADD KEY idx_devcomp_dev (idDeveloppeur),
  ADD KEY idx_devcomp_compet (idCompetence);

ALTER TABLE Projet
  ADD PRIMARY KEY (idProjet),
  ADD UNIQUE KEY nomProjetUni (nomProjet);

ALTER TABLE Tache
  ADD PRIMARY KEY (idTache),
  ADD KEY id_tache_projet (idProjet),
  ADD KEY idx_tache_developpeur (idDeveloppeur);

ALTER TABLE TacheCompetence
  ADD PRIMARY KEY (idTache,idCompetence),
  ADD KEY idx_tachecompet_tache (idTache),
  ADD KEY idx_tachecomp_compet (idCompetence);


ALTER TABLE Competence
  MODIFY idCompetence int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE Developpeur
  MODIFY idDeveloppeur int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE Projet
  MODIFY idProjet int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE Tache
  MODIFY idTache int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE DeveloppeurCompetence
  ADD CONSTRAINT DeveloppeurCompetence_ibfk_1 FOREIGN KEY (idDeveloppeur) REFERENCES Developpeur (idDeveloppeur),
  ADD CONSTRAINT DeveloppeurCompetence_ibfk_2 FOREIGN KEY (idCompetence) REFERENCES Competence (idCompetence);

ALTER TABLE Tache
  ADD CONSTRAINT Tache_ibfk_1 FOREIGN KEY (idProjet) REFERENCES Projet (idProjet),
  ADD CONSTRAINT Tache_ibfk_2 FOREIGN KEY (idDeveloppeur) REFERENCES Developpeur (idDeveloppeur);

ALTER TABLE TacheCompetence
  ADD CONSTRAINT TacheCompetence_ibfk_1 FOREIGN KEY (idCompetence) REFERENCES Competence (idCompetence),
  ADD CONSTRAINT TacheCompetence_ibfk_2 FOREIGN KEY (idTache) REFERENCES Tache (idTache);
SET FOREIGN_KEY_CHECKS=1;
