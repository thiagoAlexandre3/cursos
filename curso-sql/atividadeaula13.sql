-- exercicío 1
select profissao, count(*) from gafanhotos
group by profissao;

-- exercicío 2

select sexo, count(*) from gafanhotos
where  nascimento > '2005-01-01'
group by sexo;

-- exercicío 3 

select nacionalidade, count(*) from gafanhotos
where nacionalidade != 'Brasil'
group by nacionalidade
having count(nacionalidade) >=3;

-- exercicío 4

select avg(altura) from gafanhotos;

select altura, count(*) from gafanhotos
where peso > '100' 
group by altura
having altura > (select avg(altura) from gafanhotos);
