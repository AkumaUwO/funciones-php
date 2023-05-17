<?php 
	function estudiante($nombre, $apellido, $edad){
		echo "El estudiante $nombre, de apellido $apellido tiene la edad de $edad años <br>"; 
	}

	function login($usuario, $contraseña){

		if($usuario == "alejandro" and $contraseña == "password"){
			echo "Ha iniciado sesion correctamente <br>";
		} else {
			echo "Usuario o contraseña incorrecto <br>";
		}
	}

	function suma($a,$b){
		$suma = $a + $b;
		return $suma;
	}
 ?>
