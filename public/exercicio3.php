<?php
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$maiorQue18 = false;
$idade25 = false;
$nomeMarcos = "Marcos";
$statusNomeMarcos = "";

echo "Nome: " . $nome . "<br/>";
echo "Idade: " . $idade . " anos <br/>";

if ($idade > 18) {
    $maiorQue18 = true;
} else {
    $maiorQue18 = false;
}

if ($idade = 25) {
  $idade25 = true;
}

if ($idade = 25 && $nome = "Marcos" ) {
  $statusNomeMarcos = "Bem vindo, Marcos e você tem 25 anos";
} else {
  $statusNomeMarcos = "Não é Marcos com 25 anos";
}

$statusDaIdade18 = $maiorQue18 ? "maior de idade" : "menor de idade";
$statusDaIdade25 = $idade25 ? "A idade é 25" : "A idade não é 25";

echo "Você é " . $statusDaIdade18;
echo "<br/>";
echo $statusDaIdade25;
echo "<br/>";
echo $statusNomeMarcos;
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar</button>";
