-- exercicío 1
select * from gafanhotos
where sexo = 'F';

-- exercicío 2

select * from gafanhotos
where nascimento between '2000-01-01' and '2015-12-31'
order by nascimento;

-- exercicío 3

select * from gafanhotos
where sexo = 'M' and profissao = 'programador';

-- exercicío 4

select * from gafanhotos
where sexo = 'F' and nacionalidade = 'Brasil' and nome like 'J%';

-- exercicío 5

select nome, nacionalidade from gafanhotos
where sexo = 'M' and nome like '%Silva' and peso < '100' and nacionalidade  != 'Brasil';

-- exercicío 6

select max(altura) from gafanhotos
where sexo = 'M' and nacionalidade = 'Brasil';

-- exercicío 7
select avg(peso) from gafanhotos;

-- exercicío 8

select min(peso) from gafanhotos
where sexo = 'F' and nacionalidade != 'Brasil' and nascimento between '1990-01-01' and '2000-12-31';

-- exercicío 9 

select * from gafanhotos
where sexo = 'F' and altura > '1.90';
