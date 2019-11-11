<?php

  $titulo = "Dinâmico";
  $inteiro = 50;
  $reais = 39.55;
  $string = "Felipe"

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<title>Variáveis</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">

</head>
<body>

  <h1>Titulo: <?php echo $titulo; ?></h1>

  <h2>Informações das variaveis:</h2>

  <p>$inteiro: <?php var_dump($inteiro); ?></p>

  <p>$reais: <?php var_dump($reais); ?></p>

  <p>$string: <?php var_dump($string); ?></p>

  <a href="index.html">Aula 05</a><br>

</body>
</html>