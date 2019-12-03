<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
</head>
<body>

	<h1>Entre agora!</h1>

	<form method="POST" action="login.php">
		<fieldset>
		  <legend>Login</legend>

		  <label>E-Mail:</label>
		  	<input type="email" name="email" id="email" placeholder="Informe seu E-Mail" required><br>

          <br>

		  <label>Senha:</label>
           	<input type="password" name="senha" id="senha" placeholder="********" required>

            <input type="submit" name="enviar" id="enviar" value="Entrar">

            <input type="reset" name="limpar" id="limpar" value="Limpar">
		
		</fieldset>
	</form>

  <a href="index.html">Volte</a>

</body>
</html>