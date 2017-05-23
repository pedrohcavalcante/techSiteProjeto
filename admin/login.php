<?php

$host = 'localhost';
$username = 'root';
$password = 'teste';

$connect = mysqli_connect($host, $username, $password, 'testes');

if (!$connect){
    die("Not found:" . mysql_error());
}

$login = $_POST['usuario'];
$senha = MD5($_POST['senha']);

$sql="select * from usuarios where email='".$login."' and senha='".$senha."'";
$resultados = mysql_query($sql)or die (mysql_error());
$res=mysql_fetch_array($resultados); //
	if (@mysql_num_rows($resultados) == 0){
		echo 0;	//Se a consulta não retornar nada é porque as credenciais estão erradas
	}


/*$sql_conection_db = mysql_select_db('testes', $connect);

if (!$sql_conection_db){
    die ("Não foi possível utilizar este banco de dados".mysql_error());
}*/
?>