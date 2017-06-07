<?php
include('proteger.php');
protect();
include('conexao.php');

$nome_admin = $_POST['nome'];
$email_admin = $_POST['email'];
$senha_admin = md5($_POST['password']);
$usuario_admin = $_POST['usuario'];

$sql_cadastro = "INSERT INTO admin(nome_admin, usuario_admin, email_admin, senha_admin) VALUES ('$nome_admin', '$usuario_admin', '$email_admin',  '$senha_admin')";
$sql_execute = $mysqli->query($sql_cadastro) or die($mysqli->error);
echo("
        <script>
            location.href='cadastroconteudista.php';
        </script>
    ")
?>