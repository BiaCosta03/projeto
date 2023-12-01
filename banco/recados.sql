CREATE TABLE IF NOT EXISTS recados(
    id int not null auto_increment primary key,
    nome varchar(100) not null,
    site varchar(50) not null,
    avisos char(40) not null
);

insert into recados (noome, site, avisos) values ("$nome", "$site", "$avisos");
