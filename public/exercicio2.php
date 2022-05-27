<form action="" method="post">
	Digite Seu nome: <input type="text" name="nome" required /><br />
	Digite Sua Altura:
	<input type="number" name="altura" step="0.01" required /><br />
	Digite Seu Peso: <input type="number" name="peso" required /><br />
  <button>Confirmar</button>
</form> 

<?php

if ($_POST) {
$nome = $_POST["nome"];
$altura = $_POST["altura"];
$peso = $_POST["peso"];
$imc = $peso / ($altura * $altura);

echo "Nome: " . $nome . "<br>";
echo "Altura: " . $altura . "m <br>";
echo "Peso: " . $peso . "kg<br>";
echo "IMC: " . $imc . " kg/m2<br>";
}

echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar p/ home</button>";
