<!DOCTYPE html>
<html>
	<head>
		<title> Portfólio </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
	</head>
	<body>
		<h1> Bem vindo</h1>
		
		
		<p> A data de hoje é: 
<?php
		$btnSubmit = $_POST["btnSubmit"];    
		if($btnSubmit == "Que dia é hoje?") echo date("d/m/Y");
		else "Erro :(";
?>
		</p>
	</body>
</html>
