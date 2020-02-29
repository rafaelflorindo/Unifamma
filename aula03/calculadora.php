<?php
if ($_POST) {
	if (isset($_POST["numero1"]) &&
		isset($_POST["numero2"]) &&
		isset($_POST["operacao"])) {
	
		if(!empty($_POST["numero1"]) &&
		!empty($_POST["numero2"]) &&
		!empty($_POST["operacao"])){

			$numero1 = $_POST["numero1"];
			$numero2 = $_POST["numero2"];
			$operacao = $_POST["operacao"];
			
			if($operacao == "+"){
				$resultado = $numero1 + $numero2;
			}elseif($operacao == "-"){
				$resultado = $numero1 - $numero2;
			}elseif ($operacao == "*") {
				$resultado = $numero1 * $numero2;
			}elseif (($operacao == "/") && ($numero2!=0)){
				$resultado = $numero1 / $numero2;
			}else{
				$resultado = "Impossível dividir por 0";
			}
			echo "Resultado = " . $resultado;
		}else{
			echo "Variáveis vazias";
		}
	}else{
		echo "Não existe variáveis";
	}
}else{
	echo "Arquivo errado!";
}
?>