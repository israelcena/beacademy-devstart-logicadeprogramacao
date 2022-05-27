<form action="" method="post">
	<label for="value1">Digite um número: </label>
	<input type="number" name="value1" id="value1" required ><br />
	<label for="value2">Digite outro número: </label>
	<input type="number" name="value2" id="value2" required ><br />
	<button>Confirmar</button>
</form>

<?php
	if ($_POST) {
		echo "Os múltiplos de 3 entre {$_POST['value1']} e {$_POST['value2']} são: ";
		for ($i = $_POST['value1']; $i <= $_POST['value2']; $i++) {
			if ($i % 3 == 0) {
				echo $i . " ";
			}
		}
	}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
