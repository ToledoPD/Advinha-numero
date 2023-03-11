<html>
<body>
  <h1> Advinhe o numero que estou pensando?</h1>
  <form method="post">
    <input type="number" name="numero_tentativa"></input>
    <button type="submit">Tentar</button>	
  </form>
  <?php
    $numero_certo = rand(0,10);
	$numero_escolhido = $_POST["numero_tentativa"];
	if ($numero_certo == $numero_escolhido) 
		{
			echo ("Parabens você acertou o numero!");
		}
	else 
	{
		echo ("Errou");
	}
  ?>		
</body>
</html>
