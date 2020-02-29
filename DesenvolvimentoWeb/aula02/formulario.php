<!DOCTYPE html>
<html>
<head>
	<title>Formulário Contato</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Formulário para Contato</h1>
	<form action="formulario.php" method="get">
		<label>Nome: </label>	
		<input type="text" name="nome">
		<br>
		<label>E-mail: </label>
		<input type="email" name="email"><br>
		<label>Estado: </label>
		<select name="estado">
			<option value=""></option>
			<option value="PR">Paraná</option>
			<option value="SP">São Paulo</option>
		</select><br>
		<input type="checkbox" value="1" name="notificacao">Deseja receber notificações via e-mail?<br>
		Sexo: <input type="radio" value="M" name="sexo">Masculino
		<input type="radio" value="F" name="sexo">Feminino
		<br>
		<p>Conte-nos um pouco sobre você.</p>
		<textarea cols="20" rows="3" name="mensagem" maxlength="300"></textarea>
		<br>
		<input type="submit" value="Enviar">
	</form>
<?php
//isset = verifica se existe a variável
//empty = verifica se a variável está vazia
if(isset($_GET)){
	if(
		!empty($_GET["nome"]) && 
		!empty($_GET["email"])
	){
		$nome = $_GET["nome"];
		$email = $_GET["email"];

		echo "Nome = " . $nome;
		echo "<br>";
		echo "E-mail = " . $email;
	}

}

?>

</body>
</html>