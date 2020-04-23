select * from cursos
where nome like '%a%';

select * from cursos
where nome like 'php_';

select * from cursos
where nome not like 'a%';

select * from gafanhotos
where nome like '%silva';
 
select distinct nacionalidade from gafanhotos;

select count(*) from cursos;

select count(*) from cursos where carga > 40;

select max(carga) from cursos;

select max(totaulas) from cursos where ano = 2016;

select min(totaulas) from cursos where ano = 2016;

select sum(totaulas) from cursos where ano = 2016;

select avg(totaulas) from cursos where ano = 2016;