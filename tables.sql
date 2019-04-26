DROP TABLE IF EXISTS migrations;
DROP TABLE IF EXISTS CONVOCATION;
DROP TABLE IF EXISTS ARBITRAGE;
DROP TABLE IF EXISTS MATCHS;
DROP TABLE IF EXISTS LOGISTIQUE;
DROP TABLE IF EXISTS ABSENCE;
DROP TABLE IF EXISTS NON_CONVOC;
DROP TABLE IF EXISTS EFFECTIF;
DROP TABLE IF EXISTS EQUIPE;
DROP TABLE IF EXISTS CATEGORIE;




#--------------- TABLE CATEGORIE -------------------------------

CREATE TABLE `CATEGORIE` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  NomCategorie ENUM('SENIORS','U17','U15','U14-F','U13','U11-F','U11','U9','U7','Vétéran','U19','U18'));

insert into `CATEGORIE`(NomCategorie) values('SENIORS');
insert into `CATEGORIE`(NomCategorie) values('U17');
insert into `CATEGORIE`(NomCategorie) values('U15');
insert into `CATEGORIE`(NomCategorie) values('U14-F');
insert into `CATEGORIE`(NomCategorie) values('U13');
insert into `CATEGORIE`(NomCategorie) values('U11-F');
insert into `CATEGORIE`(NomCategorie) values('U11');
insert into `CATEGORIE`(NomCategorie) values('U9');
insert into `CATEGORIE`(NomCategorie) values('U7');
insert into `CATEGORIE`(NomCategorie) values('U19');
insert into `CATEGORIE`(NomCategorie) values('U18');
insert into `CATEGORIE`(NomCategorie) values('Vétéran');



 # --------------- TABLE EQUIPE -------------------------------


CREATE TABLE `EQUIPE` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  NomEquipe VARCHAR(30),
  IDCategorie INT,
  Responsable VARCHAR(50),

  FOREIGN KEY (IDCategorie) REFERENCES CATEGORIE(id)
);


insert into `EQUIPE`(NomEquipe,IDCategorie,Responsable) values('SENIORS A',1,'DUPONT Jean (06.99.88.77.66)');
insert into `EQUIPE`(NomEquipe,IDCategorie,Responsable) values('SENIORS B',1,'MINCE François (06.77.88.77.88)');
insert into `EQUIPE`(NomEquipe,IDCategorie,Responsable) values('SENIORS C',1,'PETIT Albert (06.01.02.03.04)');

insert into `EQUIPE`(NomEquipe,IDCategorie) values('U17 A',2);
insert into `EQUIPE`(NomEquipe,IDCategorie) values('U17 B',2);

insert into `EQUIPE`(NomEquipe,IDCategorie) values('U15 A',3);
insert into `EQUIPE`(NomEquipe,IDCategorie) values('U15 B',3);

insert into `EQUIPE`(NomEquipe,IDCategorie) values('U14-F',4);

insert into `EQUIPE`(NomEquipe,IDCategorie) values('U13',5);

insert into `EQUIPE`(NomEquipe,IDCategorie) values('U11-F',6);

insert into `EQUIPE`(NomEquipe,IDCategorie) values('U11 A',7);
insert into `EQUIPE`(NomEquipe,IDCategorie) values('U11 B',7);

insert into `EQUIPE`(NomEquipe,IDCategorie) values('U9',8);

insert into `EQUIPE`(NomEquipe,IDCategorie) values('U7',9);

insert into `EQUIPE`(NomEquipe,IDCategorie) values('U19',10);

insert into `EQUIPE`(NomEquipe,IDCategorie) values('U18',11);

insert into `EQUIPE`(NomEquipe,IDCategorie) values('Vétéran',12);

# --------------- TABLE EFFECTIF -------------------------------
CREATE TABLE `EFFECTIF` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  Nom VARCHAR(30),
  Prenom VARCHAR(30),
  TypeLicence VARCHAR(30),
  IDCategorie INT,
  date_naissance DATE,
  adresse varchar(30),
  mobile varchar(30),
  email varchar(30),

  FOREIGN KEY (IDCategorie) REFERENCES CATEGORIE(id)
);

