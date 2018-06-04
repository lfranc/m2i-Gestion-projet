SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;

INSERT INTO Projet (idProjet, nomProjet, dateDebut, description) VALUES
(1, 'Projet1', '2018-02-12', 'PHP POO Paris'),
(2, 'Projet2', '2018-02-19', 'PHP Init Lille'),
(100, 'Redis Paris Picpus', '2018-04-01', 'Redis');
COMMIT;
