<?php

  $method = $_SERVER["REQUEST_METHOD"];

  print "$method <br>";

  $post = $method == "POST";

if ($post) {
	 function get_numeric($n1) {
	
	 if (is_numeric($n1)) {
    return $n1 + 0;
     } 
  return 0;
}

 $n1 = $_POST["n1"];
 $n2 = $_POST["n2"];

// processo de validação das variáveis

      if (is_numeric($n1)) {
      	  if (is_numeric($n2)) {
      	  	if ($n1 != 0) {
      	  		if ($n2 != 0) {
      	  			# code...
      	  			$soma = $n1 + $n2;

                    $sub = $n1 - $n2;

                    $mult = $n1 * $n2;

                    $div = $n1 / $n2;

      	  		}
      	  		else {
      	  			echo "Digite um valor diferente de zero";
      	  		}
      	  		# code...
      	  	}
      	  	else {
      	  		echo "Digite um número diferente de zero";
      	  	}
            
      		# code...
      	  }
      	  else {
      		echo "O número 2 não é um valor numérico!";
      	}
      	# code...
      }
      else {
         echo "O número 1 não é um valor numérico!";
      }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>AulasPHP</title>
</head>
<body>

      <form method="POST" action="calculadorav2.php">
     <fieldset>
       <legend>Calculadora V2</legend>

        <label>Número 1:</label>
         	<input type="number" name="n1" id="n1" placeholder="Informe o primeiro valor" autofocus ><br>

        <br>

        <label>Número 2:</label>
         	<input type="number" name="n2" id="n2" placeholder="Informe o segundo valor"><br>

        <br>

        <input type="submit" name="entre" id="entre" value="Entre">

        <input type="reset" name="limpar" id="limpar" value="Limpar">

     </fieldset>
    </form>

 <h1>Veja os resultados abaixo</h1>

<?php
 
 if ($post) {
 	
    if (is_numeric($n1)) {
    	# code...
    	if (is_numeric($n2)) {
    		# code...
    		if ($n2 != 0) {
    			# code...

       			print "Valores informados:<br>";
       			print "Número 1: $n1<br>";
       			print "Número 2: $n2<br>";

       			print "Resultados:<br>";

       			print "Soma: $soma<br>";
       			print "Subtração: $sub<br>";
       			print "Multiplicação: $mult<br>";
       			print "Divisão: $div<br>";

      	    }
        
        }
    
    }

}

?>
</body>
</html>