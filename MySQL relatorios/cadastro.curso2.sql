insert into curso values
('1','HTML4','Curso de HTML','20','40','2020'),
('2','CSS', 'Curso de CSS', '30', '50', '2000'),
('3', 'MySQL', 'Curso de Java', '41', '65', '2017'),
('4', 'PHG', 'Curso de JavaScript','89','54', '2010'),
('5', 'Javar','Curso de Banco de Dados', '10','45', '2010'),
('6', 'Python', 'Curso de Python', '10','78', '2015'),
('7', 'JavaScript', 'Curso de PHP', '08','85', '2013'),
('8', 'Java POO', 'Curso de java orientado a objetos', '44', '78', '2018'),
('9','PHP POO', 'Curso de PHP orientado a objetos', '45', '77', '2018'),
('10', 'C#', 'Curso de C#', '80','06', '2018');

select * from curso;

UPDATE curso
set nome = 'HTML5'
where idcurso = '1';

UPDATE curso
set nome = 'PHP', ano = '2015'
where idcurso = '4';

UPDATE curso
set nome = 'Java', ano = '2015', carga = 40
where idcurso = '5';

DELETE from curso
where idCurso = '10';

TRUNCATE curso;