<!DOCTYPE html>
<html>
<head>
	<title>Formulário - Calculadora</title>
</head>
<body>
<form action="calculadora.php" method="post">
	<label>Valor 1</label>
	<input type="text" name="numero1" required><br>
	<label>Valor 2</label>
	<input type="text" name="numero2" required><br>
	<label>Escolha uma das operações abaixo:</label><br>
	<input type="radio" name="operacao" value="+" required>+<br>
	<input type="radio" name="operacao" value="-" required>-<br>
	<input type="radio" name="operacao" value="*" required>*<br>
	<input type="radio" name="operacao" value="/" required>/<br>
	<input type="submit" value="CALCULAR">
</form>
</body>
</html>