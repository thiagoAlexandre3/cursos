create database `RevPósFerias`;

create table pessoas(
id int not null auto_increment,
Nome varchar(20) unique not null,
Nacimento date,
Sexo enum ('M', 'F'),
Peso decimal(5,2),
Altura decimal(3,2),
Nacionalidade varchar(20) DEFAULT 'Brasil',
primary key(id)
)DEFAULT charset = utf8mb4;

insert into pessoas 
(Nome, Nacimento, Sexo, Peso, Altura, Nacionalidade)
value
('Aline', '1998-12-05', 'M', '50.32', '1.70', 'Brasil'),
('Raquel', '1980-09-21', 'F', '60.50', '1.75', 'Brasil'),
('Benicio', '2000-08-25', 'M', '43.90', '1.65', 'Brasil'),
('Maria', '1999-05-13', 'F', '47.50', '1.63', 'Brasil'),
('Thiago', '1995-01-17', 'M', '80.32', '1.71', 'Brasil'),
('Miguel', '1993-11-12', 'M', '61.45', '1.81', 'Brasil'),
('Rosangela', '1991-10-19', 'F', '63.85', '1.64', 'Brasil'),
('Gabriela', '2001-02-15', 'F', '75.23', '1.70', 'Brasil'),
('Joao', '2001-05-31', 'M', '49.61', '1.65', 'Brasil'),
('Diana', '1998-07-29', 'F', '50.40', '1.65', 'Brasil');

truncate pessoas;

select * from pessoas;

create table cursos(
id int not null auto_increment,
Nome varchar (30) unique not null,
Descricao varchar(40),
Data date,
primary key(id)
)DEFAULT charset = 'utf8mb4';

insert into cursos 
(Nome, Descricao, Data)
value
('PHP-4', 'Curso de PHP versão 4', '2013-08-02'),
('PHP-5', 'Curso de PHP versão 5', '2014-01-01'),
('HTML5', 'Curso basico de HTML versão 5', '2016-05-03'),
('JavaScript', 'Curso completo de JavaScript', '2019-04-09'),
('CSS3', 'Curso de PHP versão 4', '2016-05-02'),
('MySQL', 'Curso de PHP versão 4', '2017-11-02'),
('Segurança Da Informação', 'Curso de PHP versão 4', '2020-01-01');


select * from cursos;

select * from  cursos
where Data >= '2015-01-01'
order by Data;

select * from  pessoas
where Nacimento between '1998-01-01' and '2000-01-01'
order by Nacimento;

select * from  pessoas
where Nacimento in ('1998-07-29', '1998-12-05', '1999-05-13')
order by Nacimento;

select * from pessoas
where nome like 'A%';

select avg(Peso) from pessoas
order by Peso;

select max(Peso) from pessoas
order by Peso;

select min(Peso) from pessoas
order by Peso;

select count(*), altura, nome from pessoas
group by altura;

alter table pessoas
modify column Nome varchar(15) not null unique;

alter table pessoas
add column Proficao varchar(30) default 'Bombeiro';

alter table pessoas
change column Nome nome varchar(30) not null unique;

update pessoas
set nome = 'Aline' and Sexo = 'f'
where id = '1';

delete from pessoas
where id = '1';

select * from pessoas
order by id;

alter table cursos
add column idcursoPreferido int;

alter table cursos
add foreign key(idcursoPreferido)
references pessoas(id);

select * from pessoas;

update cursos
set idcursoPreferido = '1'
where id = '1';

select c.Nome, c.Descricao, p.nome
from cursos as c inner join pessoas as p
on p.id = c.idcursoPreferido
order by p.nome;

select c.Nome, c.Descricao, p.nome
from cursos as c left outer join pessoas as p
on p.id = c.idcursoPreferido
order by p.nome;

select c.Nome, c.Descricao, p.nome
from cursos as c right outer join pessoas as p
on p.id = c.idcursoPreferido
order by p.nome;
