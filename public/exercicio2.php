<?php
$nome = $_POST["nome"];
$altura = $_POST["altura"];
$peso = $_POST["peso"];
$imc = $peso / ($altura * $altura);

echo "Nome: " . $nome . "<br>";
echo "Altura: " . $altura . "m <br>";
echo "Peso: " . $peso . "kg<br>";
echo "IMC: " . $imc . " kg/m2<br>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar</button>";
