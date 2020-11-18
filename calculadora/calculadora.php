<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="negocioCalculadora.php" method="post">
		<label for="">Valor1</label>
		<input type="text" name="valor1" autocomplete="off">
		<br>
		<label for="">Valor2</label>
		<input type="text" name="valor2" autocomplete="off">
		<br>
		<select name="opcion">
			<option value="suma">suma</option>
			<option value="resta">resta</option>
			<option value="division">division</option>
			<option value="multiplicacion">multiplicacion</option>
		</select>
		<br>
		<button>Calcular</button>


	</form>
</body>
</html>