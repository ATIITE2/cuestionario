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


    if(empty($_POST['nombres'])){
        $error = '#nombres';
        $mssg = "El nombre no debe estar vacío";
        $success=false;
    }

    if(empty($_POST['ap_paterno'])){
        $error = '#ap_paterno';
        $mssg = "El apellido paterno no debe estar vacío";
        $success=false;
    }

    if(empty($_POST['ap_materno'])){
        $error = '#ap_materno';
        $mssg = "El apellido materno no debe estar vacío";
        $success=false;
    }

    if($_POST['genero'] == -1){
        $error = '._genero';
        $mssg = "Debe especificar el género";
        $success=false;
    }

    if(($_POST['genero'] == 3) && empty($_POST['otro_genero'])){
        $error = '#otro_genero';
        $mssg = "¿Con cuál género se identifica?";
        $success=false;
    }

    if(empty($_POST['municipio'])){
        $error = '#municipio';
        $mssg = "Debe especificar el municipio";
        $success=false;
    }

    if(empty($_POST['telefono'])) {
        $error = '#telefono';
        $mssg = "Se debe de ingresar número de teléfono";
        $success=false;
    }
    else {
        if(strlen($_POST['telefono']) != 10) {
            $error = '#telefono';
            $mssg = "El número de teléfono debe ser de 10 dígitos";
            $success=false;
        }

        if(is_numeric($_POST['telefono']) == false) {
            $error = '#telefono';
            $mssg = "El teléfono debe ser numérico";
            $success=false;
        }
    }
 
    // Busca en base de datos si el telefono ya existe
    if(revisaDato("telefono",$_POST['telefono'],"usuarios")){
        $error = '#telefono';
        $mssg = "Este telefono ya ha sido registrado.";
        $success=false;
    }

    if(empty($_POST['email'])){
        $error = '#email';
        $mssg = "El campo correo está vacio";
        $success=false;
    }
    else {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
            $error = '#email';
            $mssg = "No es un correo válido";
            $success=false; 
        }
    }

    // Busca en base de datos si el correo ya existe
    if(revisaDato("email",$_POST['email'],"usuarios")){
        $error = '#email';
        $mssg = "Este correo ya ha sido registrado.";
        $success=false;
    }
}

if($_POST['indice'] == 1) {
    if($_POST['discap_permanente'] == -1){
        $error = '._discap_permanente';
        $mssg = "Por favor seleccione una respuesta";
        $success=false;
    }
    else {
        if($_POST['discap_permanente'] == 1) {

            if(($_POST['disc_fisica']==0) && ($_POST['disc_mental']==0) && ($_POST['disc_intelectual']==0) && ($_POST['disc_sensorial']==0)) {
                $error = '._disc_fisica';
                $mssg = "<span><span></span></span>Discapacidad física (seleccione al menos una opción)";
                $success=false;
            }
        }
        else {
            if($_POST['vinculo_persona_disc'] == -1) {
                $error = '._vinculo_persona_disc';
                $mssg = "Por favor seleccione una respuesta";
                $success=false;
            }
            
            if(($_POST['vinculo_persona_disc'] == 2) && (empty($_POST['nombre_asoc_agrup']))) {
                $error = '#nombre_asoc_agrup';
                $mssg = "El nombre de la asociación está vacío";
                $success=false; 
            }
        }
    }
}

if($_POST['indice'] == 2) { 
    if(empty($_POST['barreras_retos'])){
        $error = '#barreras_retos';
        $mssg = "La descripción de las barreras o retos no debe estar vacía";
        $success=false;
    }

    if(strlen($_POST['barreras_retos']) > 300){
        $error = '#barreras_retos';
        $mssg = "La descripción de las barreras o retos no debe exceder los 300 caracteres";
        $success=false;
    }
}

if($_POST['indice'] == 3) {
    if(($_POST['incl_personas']==0) && ($_POST['foros_event']==0) && ($_POST['capacitar_pcd']==0) && ($_POST['sensib_disc']==0) && ($_POST['otra_propuesta']==0)) {
        $error = '._prop_acciones';
        $mssg = "Por favor seleccione al menos una opción";
        $success=false;
    }

    if(($_POST['otra_propuesta'] == 1) && (empty($_POST['otra_prop_txt']))) {
        $error = '#campo_otra_propuesta';
        $mssg = "La nueva propuesta no debe estár vacía";
        $success=false; 
    }
}

