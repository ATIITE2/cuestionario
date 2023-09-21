<?php

ini_set('default_charset', 'UTF-8');

require("../comm/conexionDB.php");

$success=false;
$msj="No se guardaron datos";

$respuestas = array();
if($_POST['indice'] == -1){

    $respuestas['nombre'] =      $_POST['nombre'];
    $respuestas['email'] =       $_POST['email'];
    $respuestas['password'] =    $_POST['password'];
    $respuestas['country'] =     $_POST['country'];
    $respuestas['daily_budget']= $_POST['daily_budget'];
    $respuestas['checado'] =     $_POST['checado'];
    $respuestas['tipo_cuarto'] = $_POST['tipo_cuarto'];
    $respuestas['tipo_cuarto2'] = $_POST['tipo_cuarto2'];
    $respuestas['room_description'] = $_POST['room_description'];


    $q1="INSERT INTO usuarios(nombre, email, password)
        VALUES(?, ?, ?)";
        
    $r=dbConexionGuardar($q1,"sss",$respuestas,1);
    
    if(!is_numeric($r)) $msj=$r;
    else {
        $respuestas['usuario_id']=$r;

        $q2="INSERT INTO respuestas(usuario_id, country, daily_budget, agree_term, room_type, room_type2, room_description)
        VALUES(?, ?, ?, ?, ?, ?, ?)";
        
        $r2=dbConexionGuardar($q2,"issssss",$respuestas,2);

        if(!is_numeric($r2)) $msj=$r2;
        else {
            $msj="Se agregó nuevo registro.";
            $success=true;
        }
    }
}

header('Content-Type: application/json');
echo json_encode(array('success' => $success, 'msj' => $msj));
?>