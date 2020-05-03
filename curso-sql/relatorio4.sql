use cadastro;
select * from cursos;

select * from cursos
order by nome;

select * from cursos
where ano = 2019
order by nome;

select nome, ano from cursos;

select * from cursos
where ano <= 2018;

select * from cursos
where ano between 2018 and 2020;

select * from cursos
where ano in (2018, 2020);

select * from cursos
where carga < 30 and ano <50;