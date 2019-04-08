

--------------- TABLE CATEGORIE -------------------------------

CREATE TABLE `CATEGORIE` (
  IDCategorie INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  NomCategorie ENUM('SENIORS','U17','U15','U14-F','U13','U11-F','U11','U9','U7')

);

insert into CATEGORIE(NomCategorie) values('SENIORS');
insert into CATEGORIE(NomCategorie) values('U17');
insert into CATEGORIE(NomCategorie) values('U15');
insert into CATEGORIE(NomCategorie) values('U14-F');
insert into CATEGORIE(NomCategorie) values('U13');
insert into CATEGORIE(NomCategorie) values('U11-F');
insert into CATEGORIE(NomCategorie) values('U11');
insert into CATEGORIE(NomCategorie) values('U9');
insert into CATEGORIE(NomCategorie) values('U7');



--------------- TABLE EQUIPE -------------------------------


CREATE TABLE `EQUIPE` (
  IDEquipe INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  NomEquipe VARCHAR(30),
  IDCategorie INT,

  FOREIGN KEY (IDCategorie) REFERENCES CATEGORIE(IDCategorie)
);


insert into EQUIPE(NomEquipe,IDCategorie) values('SENIORS A',1);
insert into EQUIPE(NomEquipe,IDCategorie) values('SENIORS B',1);
insert into EQUIPE(NomEquipe,IDCategorie) values('SENIORS C',1);

insert into EQUIPE(NomEquipe,IDCategorie) values('U17 A',2);
insert into EQUIPE(NomEquipe,IDCategorie) values('U17 B',2);

insert into EQUIPE(NomEquipe,IDCategorie) values('U15 A',3);
insert into EQUIPE(NomEquipe,IDCategorie) values('U15 B',3);

insert into EQUIPE(NomEquipe,IDCategorie) values('U14-F',4);

insert into EQUIPE(NomEquipe,IDCategorie) values('U13',5);

insert into EQUIPE(NomEquipe,IDCategorie) values('U11-F',6);

insert into EQUIPE(NomEquipe,IDCategorie) values('U11 A',7);
insert into EQUIPE(NomEquipe,IDCategorie) values('U11 B',7);

insert into EQUIPE(NomEquipe,IDCategorie) values('U9',8);

insert into EQUIPE(NomEquipe,IDCategorie) values('U7',9);

--------------- TABLE EFFECTIF -------------------------------
CREATE TABLE `EFFECTIF` (
  IDEffectif INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  NomJoueur VARCHAR(30),
  PrenomJoueur VARCHAR(30),
  TypeLicence VARCHAR(30),
  IDCategorie INT,
  date_naissance DATE,
  adresse varchar(30),
  mobile varchar(30),
  email varchar(30),

  FOREIGN KEY (IDCategorie) REFERENCES CATEGORIE(IDCategorie)
);

--------------------- ABSENCE -------------------------------------------


CREATE TABLE `ABSENCE` (
  IDEffectif INT REFERENCES Effectif(IDEffectif),
  DateAbsence DATE,
  Motif enum('Blessé','Non licencié','Suspendé'),

  PRIMARY KEY (IDEffectif,DateAbsence)

);

--------------------- NON_CONVOC -------------------------------------------
CREATE TABLE `NON_CONVOC` (
  IDEffectif INT REFERENCES Effectif(IDEffectif),
  DateC DATE,
  Statut enum('Exempt','Absent'),

  PRIMARY KEY (IDEffectif,DateC)

);

--------------------- LOGISTIQUE-------------------------------------------
CREATE TABLE `LOGISTIQUE` (
  IDEffectif INT REFERENCES Effectif(IDEffectif),
  IDMatch INT REFERENCES MATCHS(IDMatch),
  Tache enum('Maillot','Vestiaires','Buvette','Voiture'),

  PRIMARY KEY (IDEffectif,IDMatch)

);
--------------------- MATCHS -------------------------------------------

CREATE TABLE `MATCHS` (

  IDMatch INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  IDEquipe INT REFERENCES Equipe(IDEquipe),
  DateMatch DATETIME,
  ClubAdverse VARCHAR(50),
  LocaliteClubAdverse VARCHAR(50),
  EquipeAdverse VARCHAR(50),
  Terrain VARCHAR(50),
  Competition VARCHAR(50),
  Deplacement enum('Domicile','Extérieur'),
  Site VARCHAR(30)

);
--------------------- ARBITRAGE-------------------------------------------
CREATE TABLE `ARBITRAGE` (
  IDMatch INT REFERENCES MATCHS(IDMatch),
  Arbitre_centre varchar(50),
  Arbitre_touche varchar(50),
  Dirigeant varchar(50),

  PRIMARY KEY (IDMatch)

);
