<?php
include('proteger.php');
protect();
include('conexao.php');

$sql_code = "SELECT nome_admin FROM noticias.admin WHERE id_admin = '$_SESSION[admin]'";
$sql_query = $mysqli->query($sql_code) or die ($mysqli->error);
$row = $sql_query->fetch_assoc();
?>

<!DOCTYPE>
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
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo right">Admin</a>
                    <!--<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>-->
                    <div id="nav-mobile" class="left hide-on-med-and-down">
                        <div class="active"><a href="#"><img class="circle responsive-img" src="img/avatar1.png" alt="avatar"><?php echo ("Bem Vindo, ".$row['nome_admin']."!"); ?></a>      <a href='logout.php'>Sair</a></div>
                    </div>
                </div>
            </nav>
        </div>   
    
        <div class="row ">
            <div class="col s3 leftRow">
                <ul class="collection">
                    <li class="collection-item"><a href="opainel.php">Notícias</a></li>
                    <li class="collection-item active"><a href="">Escrever Notícia</a></li>
                    <!--<li class="collection-item"><a href="">Rascunho</a></li>-->
                    <li class="collection-item"><a href="cadastroconteudista.php">Cadastrar Conteudista</a></li>
                </ul>
            </div>
            <div class="col s9">
                <form name='formCadastroTexto' action='insertNoticia.php' method='POST'>
                <br>
                <div class="row">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="inputTitulo" type="text" name="inputTitulo" data-length="200">
                            <label for="inputTitulo">Título</label>
                        </div>
                    </div>
                </div>
                    <textarea name="textPublicacao" id="textPublicacao" rows="10" cols="80" >
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'textPublicacao' );
                    </script>
                    <br>
                    <button type='submit' class='waves-effect waves-light btn right' value='Login'>Cadastrar</button>
                    <div class="switch">
                        <p>Publica</p>
                        <p>
                            <input name="publicarBool" type="radio" id="test1" class='with-gap' checked value=1 />
                            <label for="test1">Sim</label>

                            <input name="publicarBool" type="radio" id="test2" class='with-gap' value=0 />
                            <label for="test2">Não</label>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>