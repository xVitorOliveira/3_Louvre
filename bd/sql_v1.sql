#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        id_user Int  Auto_increment  NOT NULL ,
        login   Varchar (50) NOT NULL ,
        pwd     Varchar (50) NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Article
#------------------------------------------------------------

CREATE TABLE Article(
        id_article Int  Auto_increment  NOT NULL ,
        page       Varchar (50) NOT NULL ,
        text_fr    Varchar (1000) NOT NULL ,
        text_eng   Varchar (1000) NOT NULL ,
        img        Varchar (50)
	,CONSTRAINT Article_PK PRIMARY KEY (id_article)
)ENGINE=InnoDB;

