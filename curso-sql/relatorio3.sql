create database relatorio2;

create table mercadoriasErro(
	id int not null auto_increment,
    Nome varchar(20) not null default 'Fruta',
    Preço decimal(5,2),
    Validade date,
    Vendedor varchar(20),
    primary key(id)
)CHARSET = utf8mb4;

alter table mercadoriasErro
add column Tipo varchar(20) after Nome;

alter table mercadoriasErro
modify column Nome varchar(20) not null;

alter table mercadoriasErro
change column Vendedor razao varchar(20);

insert into mercadoriasErro 
(Nome, Tipo, preço, validade, razao)
value
('Fruta', 'Tomate', '19.90', '2020-01-12','Atacadao Maringá'),
('Fruta', 'Manga', '15.90', '2020-01-02','Atacadao Maringá'),
('Fruta', 'morango', '50.00', '2020-01-08','Atacadao Maringá'),
('Legumes', 'Repolho', '41.20', '2020-01-09','Atacadao Maringá');

truncate mercadoriasErro;

drop table mercadoriasErro;

create table mercadorias(
	id int not null auto_increment,
    Nome varchar(20) not null default 'Fruta',
    Preço decimal(5,2),
    Validade date,
    Vendedor varchar(20),
    primary key(id)
)CHARSET = utf8mb4;

alter table mercadorias
modify column Nome varchar(20);

insert into mercadorias 
(Nome, preço, validade, vendedor)
value
('Fruta', '19.90', '2020-01-11', 'Atacadao Maringá'),
('Fruta', '15.90', '2020-01-02', 'Atacadao Maringá'),
('Fruta', '50.00', '2020-01-08', 'Atacadao Maringá'),
('Leguma', '41.20', '2020-01-12', 'Atacadao Maringá');

update mercadorias
set nome = 'Leguma'
where id = '1';

delete from mercadorias
where id = '5';

select * from mercadorias;