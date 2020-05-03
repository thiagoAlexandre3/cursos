describe gafanhotos;

alter table gafanhotos
add column cursoPreferido int;

alter table gafanhotos
add foreign key (cursoPreferido)
references cursos(idcurso);

select * from  gafanhotos;
select * from cursos;

update gafanhotos
set cursoPreferido = '6'
where id = '1';

delete from cursos
where idcurso = '28';