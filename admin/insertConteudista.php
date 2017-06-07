<?php
include('proteger.php');
protect();
include('conexao.php');

$sql_cadastro = "INSERT INTO noticias.admin(nome_admin, senha_admin) VALUES ('pedro', 'pedro')";

?>