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
<!DOCTYPE>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link rel="stylesheet" href="admincss/adminCss.css">
         <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <script language="javascript" type="text/javascript">
            function validar(){
                var nome = formLogin.usuario.value;
                var senha = formLogin.senha.value;

                if (nome == ""){
                    formLogin.usuario.focus();
                    Materialize.toast('usuário não existe', 4000);
                    alert('Preencha o campo com seu nome');
                }
                if (senha == ""){

                }
            }
         </script>
    </head>
    <body>
    <div class="body_login">
            <div class="row">
                <form class="col s12" name="formLogin" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate" name="usuario">
                            <label for="icon_prefix">Login</label>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="vpn_key" type="password" class="validate" name="senha">
                            <label for="vpn_key">Senha</label>
                        </div>
                    </div>
                    <button type='submit' class='waves-effect waves-light btn right' onclick='validar()' value='Login'>Login</button>
                </form>
            </div>
        </div>
    </body>
</html>

