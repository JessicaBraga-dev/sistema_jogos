<!DOCTYPE html>
<?php 
require_once "includes/banco.php";
require_once "includes/login.php"; 
require_once "includes/funcoes.php"; 
?>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="estilos/estilo.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<title>logout usuário</title>
	</head>
	<body>
		<div id="corpo">
            <?php
                logout();
                echo msg_sucesso('Usuário desconectado com sucesso');
                echo voltar();
            ?>
        </div>
    </body>
</html>