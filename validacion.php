<!DOCTYPE html>
<html>
<head>
    <title>Electroauto Oscartita</title>
    <link rel="Shortcut Icon" type="image/x-icon" href="img/iconos/mecanica.ico"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.expander.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <meta charset="utf-8">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oscartita";

// Creacion de la conexion con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Chequeo de la conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mensaje de conexion
echo "Conexion con la base de datos de forma correcta";
echo "<br>";

$name = $apellido = $celular = $email = $vehiculo = "";

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nombre = test_input($_POST["nombre"]);
$apellido = test_input($_POST["apellido"]);
$celular = test_input($_POST["celular"]);
$email = test_input($_POST["email"]);
$vehiculo = test_input($_POST["vehiculo"]);
$obs = test_input($_POST["obs"]);
$fecha = date("d") ."/". date("m") ."/". date("Y");
$s_a = "";
$s_e = "";
$s_i = "";
$s_m = "";

if (isset($_POST['alternador']) !="") {
    $s_a = " Alternador";
}
if (isset($_POST['escaner']) !="") {
    $s_e = " Escaner";
}
if (isset($_POST['inyector']) !="") {
    $s_i = " Inyectores";
}
if (isset($_POST['mecanica']) !="") {
    $s_m = " Mecanica";
}

$servicio = $s_a . $s_e . $s_i . $s_m;

$sql = "INSERT INTO clientes_problemas (nombres, apellidos, contactos, correos, marca_modelo, observaciones, servicios, fecha) VALUES ('".$nombre."','".$apellido."','".$celular."','".$email."','".$vehiculo."','".$obs."','".$servicio."','".$fecha."')";

if ($conn->query($sql) === TRUE) {
    echo "se insertaron los datos en la tabla";
} else {
    echo "Error: " . $sql . "<br>" . $conn->connect_error;
}

$conn->close();

    echo $nombre;
    echo "<br>";
    echo $apellido;
    echo "<br>";
    echo $celular;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $vehiculo;
    echo "<br>";
    echo $obs;
    echo "<br>";
    echo $servicio;
    echo "<br>";
    echo $fecha;

/**
 * Created by PhpStorm
 * User: eeem77
 * Date: 23/5/2017
 * Time: 11:06 AM
 */
?>
</body>
</html>





