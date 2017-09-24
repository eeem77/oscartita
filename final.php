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

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$cambio = test_input($_POST["id"]);

$sql = "UPDATE clientes_problemas SET estado='1' WHERE id='$cambio'";

$conn->query($sql);

$conn->close();

header('location: bandeja.php');
?>