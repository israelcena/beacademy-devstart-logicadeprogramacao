<form action="" method="post">
	<label for="value1">Digite um número: </label>
	<input type="number" name="value1" id="value1" required /><br />
	<label for="value2">Digite outro número: </label>
	<input type="number" name="value2" id="value2" required /><br />
	<button>Confirmar</button>
</form>

<?php
	if ($_POST) {
		$value1 = $_POST["value1"]; 
		$value2 = $_POST["value2"];

		$soma = $value1 + $value2;
		$subtracao = $value1 - $value2;
		$multiplicacao = $value1 * $value2;
		$divisao = $value1 / $value2;

		echo "A Soma de {$value1} e {$value2} é : " . $soma . "<br />";
		echo "A Subtração de {$value1} e {$value2} é : " . $subtracao . "<br />";
		echo "A Multiplicação de {$value1} e {$value2} é : " . $multiplicacao . "<br />";
		echo "A Divisão de {$value1} e {$value2} é : " . $divisao . "<br />";
	}
echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
