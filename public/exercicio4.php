<form action="" method="post">
			Digite o Valor do Depósito:
			<input type="number" name="saldo" required /><br />
			<button>Confirmar</button>
</form>

<?php
$saldo = 0;

	if ($_POST) {
		$saldo += $_POST['saldo'];
		echo "O valor do seu depósito é: R$ " . $saldo . "<br />";
		echo "O valor do seu depósito com 10% de juros é: R$ " . ($saldo * 1.1) . "<br />";
		echo "O valor do seu depósito com 10% de juros e mais R$ 100 é: R$ " . ($saldo * 1.1 + 100) . "<br />";
	}

echo "Olá! Seu saldo é de R$ $saldo";
echo "<br/>";

echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
