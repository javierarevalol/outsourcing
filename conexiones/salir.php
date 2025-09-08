<?php
    session_start();
    unset($_SESSION["s_numero_identificacion"]);
    unset($_SESSION["s_programa"]);
    unset($_SESSION["s_jornada"]);
    unset($_SESSION["s_codigo_programa"]);
    unset($_SESSION["s_tipo_usuario"]);
    unset($_SESSION["s_usuario"]);
    unset($_SESSION["s_nombres"]);
    unset($_SESSION["s_apellidos"]);
    unset($_SESSION["s_directorio_programa"]);
    session_destroy();
    header("location: ../../inicio.php");
?>