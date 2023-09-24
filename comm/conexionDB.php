<?php 

$casa=true;
$cred = array();

$cred["dbhost"]="localhost";
$cred["dbusr"]= ($casa) ? "franktlx" : "lefranktlx";
$cred["dbpass"]= ($casa) ? "H0l4H0l4" : "HolaHola";
$cred["dbname"]="cuestionario_db";


function dbConexion($q,$tipo,$valor) {
  // Credenciales Base de datos
  global $cred;
  $conn = new mysqli($cred["dbhost"], $cred["dbusr"], $cred["dbpass"], $cred["dbname"]);
  if ($conn->connect_error) {
    die("Fallo la conexión con la BD: " . $conn->connect_error);
  }
  
  // prepare and bind
  $stmt=$conn->prepare($q);
  $stmt->bind_param($tipo, $valor);
  $stmt->execute();

  $result = $stmt->get_result();
  
  $data = array();
  if ($result->num_rows > 0) {
    foreach ($result as $row) {
      $data[] = $row;
    }
  }
  
  $stmt->close();
  $conn->close();
  
  return $data;
}

function dbConexionGuardar($q,$tipos,$valores,$cual){
  // Credenciales Base de datos
  global $cred;
  $resp= "";
  $conn = new mysqli($cred["dbhost"], $cred["dbusr"], $cred["dbpass"], $cred["dbname"]);
  if ($conn->connect_error) {
    die("Fallo la conexión con la BD: " . $conn->connect_error);
  }

  // prepare and bind
  $stmt=$conn->prepare($q);

  if($cual == 1){
    $stmt->bind_param($tipos, $valores['nombres'], $valores['ap_paterno'], $valores['ap_materno'], $valores['genero'], $valores['otro_genero'], $valores['municipio'], $valores['telefono'], $valores['email']);
  }

  if($cual == 2){
    $stmt->bind_param($tipos, $valores['usuario_id'], $valores['discap_permanente'], $valores['disc_fisica'], $valores['disc_mental'], $valores['disc_intelectual'], $valores['disc_sensorial'], $valores['vinculo_persona_disc'], $valores['nombre_asoc_agrup'], $valores['barreras_retos'], $valores['incl_personas'], $valores['foros_event'], $valores['capacitar_pcd'], $valores['sensib_disc'], $valores['otra_propuesta'], $valores['otra_prop_txt'], $valores['integrar_consejos'], $valores['porque_sn_integrar'], $valores['acred_disc'], $valores['porque_sn_acreditar'], $valores['cred_sedif'], $valores['cred_sesa'], $valores['dict_medico'], $valores['const_medica'], $valores['otro_doc_prop'], $valores['otro_doc_txt'], $valores['acred_disc_perm'], $valores['porque_sn_acreditar_perm'], $valores['cred_sedif2'], $valores['cred_sesa2'], $valores['dict_medico2'], $valores['const_medica2'], $valores['otro_doc_prop2'], $valores['otro_doc_txt2'], $valores['comentarios_add']);
  }

  if($stmt->execute()) $resp=isset($stmt->insert_id) ? intval($stmt->insert_id) : 0;
  else $resp="Error de registro: " . $q . "<br>" . $stmt->error;

  $stmt->close();
  $conn->close();
  
  return $resp;
}

?>