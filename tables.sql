

--------------- TABLE CATEGORIE -------------------------------

CREATE TABLE `CATEGORIE` (
  IDCategorie INT PRIMARY KEY NOT NULL AUTO_INCREMENT,  
  NomCategorie ENUM('SENIORS','U17','U15','U14-F','U13','U11-F','U11','U9','U7')
   
);

insert into categorie values('SENIORS');
insert into categorie values('U17');
insert into categorie values('U15');
insert into categorie values('U14-F');
insert into categorie values('U13');
insert into categorie values('U11-F');
insert into categorie values('U11');
insert into categorie values('U9');
insert into categorie values('U7');



--------------- TABLE EQUIPE -------------------------------


CREATE TABLE `EQUIPE` (
  IDEquipe INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  NomEquipe VARCHAR(30),	
  IDCategorie INT,

  FOREIGN KEY (IDCategorie) REFERENCES CATEGORIE(IDCategorie)    
);


insert into categorie values('SENIORS A',1);
insert into categorie values('SENIORS B',1);
insert into categorie values('SENIORS C',1);

insert into categorie values('U17 A',2);
insert into categorie values('U17 B',2);

insert into categorie values('U15 A',3);
insert into categorie values('U15 B',3);

insert into categorie values('U14-F',4);

insert into categorie values('U13',5);

insert into categorie values('U11-F',6);

insert into categorie values('U11 A',7);
insert into categorie values('U11 B',7);

insert into categorie values('U9',8);

insert into categorie values('U7',9);





