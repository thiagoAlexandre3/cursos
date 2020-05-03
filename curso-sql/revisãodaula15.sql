alter table gafanhotos
add column cursoPreferido int;

alter table gafanhotos
add foreign key (cursoPreferido)
references curso(idcurso);

update gafanhotos
set cursoPreferido = '6'
where id = '1';

select c.nome, c.ano, g.nome
from gafanhotos as g inner join cursos as c
on c.idcurso = g.cursoPreferido;

select c.nome, c.ano, g.nome
from gafanhotos as g left outer join cursos as c
on c.idcurso = g.cursoPreferido;

select c.nome, c.ano, g.nome
from gafanhotos as g right outer join cursos as c
on c.idcurso = g.cursoPreferido;
