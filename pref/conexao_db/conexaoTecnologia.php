<?php # Conex�o do banco de dados
	
	// Mensagens de Erro
	$msg[0] = "Erro de conex�o, contate o Administrador do Sistema.";
	$msg[1] = "N�o foi poss�vel selecionar o banco de dados, contate o Administrador do Sistema.";
	$msg[2] = "Contate o Administrador do Sistema.";
	
	$host = "127.0.0.1";
	$db   = "site";
	$user = "root";
	$pass = "";
	$conn = @mysql_connect($host, $user, $pass) or die ($msg[0]); 
	
	@mysql_select_db($db, $conn) or die($msg[1]); 
?>