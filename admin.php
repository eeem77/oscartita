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
            <li role="presentation"><a href="#">Inicio</a></li>
            <li role="presentation"><a href="servicios.html">Servicios</a></li>
            <li role="presentation" class="active"><a href="admin.php">Admin</a></li>
        </ul>
    </div>
    <div class="row row-inicio">
        <div class="text-center">
            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Ingresar</button>
        </div>
        <div class="modal fade bs-example-modal-sm contorno-modal-servicio" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button onclick="descambiartodo()" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Administrador</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="entrar.php" class="form-horizontal">
                            <div id="usuario" class="form-group">
                                <div class="col-sm-12">
                                    <input id="in-usuario" type="text" name="usuario" onfocus="descambiarusuario()" onblur="cambiarusuario()" class="form-control" placeholder="Usuario">
                                    <span id="form-span-usuario" class=""></span>
                                </div>
                            </div>
                            <div id="clave" class="form-group">
                                <div class="col-sm-12">
                                    <input id="in-clave" type="password" name="clave" onfocus="descambiarclave()" onblur="cambiarclave()" class="form-control" placeholder="Clave">
                                    <span id="form-span-clave" class="" ></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-12">
                                    <button id="btn-solicitar-servicio" type="submit" class="btn btn-primary">Ingresar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button onclick="descambiartodo()" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function cambiarusuario() {
        if ($('#in-usuario').val().trim() === '') {
            $('#usuario').attr('class', 'form-group has-error has-feedback');
            $('#form-span-usuario').attr('class', 'glyphicon glyphicon-remove form-control-feedback');
            $a = 0;
        }
        else {
            $('#usuario').attr('class', 'form-group has-success has-feedback');
            $('#form-span-usuario').attr('class', 'glyphicon glyphicon-ok form-control-feedback');
            $a = 1;
            if ($a == 1 && $b == 1){
                $('#btn-solicitar-servicio').show();
            }
        }
    }
    function descambiarusuario() {
        $('#usuario').attr('class', 'form-group');
        $('#form-span-usuario').attr('class', '');
        $('#in-usuario').val('');
        $('#btn-solicitar-servicio').hide();
    }
    function cambiarclave() {
        if ($('#in-clave').val().trim() === ''){
            $('#clave').attr('class', 'form-group has-error has-feedback');
            $('#form-span-clave').attr('class', 'glyphicon glyphicon-remove form-control-feedback');
            $b = 0;
        }
        else {
            $('#clave').attr('class', 'form-group has-success has-feedback');
            $('#form-span-clave').attr('class', 'glyphicon glyphicon-ok form-control-feedback');
            $b = 1;
            if ($a == 1 && $b == 1){
                $('#btn-solicitar-servicio').show();
            }
        }
    }
    function descambiarclave() {
        $('#clave').attr('class', 'form-group');
        $('#form-span-clave').attr('class', '');
        $('#in-clave').val('');
        $('#btn-solicitar-servicio').hide();
    }

    function descambiartodo() {
        $('#usuario').attr('class', 'form-group');
        $('#form-span-usuario').attr('class', '');
        $('#in-usuario').val('');
        $('#clave').attr('class', 'form-group');
        $('#form-span-clave').attr('class', '');
        $('#in-clave').val('');
        $('#btn-solicitar-servicio').hide();
    }
    $(document).ready(function () {
        var $a = 0;
        var $b = 0;

        $('#btn-solicitar-servicio').hide();
    });
</script>
</body>
</html>