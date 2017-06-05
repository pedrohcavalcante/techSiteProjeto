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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!--<script type="text/javascript" src="materialize/js/materialize.min.js"></script>-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link rel="stylesheet" href="admincss/admincss.css">
         <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    </head>
    <body class="test">
    <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo right"><bold>INFO</bold>rmations</a>
                    <!--<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>-->
                    <div id="nav-mobile" class="left hide-on-med-and-down">
                        <div class="active"><a href="#"><img class="circle responsive-img" src="img/avatar1.png" alt="avatar"><?php echo ("Bem Vindo, ".$row['nome_admin']."!"); ?></a>      <a href='logout.php'>Sair</a></div>
                    </div>
                </div>
            </nav>
        </div>   
    
    <div class="row ">
        <div class="col s3 leftRow">
            <ul>
                <li>Notícias</li>
                <li>Escrever Notícia</li>
                <li>Rascunho</li>
                <li>Sobre</li>
            </ul>
        </div>
        <div class="col s9">
            <?php 
            echo("<table><thead>
          <tr>
              <th>Título</th>
              <th>Noticia</th>
              <th>Publicado</th>
          </tr>
        </thead>");
            echo("<tbody>");
                while ($noticias = $sql_code_new_query->fetch_assoc()){
                    echo (" <tr>
                                <td>".$noticias['titulo']."</td>
                                <td>".$noticias['noticias']."</td>");
                                if($noticias['publica']){
                                    echo ('<td><i class="small material-icons ">thumb_up</i></td>');
                                }else{
                                    echo("<td><i class='small material-icons'>thumb_down</i></td>");
                                }
                            echo ("</tr>");
                            
                }
            echo ("</tbody></table>");
             ?>
             
        </div>
    </div>
    
    </body>
</html>