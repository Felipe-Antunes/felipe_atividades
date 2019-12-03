<?php

  $method = $_SERVER["REQUEST_METHOD"];

  print "$method <br>";

  $post = $method == "POST";

 if ($post) {

  $min = $_POST["min"];

  $max = $_POST["max"];

  $rep = $_POST["rep"];

  }

  else {

  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividades PHP</title>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

   <h1>Lançador de dados</h1>
 
   <form method="POST" action="lancador_de_dados.php">

      <label>Valor mínimo:</label>
       	<input type="number" name="min"/><br>

       <br>

      <label>Valor máximo:</label>
       	<input type="number" name="max"/><br>
       
       <br>

      <label>Digite o valor de repetição:</label>
       	<input type="number" name="rep"><br>

      <br>

      <input type="submit" name="entre" value="Enviar">

      <input type="reset" name="lim" value="Limpar">

   </form>   


   <?php  ?>

   <a href="index.html"><h2>Home</h2></a>

</body>
</html>