<form action="" method="post">
	<label for="operacao">Selecione a operação: </label>
	<select name="operacao" id="operacao">
		<option value="deposito">Deposito</option>
		<option value="saque">Saque</option>
		<option value="transferencia">Transferência</option>
	</select>
	<button>Confirmar</button>
</form>

<?php
	if ($_POST) {
		$operacao = $_POST['operacao'];
		if ($operacao == "deposito") {
			echo "<h1>Depósito</h1>";
			echo "<form action='' method='post'>";
			echo "<label for='valor'>Valor: </label>";
			echo "<input type='number' name='valor' id='valor'/>";
			echo "<button>Confirmar</button>";
			echo "</form>";
		} else if ($operacao == "saque") {
			echo "<h1>Saque</h1>";
			echo "<form action='' method='post'>";
			echo "<label for='valor'>Valor: </label>";
			echo "<input type='number' name='valor' id='valor'/>";
			echo "<button>Confirmar</button>";
			echo "</form>";
		} else if ($operacao == "transferencia") {
			echo "<h1>Transferência</h1>";
			echo "<form action='' method='post'>";
			echo "<label for='valor'>Valor: </label>";
			echo "<input type='number' name='valor' id='valor'/>";
			echo "<label for='conta'>Conta: </label>";
			echo "<input type='number' name='conta' id='conta'/>";
			echo "<button>Confirmar</button>";
			echo "</form>";
		}
	}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
