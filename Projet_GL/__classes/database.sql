#creation d'une nouvelle base de donnee
drop database if exists Project;
create database if not exists  Project;
use Project;
# creation de la table president
create table President(

			nom varchar(255) not null  collate latin1_general_ci,
			pseudo varchar(255)  not null collate latin1_general_ci,
            sexe varchar(255) not null collate latin1_general_ci,
            mail varchar(255) not null collate latin1_general_ci,
            adresse varchar(255) not null collate latin1_general_ci default "null",
            ville varchar(225) not null collate latin1_general_ci default "null"
		);
#creation de la table article
create table Article(
            id varchar(255) not null collate latin1_general_ci primary key,
            Autheur varchar(255) not null collate latin1_general_ci,
            titre  varchar(255) not null collate latin1_general_ci,
            resum text not null collate latin1_general_ci,
            day  timestamp  not null collate latin1_general_ci default now()
)


