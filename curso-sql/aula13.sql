select distinct carga from cursos;

select carga, count(nome) from cursos
group by carga;

select ano, count(nome) from cursos
group by ano
having count(ano) > 3;

select ano, count(nome) from cursos
where totaulas > 30
group by ano
having ano > 3
order by nome;

select * from cursos;

select avg(carga) from cursos;

select carga, count(*) from cursos
where ano > 2015
group by carga
having carga > (select avg(carga) from cursos);