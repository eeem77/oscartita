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
$name = $apellido = $celular = $email = $vehiculo = "";

$nombre = test_input($_POST["nombre"]);
$apellido = test_input($_POST["apellido"]);
$celular = test_input($_POST["celular"]);
$email = test_input($_POST["email"]);
$vehiculo = test_input($_POST["vehiculo"]);
$bandera = false;

function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (empty($nombre or $apellido or $celular or $email or $vehiculo)) {
    echo "
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-5 col-md-3 col-lg-6\">
                    <div class=\"modal-content\">
				        <div class=\"modal-header\">
					        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
					        <h4 class=\"modal-title\" id=\"myModalLabel\">Contrato de Servicio</h4>
				        </div>
                        <div class=\"modal-body\">
							
				        </div>
				        <div class=\"modal-footer\">
				            <button onclick=\"location.href='servicios.html'\" type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
				        </div>
			        </div>
			    </div>
            </div>
        </div>
    ";
} else{
    echo $nombre;
    echo "<br>";
    echo $apellido;
    echo "<br>";
    echo $celular;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $vehiculo;
}
/**
 * Created by PhpStorm
 * User: eeem77
 * Date: 23/5/2017
 * Time: 11:06 AM
 */
?>
</body>
</html>





