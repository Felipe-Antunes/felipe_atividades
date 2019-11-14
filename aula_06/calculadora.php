
<?php

 $n1 = $_GET["n1"];
 $n2 = $_GET["n2"];

$ehPost = $_SERVER["REQUEST_METHOD"];

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

    </style>
</head>
<body>
    
       <form method="post" action="calculadora.php"> 
         <fieldset>
         
           <legend>Calculadora</legend>

        <label>Número 1:</label>
         	<input type="number" name="n1" id="n1" autofocus required><br>

        <br>

        <label>Número 2:</label>
         	<input type="number" name="n2" id="n2" required><br><br>

        <input type="submit" name="entre" id="entre" value="Entre">
        <input type="reset" name="limpar" id="limpar" value="Limpar">

     </fieldset>
   </form>



   <?php if ($ehPost) {  ?>

   <h1>Calculadora</h1>

   <p>Número 1: <?php echo $n1 ?></p>

   <p>Número 2: <?php echo $n2 ?></p>

   <h2>Resultados:</h2>

   <p>Soma: <?php echo $soma ?></p>

   <p>Subtração: <?php echo $sub ?></p>

   <p>Multiplicação: <?php echo $mult ?></p>

   <p>Divisão: <?php echo $div ?></p>

   <?php } ?>
</body>
</html>