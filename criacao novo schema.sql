CREATE SCHEMA noticias;
USE noticias;

DROP TABLE IF EXISTS noticias;
create table noticias(
noticias varchar(5000) not null,
titulo varchar(200) not null,
id_noticias int not null auto_increment,
link varchar(100) not null,
descricao varchar(255) NOT NULL,
nome_imagem varchar(25) NOT NULL,
tamanho_imagem varchar(25) NOT NULL,
tipo_imagem varchar(25) NOT NULL,
imagem longblob NOT NULL,
primary key (id_noticias)
);

DROP TABLE IF EXISTS admin;
CREATE TABLE admin(
id_admin INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_admin varchar(50) NOT NULL,
senha_admin varchar(50) NOT NULL
);
  
INSERT into noticias(noticias, titulo, id, link) values ('teste 1', 'teste titulo', 1, 'http://localhost:8080/projetositeinfo/');

INSERT INTO admin(nome_admin, senha_admin) VALUES ('pedro', md5(nome_admin));

UPDATE noticias SET noticias="esse texto esta dentro do banco de dados" where id=1;

INSERT into noticias(noticias, titulo, id, link) values ('teste 2', 'teste titulo 2', 2, 'http://localhost:8080/projetositeinfo/');
INSERT into noticias(noticias, titulo, id, link) values ('teste 3', 'teste titulo 3', 3, 'http://localhost:8080/projetositeinfo/');
INSERT into noticias(noticias, titulo, id, link) values ('teste 4', 'teste titulo 4', 4, 'http://localhost:8080/projetositeinfo/');