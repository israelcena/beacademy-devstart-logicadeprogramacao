<form action="" method="post">
	<label for="value1">Digite um numero: </label>
	<input type="number" name="value1" id="value1" required /><br />
	<label for="value2">Digite outro numero: </label>
	<input type="number" name="value2" id="value2" required /><br />
	<label for="operacao">Selecione a operação: </label><br /> 
	<select name="operacao" id="operacao">
		<option value="soma">Soma</option>
		<option value="subtracao">Subtração</option>
		<option value="multiplicacao">Multiplicação</option>
		<option value="divisao">Divisão</option>
	</select>
	<button>Confirmar</button>
</form>

<?php
	if ($_POST) {
		$value1 = $_POST["value1"];
		$value2 = $_POST["value2"];
		$operacao = $_POST["operacao"];

		switch ($operacao) {
			case 'soma':
				$resultado = $value1 + $value2;
				break;
			case 'subtracao':
				$resultado = $value1 - $value2;
				break;
			case 'multiplicacao':
				$resultado = $value1 * $value2;
				break;
			case 'divisao':
				$resultado = $value1 / $value2;
				break;
			default:
				"Operação inválida";	
				break;
		}
		
		echo "O resultado da operação é: " . $resultado;
	}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
