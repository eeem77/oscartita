<?php  
	function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$usuario = test_input($_POST["usuario"]);
	$clave = test_input($_POST["clave"]);
	$mensaje = "Los datos suministrados son incorrectos";

	if ($usuario == null && $clave == null) {
		echo '<script language = "javascript">alert("Ambos campos son obligatorios"); window.location.href="admin.php";</script>';
	}

	if ($usuario == null && $clave != "123") {
		echo '<script language = "javascript">alert("El campo usuario es obligatorio"); window.location.href="admin.php";</script>';
	}

	if ($usuario != "admin" && $clave == null) {
		echo '<script language = "javascript">alert("El campo clave es obligatorio"); window.location.href="admin.php";</script>';
	}

	if ($usuario == "admin" && $clave != "123") {
		echo '<script language = "javascript">alert("La clave es incorrecta"); window.location.href="admin.php";</script>';
	}

	if ($usuario != "admin" && $clave == "123") {
		echo '<script language = "javascript">alert("El usuario es incorrecto"); window.location.href="admin.php";</script>';
	}

	if ($usuario == "admin" && $clave == "123"){
		header('location: bandeja.php');
	} else{
		echo '<script language = "javascript">alert("'.$mensaje.'"); window.location.href="admin.php;"</script>';
	}
?>