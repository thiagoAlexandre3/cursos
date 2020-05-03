create database relatorio1e2;
create table pessoas(
	Nome varchar(40) not null,
    Nacimento date,
    Peso decimal(5,2),
    idade tinyint(2),
    Sexo enum('M', 'F'),
    Nacionalidade varchar(20)
);

insert into pessoas values
('Goodolfredo', '2000-08-06', '70.2', '23', 'M', 'Espanha'),
('Isabela', '1998-12-11', '55.5', '12', 'F', 'Australia');

alter table pessoas
add column profissao varchar(20) not null;

alter table pessoas
modify column profissao varchar(20) not null default ' ';

alter table pessoas
modify column profissao varchar(20);

alter table pessoas
change column profissao prof varchar(20) not null default 'bombeiro';

alter table pessoas
modify column nacionalidade varchar(20) default'Brasil';

alter table pessoas
drop column idade;

describe pessoas;

select * from pessoas;