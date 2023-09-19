<?php

ini_set('default_charset', 'UTF-8');

require("../comm/conexionDB.php");


function revisaDato($campo,$dato,$tabla){
    $q="SELECT Count(x.id) existe from ". $tabla ." x
        WHERE x.". $campo ."= ?";
    
    $res= dbConexion($q,"s",$dato);
    $reg = $res[0];

    // return ($reg['existe'] == 1) ? true : false;
    return $reg['existe'];
}


$success = true;
$error = false;
$mssg = "Error";

if($_POST['indice'] == 0) {

    if(empty($_POST['email'])){
        $error = '#email';
        $mssg = "El campo correo está vacio";
        $success=false;
    }
    else {
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = '#email';
            $mssg = "nomail";
            $success=false; 
        }
    }

    if(empty($_POST['nombre'])){
        $error = '#nombre';
        $mssg = "El campo nombre está vacio";
        $success=false;
    }

    // example validation
    if(revisaDato("email",$_POST['email'],"usuarios")){
        $error = '#email';
        $mssg = "Este correo ya ha sido registrado.";
        $success=false;
    }

    if(revisaDato("nombre",$_POST['nombre'],"usuarios")){
        $error = '#nombre';
        $mssg = "Este nombre ya ha sido registrado.";
        $success=false;
    }
    
    if(empty($_POST['password'])) {
        $error = '#password';
        $mssg = "Se debe de ingresar un password";
        $success=false;
    }

    if(empty($_POST['country'])) {
        $error = '._country';
        $mssg = "Se debe seleccionar país";
        $success=false;
    }

    if(empty($_POST['daily_budget'])) {
        $error = '._daily_budget';
        $mssg = "Se debe seleccionar un monto de ingresos";
        $success=false;
    }

    if($_POST['checado'] == 0) {
        $error = '._checado';
        $mssg = "<span><span></span></span>Se debe suscribir al correo de noticias.";
        $success=false;
    }

}

if($_POST['indice'] == 1) {
    if(empty($_POST['tipo_cuarto'])){
        $error = '._cuarto';
        $mssg = "El tipo de cuarto no esta seleccionado";
        $success=false;
    }
}

if($_POST['indice'] == 2) {
    if(empty($_POST['room_description'])){
        $error = '#room_description';
        $mssg = "La descripción del cuarto no debe estar vacía";
        $success=false;
    } 
}

header('Content-Type: application/json');
echo json_encode(array('success' => $success, 'error'=> $error, 'mssg' => $mssg));
exit;

?>