<form action="" method="post">
	<label for="value">Digite um número: </label>
	<input type="number" name="value" id="value" required /><br />
	<button>Confirmar</button>
</form>

<?php
	if ($_POST) {
		$i = 0;
		while ($i <= 10) {
			echo $_POST["value"] . " x " . $i . " = " . ($i * $_POST["value"]) . "<br />";
			$i++;
		};
	};

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
