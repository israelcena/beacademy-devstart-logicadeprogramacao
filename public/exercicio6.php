<form action="" method="post">
			Digite sua idade:
			<input type="number" name="idade" step="0.01" required /><br />
			<button>Confirmar</button>
</form>

<?php
	if ($_POST) {
		$idade = $_POST["idade"];
		
		if ($idade < 18) {
			echo "Menor de idade";
		} elseif ($idade >= 18 && $idade <= 65) {
			echo "Maior de idade";
		} elseif ($idade > 65) {
			echo "Idoso";
		}
	}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
