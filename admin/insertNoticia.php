<?php
include('proteger.php');
protect();
include('conexao.php');

$texto = $_POST['textPublicacao'];
$titulo = $_POST['inputTitulo'];
$print = $_POST['publicarBool'];

$link = strtolower(str_replace(' ','-',$titulo));

if ($print == 1){
    $print=true;
}else{
    $print=false;
}

$sql_inserir_noticia = "INSERT INTO noticias(noticias, titulo, link, descricao, id_admin, publica) VALUES ('$texto', '$titulo', 'http://localhost:8080/projetositeinfo/$link', 'teste', '$_SESSION[admin]', '$print')";
$sql_execute = $mysqli->query($sql_inserir_noticia) or die($mysqli->error);

echo("
    <script>
    location.href = 'escreverNew.php';
    </script>
")
?>