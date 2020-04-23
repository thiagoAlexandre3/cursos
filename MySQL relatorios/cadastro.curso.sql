create table IF NOT EXISTS curso(
	Nome varchar(20) not null unique,
    Descricao text,
    Carga int unsigned,
    TotalAulas int unsigned,
    Ano year default '2020'
)CHARSET = utf8mb4;

alter table curso
add column idCurso int first;

alter table curso
add primary key(idCurso);

desc curso;