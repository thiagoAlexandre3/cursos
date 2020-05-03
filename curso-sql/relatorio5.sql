select * from cursos;

select distinct carga from cursos;

select carga, count(*) from cursos
group by carga;

select * from cursos
where carga > 30 and totaulas >10
order by nome;

select * from cursos
where ano between 2015 and 2019;

select * from cursos
where ano in (2015, 2019);

select * from cursos
where nome like 'PH%P%';

select min(carga) from cursos;

select max(carga) from cursos;

select avg(carga) from cursos;

