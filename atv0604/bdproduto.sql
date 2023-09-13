create table tbFornecedor(
codFornecedor int primary key auto_increment,
nomeFornecedor varchar(50)
);
create table tbProduto(
codProduto int primary key auto_increment,
nomeProduto varchar(50),
codFornecedor int,
foreign key (codFornecedor) references tbFornecedor(codFornecedor)
)
