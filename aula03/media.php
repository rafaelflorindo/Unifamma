<?php
$notas[0] = 45;
$notas[5] = 78;
echo $notas[0];
echo "<br>";

$notas = array(4,5,9,7);
echo $notas[3];
echo "<br>";

$notas1 = array(
				0=>42,
				1=>14,
				2=>7,
				3=>15,
				4=>10	
		);

$soma = 0;
for($i = 0; $i < count($notas1); $i++){
	//$soma = $soma + $notas[$i];
	$soma += $notas1[$i];
}
$media = $soma / count($notas1);
echo "<br>Media: " . $media;





/*$noticia[0][0] = "Rafael";
$noticia[0][1] = 38;

echo $noticia[0][0];
echo $noticia[0][1];*/



?>