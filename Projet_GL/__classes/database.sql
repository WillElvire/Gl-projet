#creation d'une nouvelle base de donnee
drop database if exists Project;
create database if not exists  Project;
use Project;
# creation de la table president
create table President(

			
			username varchar(255)  not null collate latin1_general_ci,
            mail varchar(255) not null collate latin1_general_ci primary key,
            mdp varchar(225) not null collate  latin1_general_ci default "Root"
		);
#creation de la table article
create table Article(

            id varchar(255) not null collate latin1_general_ci primary key,
            Autheur varchar(255) not null collate latin1_general_ci,
            titre  varchar(255) not null collate latin1_general_ci,
            resum text not null collate latin1_general_ci
            
);

create table Evaluation(
       id int(10) not null collate latin1_general_ci unique key auto_increment,
       identifiant varchar(255) not null collate latin1_general_ci ,
       evaluation  int(10)  not null collate latin1_general_ci,
       evaluateur varchar(255) not null collate latin1_general_ci,
       commentaire varchar(255) not null collate latin1_general_ci,
       message varchar(255)  not null collate latin1_general_ci
    
)


