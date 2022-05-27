<form action="" method="post">
	<label for="figura">Selecione a figura geométrica: </label> <br />
	<select name="figura" id="figura"> 
		<option value="quadrado">Quadrado</option>
		<option value="triangulo">Triângulo</option>
	</select> <br />
	<label for="value">Digite o valor de um dos lados em cm: </label>
	<input type="number" name="value" id="value" step="0.01" required /></br>
	<button>Confirmar</button>
</form>

<?php
	if ($_POST) {
		$figura = $_POST["figura"];

		switch ($figura) {
			case 'quadrado':
				$name = "Quadrado";
				$area = $_POST["value"] * $_POST["value"];
				$perimetro = $_POST["value"] * 4;
				break;
			case 'triangulo':
				$name = "Triângulo";	
				$area = ($_POST["value"] * $_POST["value"])/2;
				$perimetro = $_POST["value"] * 3;
				break;	
			
			default:
				echo "Figura inválida";
				break;
		}
		echo "Sua figura é um " . $name . " com área de " . $area . "cm² e perímetro de " . $perimetro . "cm.";
	}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
