<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>Ejemplo de Conexion a BBDD MySQL</h2>


<?
echo "<form method='post'>";
echo	"<label for='usuario'>Usuario</label>";
echo	"<input type='text' name='usuario'><br>";
echo	"<label for='contraseña'>Contraseña</label>";
echo	"<input type='password' name='password'><br>";
echo	"<input type='submit' value='Submit Query'>";
echo "</form>";



$usuario = $_POST['usuario'];
$contraseña = $_POST['password'];



	$conexion =mysqli_connect('localhost','jose','jose123');
	mysqli_select_db($conexion, 'users');

	$consulta = "select * from Usuarios Where usuario='".$usuario."' AND password = SHA2('jose123',512)";

	$resultat = mysqli_query($conexion, $consulta);

	
	if ($row = mysqli_fetch_array($resultat)){
		echo "hola";
	}

?>

</body>
</html>