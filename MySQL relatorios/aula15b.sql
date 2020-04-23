select g.nome, c.nome, c.ano
from  gafanhotos as g inner join cursos as c
on c.idcurso = g.cursoPreferido
order by g.nome;

select g.nome, c.nome, c.ano
from  gafanhotos as g left outer join cursos as c
on c.idcurso = g.cursoPreferido
order by g.nome;

select g.nome, c.nome, c.ano
from  gafanhotos as g right outer join cursos as c
on c.idcurso = g.cursoPreferido
order by g.nome;