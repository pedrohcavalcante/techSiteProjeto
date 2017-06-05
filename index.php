<?php
include("admin/conexao.php")
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>INFOrmations - Seu Canal de Informações Sobre Tecnologia</title>
        <!-- Compiled and minified CSS -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="admin/materialize/js/materialize.min.js"></script>
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
        <!--<div class="container">-->
            <?php
                    $sql_code = "SELECT * FROM noticias.noticias WHERE publica = true";
                    //$sql_tag = "SELECT * FROM noticias.tags";
                    $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);
                    //$sql_query_tag = $mysqli->query($sql_tag) or die ($mysqli->error);
                    //$sql_tag_dados = $sql_query_tag->fetch_assoc();
                    //$tamanho_rows = $sql_query_tag->num_rows;
                   // $row = $result->fetch_assoc();
                    /*if ($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()){
                            echo "id : " . $row["id"];
                        }
                    }else{
                        echo ("0 results");
                    }*/
                    //echo (" <div class='row'>");
                    echo (" <div class='row'>");
                    while ($row = $sql_query->fetch_assoc()){
                     
                    for ( $i = 0; $i < 1; $i++){
                        
                        echo("<div class='col s6'>
                                <div class='card darken-1'>
                                    <div class='card-content'>
                                        <span class='card-title'>".$row['titulo']."</span>
                                        <p>".$row['noticias']."</p>
                                    </div>
                                            <div class='card-action'>
                                                <a href='".$row['link']."'>Ler Matéria</a>");
                                                $sql_tag = "SELECT * FROM noticias.tags WHERE id_noticia = '$row[id_noticias]'";
                                                $sql_query_tag = $mysqli->query($sql_tag) or die ($mysqli->error);
                                                while ($teste = $sql_query_tag->fetch_assoc()){
                                                    //echo ("id noticia".$row['id_noticias']."-> id_tag_noticia".$teste['id_noticia']." ");
                                                    if($row['id_noticias'] == $teste['id_noticia']){
                                                        echo("<a class='chip' href='http://localhost:8080/tags/'".$teste['nome_tag'].">#".$teste['nome_tag']."</a>");
                                                    }   
                                                }   
                                echo("      </div>
                                </div>
                            </div>
                        "); 
                                     }
                              
                    }
                    
                    
                    echo("</div>");
            ?>
        <!--</div>      -->
    </body> 
</html>

<?php
mysqli_close($mysqli);
?>