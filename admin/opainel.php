<?php
include('proteger.php');
include ('conexao.php');
protect();

$sql_code = "SELECT nome_admin FROM noticias.admin WHERE id_admin = '$_SESSION[admin]'";
$sql_code_new = "SELECT * FROM noticias.noticias WHERE id_admin = '$_SESSION[admin]'";
$sql_code_new_query = $mysqli->query($sql_code_new) or die ($mysqli->error);
$sql_query = $mysqli->query($sql_code) or die ($mysqli->error);
$row = $sql_query->fetch_assoc();




?>

<html>
    <head>
        <!-- Compiled and minified CSS -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!--<script type="text/javascript" src="materialize/js/materialize.min.js"></script>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link rel="stylesheet" href="admincss/admincss.css">
         <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    </head>
    <body class="test">
    <?php echo ("Bem Vindo, ".$row['nome_admin']."!"); ?>
    <div class="row">
        <div class="col s3">
            <ul>
                <li>Notícias</li>
                <li>Escrever Notícia</li>
                <li>Rascunho</li>
                <li>Sobre</li>
            </ul>
        </div>
        <div class="col s9">
            <?php 
            echo("<ul>");
                while ($noticias = $sql_code_new_query->fetch_assoc()){
                    echo ("<li>".$noticias['titulo']."</li>");
                }
            echo ("</ul>");
             ?>
        </div>
    </div>
    <p><a href='logout.php'>Sair</a>
    </body>
</html>