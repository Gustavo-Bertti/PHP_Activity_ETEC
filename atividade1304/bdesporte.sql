create table tbModalidade(
codModalidade int primary key auto_increment,
Modalidade varchar(50)
);
create table tbAtleta(
codAtleta int primary key auto_increment,
nomeAtleta varchar(50),
codModalidade int,
foreign key (codModalidade) references tbModalidade(codModalidade)
)
