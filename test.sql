
--------------------- ABSENCE -------------------------------------------


CREATE TABLE `ABSENCE` (
  IDEffectif INT,  
  DateAbsence DATE,
  Motif('Blessé','Non licencié','Suspendé'),

  PRIMARY KEY (IDEffectif,DateAbsence),

  FOREIGN KEY (IDEffectif) REFERENCES Effectif(IDEffectif)  
    
);

