drop database if exists Project;
create database if not exists  Project;
use Project;
create table President(

			nom varchar(255) not null primary key collate latin1_general_ci 
			
		);

create table Aricle(
	
            id varchar(255) not null collate latin1_general_ci primary key,
            Autheur varchar(255) not null collate latin1_general_ci,
            titre  varchar(255) not null collate latin1_general_ci,
            resum text not null collate latin1_general_ci,
            day  timestamp  not null collate latin1_general_ci default now()
)

