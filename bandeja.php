<!DOCTYPE html>
<!--suppress ALL -->
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
        <div class="container-fluid">
            <div class="row center-block">
                <table id="img-tabla" class="table-responsive">
                    <tr>
                        <td><img class="img-responsive" src="img/img-marcas-carros/CHERY.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/CHEVROLET.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/CHRYSLER.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/DODGE.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/FIAT.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/FORD.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/HONDA.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/HYUNDAI.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/JEEP.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/MAZDA.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/MITSUBISHI.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/PEUGEOT.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/TOYOTA.png" alt=""></td>
                        <td><img class="img-responsive" src="img/img-marcas-carros/VOLSKWAGEN.png" alt=""></td>
                    </tr>
                </table>
            </div>
            <div class="row">
                <ul class="nav nav-tabs">
                    <li role="presentation"><a href="inicio.html">Inicio</a></li>
                    <li role="presentation"><a href="servicios.html">Servicios</a></li>
                    <li role="presentation" class="active"><a href="#">Admin</a></li>
                </ul>
            </div>
            <div class="row row-servicios">

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "oscartita";

                // Creamos la conexion con la base de datos
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Chequeo de la conexion
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT id, nombres, apellidos, contactos, correos, marca_modelo, observaciones, servicios, fecha FROM clientes_problemas";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <div class=\"col-xs-12 col-ms-12 col-md-12 col-lg-12\">
                            <div class=\"panel panel-default panel-primary\">
                                <div class=\"panel-heading\">Solicitud de servicio</div>
                                    <!-- Default panel contents -->
                                <div class=\"panel-body\">
                                    <p class=\"text-center\">
                                        <b>Servicio</b><br>" . $row["id"] . "<br>
                                        <b>Nombre</b><br>" . $row["nombres"] . "<br>
                                        <b>Apellido</b><br>" . $row["apellidos"] . "<br>
                                        <b>Numero de contacto</b><br>" . $row["contactos"] . "<br>
                                        <b>Correo</b><br>" . $row["correos"] . "<br>
                                        <b>Caracteristicas del vehiculo</b><br>" . $row["marca_modelo"] . "<br>
                                        <b>Observaciones</b><br>" . $row["observaciones"] . "<br>
                                        <b>Servicios solicitados</b><br>" . $row["servicios"] . "<br>
                                        <b>Fecha</b><br>" . $row["fecha"] . "<br>
                                    </p>
                                </div>
                            </div>
                        </div>";
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>
