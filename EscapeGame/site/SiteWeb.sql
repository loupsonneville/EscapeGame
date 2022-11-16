#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: SUPERVISEUR
#------------------------------------------------------------

CREATE TABLE SUPERVISEUR(
        id           Int NOT NULL ,
        Nom          Varchar (20) NOT NULL ,
        Prenom       Varchar (20) NOT NULL ,
        Identifiant  Varchar (20) NOT NULL ,
        mot_de_passe Varchar (20) NOT NULL ,
        Admin        Bool NOT NULL
	,CONSTRAINT SUPERVISEUR_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CRENEAU
#------------------------------------------------------------

CREATE TABLE CRENEAU(
        id             Int NOT NULL COMMENT "id"  ,
        Heure_de_debut Int NOT NULL ,
        Heure_de_fin   Int NOT NULL ,
        Reservation    Bool NOT NULL ,
        id_SUPERVISEUR Int NOT NULL
	,CONSTRAINT CRENEAU_PK PRIMARY KEY (id)

	,CONSTRAINT CRENEAU_SUPERVISEUR_FK FOREIGN KEY (id_SUPERVISEUR) REFERENCES SUPERVISEUR(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: JOUEUR
#------------------------------------------------------------

CREATE TABLE JOUEUR(
        id                   Int NOT NULL ,
        Nom                  Varchar (20) NOT NULL ,
        Prenom               Varchar (20) NOT NULL ,
        Numero_de_telephone  Int NOT NULL ,
        Mail                 Varchar (20) NOT NULL ,
        id_CRENEAU           Int NOT NULL COMMENT "id" 
	,CONSTRAINT JOUEUR_PK PRIMARY KEY (id)

	,CONSTRAINT JOUEUR_CRENEAU_FK FOREIGN KEY (id_CRENEAU) REFERENCES CRENEAU(id)
	,CONSTRAINT JOUEUR_CRENEAU_AK UNIQUE (id_CRENEAU)
)ENGINE=InnoDB;

