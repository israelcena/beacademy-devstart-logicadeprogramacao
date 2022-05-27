<form action="" method="post">
	<label for="operacao">Selecione a operação: </label>
	<select name="operacao" id="operacao">
		<option value="deposito">Deposito</option>
		<option value="saque">Saque</option>
	</select>
	<button>Confirmar</button>
</form>

<?php
	if ($_POST) {
	}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
