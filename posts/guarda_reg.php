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

    $respuestas['cred_sedif'] = $_POST['cred_sedif'];
    $respuestas['cred_sesa'] = $_POST['cred_sesa'];
    $respuestas['dict_medico'] = $_POST['dict_medico'];
    $respuestas['const_medica'] = $_POST['const_medica'];
    $respuestas['otro_doc_prop'] = $_POST['otro_doc_prop'];
    $respuestas['otro_doc_txt'] = $_POST['otro_doc_txt'];

    $respuestas['acred_disc_perm'] = $_POST['acred_disc_perm'];
    $respuestas['porque_sn_acreditar_perm'] = $_POST['porque_sn_acreditar_perm'];

    $respuestas['cred_sedif2'] = $_POST['cred_sedif2'];
    $respuestas['cred_sesa2'] = $_POST['cred_sesa2'];
    $respuestas['dict_medico2'] = $_POST['dict_medico2'];
    $respuestas['const_medica2'] = $_POST['const_medica2'];
    $respuestas['otro_doc_prop2'] = $_POST['otro_doc_prop2'];
    $respuestas['otro_doc_txt2'] = $_POST['otro_doc_txt2'];

    $respuestas['comentarios_add'] = $_POST['comentarios_add'];


    $q1="INSERT INTO usuarios(nombres, ap_paterno, ap_materno, genero, otro_genero, municipio, telefono, email)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        
    $r=dbConexionGuardar($q1,"sssissss",$respuestas,1);
    
    if(!is_numeric($r)) $msj=$r;
    else {
        $respuestas['usuario_id']=$r;

        $q2="INSERT INTO respuestas(usuario_id, discap_permanente, disc_fisica, disc_mental, disc_intelectual, disc_sensorial, vinculo_persona_disc, nombre_asoc_agrup, barreras_retos, incl_personas, foros_event, capacitar_pcd, sensib_disc, otra_propuesta, otra_prop_txt, integrar_consejos, porque_sn_integrar, acred_disc, porque_sn_acreditar, cred_sedif, cred_sesa, dict_medico, const_medica, otro_doc_prop, otro_doc_txt, acred_disc_perm, porque_sn_acreditar_perm, cred_sedif2, cred_sesa2, dict_medico2, const_medica2, otro_doc_prop2, otro_doc_txt2, comentarios_add)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $r2=dbConexionGuardar($q2,"iiiiiiissiiiiisisisiiiiisisiiiiiss",$respuestas,2);

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