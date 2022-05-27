<form action="" method="post">
	<label for="operacao">Selecione a operação: </label>
	<select name="operacao" id="operacao">
		<option value="deposito">Deposito</option>
		<option value="saque">Saque</option>
	</select>
	<button>Confirmar</button>
</form>

<?php
 $saldo = 100;
	if ($_POST) {
		$operacao = $_POST["operacao"];
		
		if ($operacao == "deposito") {
			echo "<form action=\"\" method=\"post\">";
			echo "Digite o valor do deposito: ";
			echo "<input type=\"number\" name=\"valor\" step=\"0.01\" required /><br />";
			echo "<button>Confirmar</button>";
			echo "</form>";
			$valor = $_POST["valor"];
			$novoSaldo = $saldo + $valor;

		} elseif ($operacao == "saque") {
			echo "<form action=\"\" method=\"post\">";
			echo "Digite o valor do saque: ";
			echo "<input type=\"number\" name=\"valor\" step=\"0.01\" required /><br />";
			echo "<button>Confirmar</button>";
			echo "</form>";
			$valor = $_POST["valor"];
			$novoSaldo = $saldo - $valor;
		}
		echo "O saldo atual é de R$ " . $novoSaldo;
	}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
