<?php

ini_set('default_charset', 'UTF-8');

require("../comm/conexionDB.php");

$success=false;
$msj="No se guardaron datos";

$respuestas = array();
if($_POST['indice'] == -1){

    $respuestas['nombres'] =      $_POST['nombres'];
    $respuestas['ap_paterno'] =      $_POST['ap_paterno'];
    $respuestas['ap_materno'] =      $_POST['ap_materno'];
    $respuestas['genero'] =      $_POST['genero'];
    $respuestas['otro_genero'] =      $_POST['otro_genero'];
    $respuestas['municipio'] =      $_POST['municipio'];
    $respuestas['telefono'] =      $_POST['telefono'];
    $respuestas['email'] =       $_POST['email'];


    $respuestas['discap_permanente'] = $_POST['discap_permanente']; 
    $respuestas['disc_fisica'] = $_POST['disc_fisica'];
    $respuestas['disc_mental'] = $_POST['disc_mental'];
    $respuestas['disc_intelectual'] = $_POST['disc_intelectual'];
    $respuestas['disc_sensorial'] = $_POST['disc_sensorial'];     
    $respuestas['vinculo_persona_disc'] = $_POST['vinculo_persona_disc'];
    $respuestas['nombre_asoc_agrup'] = $_POST['nombre_asoc_agrup'];

    $respuestas['barreras_retos'] = $_POST['barreras_retos'];

    $respuestas['incl_personas'] = $_POST['incl_personas'];
    $respuestas['foros_event'] = $_POST['foros_event'];
    $respuestas['capacitar_pcd'] = $_POST['capacitar_pcd'];
    $respuestas['sensib_disc'] = $_POST['sensib_disc'];
    $respuestas['otra_propuesta'] = $_POST['otra_propuesta'];
    $respuestas['otra_prop_txt'] = $_POST['otra_prop_txt'];

    $respuestas['integrar_consejos'] = $_POST['integrar_consejos'];
    $respuestas['porque_sn_integrar'] = $_POST['porque_sn_integrar'];

    $respuestas['acred_disc'] = $_POST['acred_disc'];
    $respuestas['porque_sn_acreditar'] = $_POST['porque_sn_acreditar'];







    
    /*$respuestas['tipo_cuarto'] = $_POST['tipo_cuarto'];
    $respuestas['tipo_cuarto2'] = $_POST['tipo_cuarto2'];
    $respuestas['room_description'] = $_POST['room_description']; */


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