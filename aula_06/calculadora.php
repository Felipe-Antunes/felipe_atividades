
<?php

 $n1 = $_GET["n1"];
 $n2 = $_GET["n2"];

 $soma = $n1 + $n2;

 $sub = $n1 - $n2;

 $mult = $n1 * $n2;

 $div = $n1 / $n2;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>AulaPHP</title>
    <style>

body {
	background-color: black;
}

 a {
 	color: #666666;
 }

 h1 {
    color: #ffffff;
 }

 h2 {
 	color: #ffffff;
 	font-size: 23pt;
 }

 p {
 	color: #ffffff;
 	font-size: 20pt;
 }

 label {
 	color: #ffffff
 }

legend {
	color: #ffffff;
}

    </style>
</head>
<body>

   <h1>Calculadora</h1>

   <p>Número 1: <?php echo $n1 ?></p>

   <p>Número 2: <?php echo $n2 ?></p>

   <h2>Resultados:</h2>

   <p>Soma: <?php echo $soma ?></p>

   <p>Subtração: <?php echo $sub ?></p>

   <p>Multiplicação: <?php echo $mult ?></p>

   <p>Divisão: <?php echo $div ?></p>

</body>
</html>