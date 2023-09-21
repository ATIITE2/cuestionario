<?php 

$casa=false;
$cred = array();

$cred["dbhost"]="localhost";
$cred["dbusr"]= ($casa) ? "franktlx" : "lefranktlx";
$cred["dbpass"]= ($casa) ? "H0l4H0l4" : "HolaHola";
$cred["dbname"]="cuestionario_test";


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
    $stmt->bind_param($tipos, $valores['nombre'], $valores['email'], $valores['password']);
  }

  if($cual == 2){
    $stmt->bind_param($tipos, $valores['usuario_id'], $valores['country'], $valores['daily_budget'], $valores['checado'], $valores['tipo_cuarto'], $valores['tipo_cuarto2'], $valores['room_description']);
  }

  if($stmt->execute()) $resp=isset($stmt->insert_id) ? intval($stmt->insert_id) : 0;
  else $resp="Error de registro: " . $q . "<br>" . $stmt->error;

  $stmt->close();
  $conn->close();
  
  return $resp;
}

?>