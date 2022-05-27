<h1>Múltiplos de 100</h1>

<?php
	
		for ($i=0; $i <= 100; $i++) { 
			if ($i % 2 == 0) {
				echo $i . "<br /> ";
			}
		}

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para home</button>";
echo "<br/>";
