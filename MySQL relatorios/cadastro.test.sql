create table if not exists test(
	id int,
    Nome varchar(20),
	Idade int
);

insert into test value
('1','Joao','22'),
('2','Maria','23'),
('3','Alfredo','50');

select * from test;

drop table if exists test;
