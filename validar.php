<?php
if (!empty($_POST['nombre']) && !empty($_POST['contra'])) { //envion infor
	$gnomb = $_POST['nombre']; 
	$gcont = $_POST['contra'];
	// validar contenido
	if ($gnomb == "OSCAR" && $gcont == "123") {
		echo "ACCESO PERMITIDO";
	}else{
		echo "Usuario o Contraseña Incorrectos" ;
	}

}else{ // envio informnacion Vacia
	echo 'Las Casillas Estan Vacias' ;
}