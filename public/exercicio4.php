<form action="" method="post">
			Digite o Valor do Depósito:
			<input type="number" name="valor" required /><br />
			<button>Confirmar</button>
</form>

<?php
$nome = $_POST["nome"];
$_SESSION["nome"] = $nome;

if ($_POST["valor"]) {
  $saldo = $saldo + $_POST["valor"];
} else {
  $saldo = $_POST["valor"];
}

echo "Olá $nome, seu saldo é de R$ $saldo";
echo "<br/>";

echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