# --------------------- ABSENCE -------------------------------------------


CREATE TABLE `ABSENCE` (
  IDEffectif INT,
  DateAbsence DATE,
  Motif enum('Blessé','Non licencié','Suspendu'),
  FOREIGN KEY (IDEffectif) REFERENCES EFFECTIF(id),
  PRIMARY KEY (IDEffectif,DateAbsence)

);

#--------------------- NON_CONVOC -------------------------------------------
CREATE TABLE `NON_CONVOC` (
  IDEffectif INT,
  DateNC DATE,
  Statut enum('Exempt','Absent'),
  FOREIGN KEY (IDEffectif) REFERENCES EFFECTIF(id),
  PRIMARY KEY (IDEffectif,DateNC)

);

#--------------------- LOGISTIQUE-------------------------------------------
CREATE TABLE `LOGISTIQUE` (
  IDEffectif INT,
  IDMatch INT,
  Tache enum('Maillot','Vestiaires','Buvette','Voiture'),
  FOREIGN KEY (IDMatch) REFERENCES MATCHS(id),
  FOREIGN KEY (IDEffectif) REFERENCES EFFECTIF(id),
  PRIMARY KEY (IDEffectif,IDMatch)

);
#--------------------- MATCHS -------------------------------------------

CREATE TABLE `MATCHS` (

  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  IDEquipe INT,
  Date DATE,
  Heure TIME,
  ClubAdverse VARCHAR(50),
  LocaliteClubAdverse VARCHAR(200),
  EquipeAdverse VARCHAR(50),
  Terrain VARCHAR(50),
  Competition VARCHAR(50),
  Deplacement enum('Domicile','Extérieur'),
  Site VARCHAR(30),

  FOREIGN KEY (IDEquipe) REFERENCES EQUIPE(id)

);
#--------------------- ARBITRAGE-------------------------------------------
CREATE TABLE `ARBITRAGE` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  IDMatch INT,
  ArbitreCentre varchar(50),
  ArbitreTouche1 varchar(50),
  ArbitreTouche2 varchar(50),
  Dirigeant varchar(50),

   FOREIGN KEY (IDMatch) REFERENCES MATCHS(id)

);

#--------------------- CONVOCATION -------------------------------------------

CREATE TABLE `CONVOCATION` (

    IDMatch INT PRIMARY KEY REFERENCES MATCHS(id),

    Joueur1 INT REFERENCES EFFECTIF(IDEffectif),
    Joueur2 INT REFERENCES EFFECTIF(IDEffectif),
    Joueur3 INT REFERENCES EFFECTIF(IDEffectif),
    Joueur4 INT REFERENCES EFFECTIF(IDEffectif),
    Joueur5 INT REFERENCES EFFECTIF(IDEffectif),
    Joueur6 INT REFERENCES EFFECTIF(IDEffectif),
    Joueur7 INT REFERENCES EFFECTIF(IDEffectif),
    Joueur8 INT REFERENCES EFFECTIF(IDEffectif),
    Joueur9 INT REFERENCES EFFECTIF(IDEffectif),
    Joueur10 INT REFERENCES EFFECTIF(IDEffectif),
    Joueur11 INT REFERENCES EFFECTIF(IDEffectif),

    Remplacant1 INT REFERENCES EFFECTIF(IDEffectif),
    Remplacant2 INT REFERENCES EFFECTIF(IDEffectif),
    Remplacant3 INT REFERENCES EFFECTIF(IDEffectif),
    Remplacant4 INT REFERENCES EFFECTIF(IDEffectif),
    Remplacant5 INT REFERENCES EFFECTIF(IDEffectif),

    IDArbitrage INT,

    FOREIGN KEY (IDArbitrage) REFERENCES ARBITRAGE(id)

);




