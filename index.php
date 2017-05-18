<?php

$host = 'localhost';
$username = 'root';
$password = 'teste';

$connect = mysqli_connect($host, $username, $password, 'testes');

if (!$connect){
    die("Not found:" . mysql_error());
}

/*$sql_conection_db = mysql_select_db('testes', $connect);

if (!$sql_conection_db){
    die ("Não foi possível utilizar este banco de dados".mysql_error());
}*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>INFOrmations - Seu Canal de Informações Sobre Tecnologia</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link rel="stylesheet" href="css/edicaocss.css">
         <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    </head>
    <body>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                        <a href="#" class="brand-logo right"><bold>INFO</bold>rmations</a>
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li class="active"><a href="#">Início</a></li>
                        <li><a href="#">Tecnologia</a></li>
                        <li><a href="#">Segurança</a></li>
                    </ul> 
                </div>
            </nav>
        </div>   
        <div class="container">
            <?php
                    $sql = "SELECT id, titulo, noticias, link FROM noticias";
                    $result = ($connect->query($sql));
                   // $row = $result->fetch_assoc();
                    /*if ($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()){
                            echo "id : " . $row["id"];
                        }
                    }else{
                        echo ("0 results");
                    }*/
                    echo (" <div class='row'>");
                    while ($row = $result->fetch_assoc()){
                     
                    for ( $i = 0; $i < 1; $i++){
                        echo("<div class='col s12 m6'>
                            <div class='card darken-1'>
                                <div class='card-content'>
                                    <span class='card-title'>".$row['titulo']."</span>
                                    <p>".$row['noticias']."</p>
                                </div>
                                <div class='card-action'>
                                    <a href='".$row['link']."'>Ler Matéria</a>
                                    <a class='waves-effect waves-light btn'>#tag</a>
                                </div>
                            </div>
                        </div>
                        ");
                    }
                    
                    }
                    echo("</div>");
            ?>
        </div>      
    </body> 
</html>

<?php
mysqli_close($connect);
?>