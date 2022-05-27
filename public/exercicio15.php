<h1>Login e Senha</h1>
<form action="" method="post">
	<label for="nome">Digite seu nome:</label>
	<input type="text" name="nome" id="nome" required /><br />
		<label for="password">Digite sua senha:</label>
	<input type="password" name="password" id="password" required /><br />
	<button>Confirmar</button>
</form>

<?php
	if ($_POST) {
		$i = 0;
		while (($_POST["nome"] != "admin") && ($_POST["password"] != "admin") && $i < 1) {
			$i++;
			echo "Usuário ou senha inválidos! <br />";
		}
		if ($_POST["nome"] == "admin" && $_POST["password"] == "admin") {
			echo "Bem vindo, " . $_POST["nome"] . "! <br />";
		}
		
	}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
