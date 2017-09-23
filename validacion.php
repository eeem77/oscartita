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
        //echo "Conexion con la base de datos de forma correcta";
        //echo "<br>";

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
            //echo "se insertaron los datos en la tabla";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->connect_error;
        }

        $conn->close();

        /**
         * Created by PhpStorm
         * User: eeem77
         * Date: 23/5/2017
         * Time: 11:06 AM
         */
        ?>
        <div class="container-fluid">
            <div class="jumbotron con">
                <h1>Electro Auto Oscartita C.A.</h1>
                <p class="text-muted">J-40439176-2</p>
                <p><?php echo "Sr(a) " . $nombre ?>. Gracias por confiar en nosotros. Pronto nos comunicaremos con usted.</p>
                <p><a class="btn btn-primary btn-lg btn-index" href="inicio.html" role="button">Continuar</a></p>
            </div>
        </div>
        <?php
        $destinatario = "marlo.montilla@gmail.com";
        $asunto = "Electro Auto Oscartita C.A.";
        $cuerpo = ' 
            <html> 
                <head> 
                   <title>Electro Auto Oscartita C.A.</title> 
                </head> 
                <body> 
                    <h1>Nuestros clientes son primero!</h1> 
                    <p> 
                        <b>Bienvenidos al servicio de correos de Electro Auto Oscartita C.A.</b>. Ofrecemos el mejor servicio para su vehiculo. 
                    </p> 
                </body> 
            </html> 
        ';

        //para el envío en formato HTML
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: Electro Auto Oscartita C.A. <electroautoscartita@gmail.com>\r\n";

        //dirección de respuesta, si queremos que sea distinta que la del remitente
        //$headers .= "Reply-To: mariano@desarrolloweb.com\r\n";

        //ruta del mensaje desde origen a destino
        //$headers .= "Return-path: holahola@desarrolloweb.com\r\n";

        //direcciones que recibián copia
        //$headers .= "Cc: maria@desarrolloweb.com\r\n";

        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n";

        mail($destinatario,$asunto,$cuerpo,$headers)
        ?>
    </body>
</html>





