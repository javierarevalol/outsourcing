<?php 
  session_start();
  include_once './conexion.php';

  $objeto = new Conexion();
  $conexion = $objeto->Conectar();

  $user = (isset($_POST['user'])) ? $_POST['user'] : '';
  $password = (isset($_POST['password'])) ? $_POST['password'] : '';
  //$user = 'admin1';
  //$password = 'pass';
  
  $pass = md5($password);
  
  $query = "SELECT
                `id`,
                `nombres`,
                `cargo`,
                `jefe`,
                `usuario`
            FROM `usuarios`
            WHERE 
                `usuario` = '$user' 
                AND `contrasena` = '$pass'";
  //$query = "SELECT * FROM usuarios WHERE usuario = ':user' AND contrasena = ':pass'";
  //$query = "SELECT * FROM usuarios WHERE usuario = ':user' AND contrasena = ':password'";
  $results = $conexion->prepare($query);
  $results->execute();
  
  if($results->rowCount() >= 1){
    $data = $results->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_id"] = $data[0]["id"];
    $_SESSION["s_nombres"] = $data[0]["nombres"];
    $_SESSION["s_cargo"] = $data[0]["cargo"];
    $_SESSION["s_jefe"] = $data[0]["jefe"];
    $_SESSION["s_usuario"] = $data[0]["usuario"];
  } else {
    $data = null;
    $_SESSION["s_id"] = null;
    $_SESSION["s_nombres"] = null;
    $_SESSION["s_cargo"] = null;
    $_SESSION["s_jefe"] = null;
    $_SESSION["s_usuario"] = null;
  }

  print json_encode($data);
  $conexion = null;
?>
