<?php

$success = true;
$error = false;
$mssg = "Error";

if($_POST['indice'] == 0) {
    
    //example result for database
    $used_email = "foo@email.com";
    $nombre_usado = "Panchito";

    if(empty($_POST['email'])){
        $error = 'email';
        $mssg = "El campo correo está vacio";
        $success=false;
    }
    else {
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = 'email';
            $mssg = "nomail";
            $success=false; 
        }
    }

    if(empty($_POST['nombre'])){
        $error = 'nombre';
        $mssg = "El campo nombre está vacio";
        $success=false;
    }

    // example validation
    if($_POST['email'] == $used_email){
        $error = 'email';
        $mssg = "Este correo ya ha sido registrado.";
        $success=false;
    }

    if($_POST['nombre'] == $nombre_usado){
        $error = 'nombre';
        $mssg = "Este nombre ya ha sido registrado.";
        $success=false;
    }
    
    if(empty($_POST['password'])) {
        $error = 'password';
        $mssg = "Se debe de ingresar un password";
        $success=false;
    }

    /* if(empty($_POST['country'])) {
        $error = 'country';
        $mssg = "Se debe seleccionar país";
        $success=false;
    }

    if(empty($_POST['daily_budget'])) {
        $error = 'daily_budget';
        $mssg = "Se debe seleccionar un monto de ingresos";
        $success=false;
    } */

}

if($_POST['indice'] == 1) {
    if(empty($_POST['tipo_cuarto'])){
        $error = 'tipo_cuarto';
        $mssg = "El tipo de cuarto no esta seleccionado";
        $success=false;
    }
}

if($_POST['indice'] == 2) {
    if(empty($_POST['room_description'])){
        $error = 'room_description';
        $mssg = "La descripción del cuarto no debe estar vacía";
        $success=false;
    } 
}

header('Content-Type: application/json');
echo json_encode(array('success' => $success, 'error'=> $error, 'mssg' => $mssg));
exit;


?>