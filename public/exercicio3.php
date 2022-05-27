<form action="" method="post">
	Digite Seu Nome: <input type="text" name="nome" required /><br />
	Digite Sua Idade: <input type="number" name="idade" required /><br />
  <button>Confirmar</button>
</form>

<?php
if ($_POST) {
  echo "Olá, " . $_POST['nome'] . "! Você tem " . $_POST['idade'] . " anos." . "<br />";
  echo "Idade maior que 18? " . ($_POST['idade'] > 18 ? "Sim" : "Não") . "<br />";
  echo "Idade é igual a 25 e nome diferente de Marcos? " . ($_POST['idade'] == 25 && $_POST['nome'] != "Marcos" ? "Sim" : "Não") . "<br />";
  echo "Idade é diferente de 25 e nome igual a Marcos? " . ($_POST['idade'] != 25 && $_POST['nome'] == "Marcos" ? "Sim" : "Não") . "<br />";
  echo "Idade dividida por 2 é igual a 0 ? " . (($_POST['idade'] / 2) == 0 ? "Sim" : "Não") . "<br />";
}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar p/ home</button>";
