-- GESTION DE STOCK

create  table Categorie (
                            Id_cat int(7) AUTO_INCREMENT,
                            nom_cat varchar(30) UNIQUE,
                            description varchar(200) NOT NULL,
                            constraint PK_CAT_ID PRIMARY KEY(Id_cat)
);


create table Fournisseur(
                            Id_fournisseur int(7) AUTO_INCREMENT,
                            nom varchar(30) NOT NULL,
                            prenom varchar(30) NOT NULL,
                            cin varchar(10) UNIQUE NOT NULL,
                            adresse varchar(100) NOT NULL,
                            telephone varchar(20) UNIQUE NOT NULL,
                            email varchar(100) UNIQUE NOT NULL,
                            constraint PK_FOU_ID PRIMARY KEY(Id_fournisseur)
);

create table Article(
                        Id_article int(7) AUTO_INCREMENT,
                        nom varchar(30) NOT NULL,
                        description varchar(200) NOT NULL,
                        nombe_en_stock int(7) NOT NULL,
                        image varchar(100) NOT NULL,
                        Id_Cat int(7) NOT NULL,
                        Id_Fournissuer int(7) NOT NULL,
                        constraint PK_ARTICLE_ID PRIMARY KEY(Id_article),
                        constraint FK_ARTICLE_IDCAT FOREIGN KEY(Id_Cat) REFERENCES Categorie(Id_cat) ON DELETE CASCADE,
                        constraint FK_ARTICLE_IDFOUR FOREIGN KEY(Id_Fournissuer) REFERENCES Fournisseur(Id_fournisseur) ON DELETE CASCADE
);

create table Admin(
     id_admin int(2) AUTO_INCREMENT,
     username varchar(35) NOT NULL,
     password varchar(200) NOT NULL,
     constraint PK_ADM_ID PRIMARY KEY(id_admin)
);


insert into Admin (username,password) values ("admin","$2y$10$ez0pAI3IM.Ws6z5aiDlFrOx48lhgU7W.HL.ELSv8t7gR5pRZ5Kdyi");