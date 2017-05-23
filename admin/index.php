<!DOCTYPE>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="admincss/adminCss.css">
        <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <script language="javascript" type="text/javascript">
            function validar(){
                var nome = formLogin.usuario.value;
                var senha = formLogin.senha.value;

                if (nome == "" || senha == ""){
                    alert('Erro no preenchimento do usuário/senha');
                }else{
                    location.href='login.php';
                }
            }
         </script>
    </head>
    <body>
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
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

