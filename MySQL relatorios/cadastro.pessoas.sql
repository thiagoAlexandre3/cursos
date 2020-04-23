create database cadastro;
use cadastro;

create table pessoas(
	id int(50) not null auto_increment, 
	Nome varchar(40),
    Nacimento date,
    Sexo enum('M','F'),
    Peso decimal(5,2),
    Altura decimal(3,2),
    Profissao varchar(40) default 'Bombeiro',
    Cargo varchar(15),
    Nacionalidade varchar(20) default 'Brasil',
    primary key(id)
)DEFAULT CHARSET = UTF8MB4;

alter table pessoas
add column mensagem varchar(40);

alter table pessoas
modify column Sexo enum('M','F') default 'M';

alter table pessoas
change column Sexo Sex enum('M', 'F') default 'M';

alter table pessoas 
rename to peaples;

desc peaples;

select * from peaples;

