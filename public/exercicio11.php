<form action="" method="post">
	<label for="numero">Informe um numero: </label><br/> 
	<input type="number" name="numero" id="numero" required /> <br/> 
	<button>Confirmar</button>
</form>

<?php
	if ($_POST) {
		for ($i=0; $i <= 10; $i++) { 
			echo $_POST['numero'] . " x " . $i . " = " . ($_POST['numero'] * $i) . "<br/>";
		}
	}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