if($_POST['indice'] == 4) {
    if($_POST['integrar_consejos'] == -1){
        $error = '._integrar_consejos';
        $mssg = "Por favor seleccione una respuesta";
        $success=false;
    }
    
    if(empty($_POST['porque_sn_integrar'])){
        $error = '#porque_sn_integrar';
        $mssg = "El campo de explicación no debe estar vacío";
        $success=false;
    }

    if(strlen($_POST['porque_sn_integrar']) > 300){
        $error = '#porque_sn_integrar';
        $mssg = "El campo de explicación no debe exceder los 300 caracteres";
        $success=false;
    }
}

if($_POST['indice'] == 5) {
    if($_POST['acred_disc'] == -1){ 
        $error = '._acred_disc';
        $mssg = "Por favor seleccione una respuesta";
        $success=false;
    }
    
    if(empty($_POST['porque_sn_acreditar'])){
        $error = '#porque_sn_acreditar';
        $mssg = "El campo de explicación no debe estar vacío";
        $success=false;
    }

    if(strlen($_POST['porque_sn_acreditar']) > 300){
        $error = '#porque_sn_acreditar';
        $mssg = "El campo de explicación no debe exceder los 300 caracteres";
        $success=false;
    }

}

if($_POST['indice'] == 6) {
    if($_POST['mostrar_preg1'] == 1){

        if(($_POST['cred_sedif']==0) && ($_POST['cred_sesa']==0) && ($_POST['dict_medico']==0 && ($_POST['const_medica']==0) && ($_POST['otro_doc_prop']==0))){
            $error = '._cred_sedif';
            $mssg = "<span><span></span></span>Credencial para personas con discapacidad permanente emitido por el Departamento de Discapacidad del Sistema para el Desarrollo Integral de la Familia en Tlaxcala (SEDIF). (seleccione al menos una opción)";
            $success=false;
        }

        if(($_POST['otro_doc_prop']==1) && (empty($_POST['otro_doc_txt']))) {
            $error = '#campo_otro_doc';
            $mssg = "La propuesta del documento no debe estár vacía";
            $success=false; 
        }   
    }
}

if($_POST['indice'] == 7) {
    if($_POST['acred_disc_perm'] == -1){ 
        $error = '._acred_disc_perm';
        $mssg = "Por favor seleccione una respuesta";
        $success=false;
    }
    
    if(empty($_POST['porque_sn_acreditar_perm'])){
        $error = '#porque_sn_acreditar_perm';
        $mssg = "El campo de explicación no debe estar vacío";
        $success=false;
    }

    if(strlen($_POST['porque_sn_acreditar_perm']) > 300){
        $error = '#porque_sn_acreditar_perm';
        $mssg = "El campo de explicación no debe exceder los 300 caracteres";
        $success=false;
    }
}

if($_POST['indice'] == 8) {
    if($_POST['mostrar_preg2'] == 1){

        if(($_POST['cred_sedif2']==0) && ($_POST['cred_sesa2']==0) && ($_POST['dict_medico2']==0 && ($_POST['const_medica2']==0) && ($_POST['otro_doc_prop2']==0))){
            $error = '._cred_sedif2';
            $mssg = "<span><span></span></span>Credencial para personas con discapacidad permanente emitido por el Departamento de Discapacidad del Sistema para el Desarrollo Integral de la Familia en Tlaxcala (SEDIF). (seleccione al menos una opción)";
            $success=false;
        }

        if(($_POST['otro_doc_prop2']==1) && (empty($_POST['otro_doc_txt2']))) {
            $error = '#campo_otro_doc2';
            $mssg = "La propuesta del documento no debe estár vacía";
            $success=false; 
        }   
    }
}

if($_POST['indice'] == 9) {
    if(empty($_POST['comentarios_add'])){
        $error = '#comentarios_add';
        $mssg = "El campo de comentarios no debe estar vacío";
        $success=false;
    }
}


header('Content-Type: application/json');
echo json_encode(array('success' => $success, 'error'=> $error, 'mssg' => $mssg));
exit;

?>