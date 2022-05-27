<form action="" method="post">
			Digite sua altura:
			<input type="number" name="altura" step="0.01" required /><br />
			Digite seu peso:
			<input type="number" name="peso" required /><br />
			<button>Confirmar</button>
</form>

<?php
	if ($_POST) {
		$altura = $_POST["altura"];
		$peso = $_POST["peso"];
		$imc = $peso / ($altura * $altura);
		
		echo "Altura: " . $altura . "m <br>";
		echo "Peso: " . $peso . "kg<br>";
		echo "IMC: " . $imc . " kg/m2<br>";

		if ($imc < 18.5) {
			echo "Abaixo do peso";
		} elseif ($imc >= 18.5 && $imc <= 24.9) {
			echo "Peso normal";
		} elseif ($imc >= 25 && $imc <= 29.9) {
			echo "Sobrepeso";
		} elseif ($imc >= 30 && $imc <= 34.9) {
			echo "Obesidade grau I";
		} elseif ($imc >= 35 && $imc <= 39.9) {
			echo "Obesidade grau II";
		} elseif ($imc >= 40) {
			echo "Obesidade grau III";
		}
	}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
