<?php
    // echo DIRECTORY_SEPARATOR;
    // echo "/";
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    // ⚡⚡ RUTAS RELATIVAS ⚡⚡
    // echo __DIR__;
    defined("VIEW_FRONT") ? null : define("VIEW_FRONT", __DIR__ . DS . "views" . DS . "front");
    // echo VIEW_FRONT;
    defined("VIEW_BACK") ? null : define("VIEW_BACK", __DIR__ . DS . "views" . DS . "back");
    // echo VIEW_BACK;

    // ⚡⚡ DB CONECTION ⚡⚡ 
    defined("DB_HOST") ? null : define("DB_HOST", "localhost");
    defined("DB_USER") ? null : define("DB_USER", "root");
    defined("DB_PASS") ? null : define("DB_PASS", "");
    defined("DB_NAME") ? null : define("DB_NAME", "jobaria");

    $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // if($conexion){
    //     echo "estamos conectados";
    // }

    require_once("caller.php");
?>