DROP SCHEMA IF EXISTS noticias;
CREATE SCHEMA noticias;
USE noticias;

DROP TABLE IF EXISTS noticias;
create table noticias(
noticias varchar(5000) not null,
titulo varchar(200) not null,
id_noticias int not null auto_increment,
link varchar(100) not null,
descricao varchar(255) NOT NULL,
nome_imagem varchar(25),
tamanho_imagem varchar(25),
tipo_imagem varchar(25),
imagem longblob,
id_admin int not null,
publica bool,
primary key (id_noticias),
FOREIGN KEY (id_admin) REFERENCES noticias.admin(id_admin)
);

DROP TABLE IF EXISTS admin;
CREATE TABLE admin(
id_admin INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_admin varchar(50) NOT NULL,
senha_admin varchar(50) NOT NULL
);

DROP TABLE IF EXISTS tags;
CREATE TABLE tags(
id_tag INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_noticia INT NOT NULL,
nome_tag varchar(20) NOT NULL,
FOREIGN KEY (id_noticia) REFERENCES noticias.noticias (id_noticias)
);
  


INSERT INTO admin(nome_admin, senha_admin) VALUES ('pedro', md5(nome_admin));

INSERT into noticias(noticias, titulo, id_noticias, link, descricao, id_admin, publica) values ('teste 1', 'teste titulo', 1, 'http://localhost:8080/projetositeinfo/', 'HELLO WORLD0', 1, true);
INSERT into noticias(noticias, titulo, id_noticias, link, descricao, id_admin, publica) values ('teste 2', 'teste titulo 2', 2, 'http://localhost:8080/projetositeinfo/', 'HELLO WORLD1', 1, true);
INSERT into noticias(noticias, titulo, id_noticias, link, descricao, id_admin, publica) values ('teste 3', 'teste titulo 3', 3, 'http://localhost:8080/projetositeinfo/', 'HELLO WORLD2', 1, true);
INSERT into noticias(noticias, titulo, id_noticias, link, descricao, id_admin, publica) values ('teste 4', 'teste titulo 4', 4, 'http://localhost:8080/projetositeinfo/', 'HELLO WORLD3', 1, true);
INSERT into noticias(noticias, titulo, id_noticias, link, descricao, id_admin, publica) values ('teste 5', 'teste titulo', 5, 'http://localhost:8080/projetositeinfo/', 'HELLO WORLD05', 1, false);

INSERT INTO tags(id_noticia, nome_tag) VALUES (1, "tag1noticia1");
INSERT INTO tags(id_noticia, nome_tag) VALUES (1, "tag2noticia1");
INSERT INTO tags(id_noticia, nome_tag) VALUES (2, "tag1");
INSERT INTO tags(id_noticia, nome_tag) VALUES (2, "tag2");
INSERT INTO tags(id_noticia, nome_tag) VALUES (3, "tag3.1");
INSERT INTO tags(id_noticia, nome_tag) VALUES (3, "tag3.2");
INSERT INTO tags(id_noticia, nome_tag) VALUES (1, "tag1noticia3");
INSERT INTO tags(id_noticia, nome_tag) VALUES (4, "TAG1NOTICIA4");

UPDATE noticias SET noticias="esse texto esta dentro do banco de dados" where id_noticias=1;