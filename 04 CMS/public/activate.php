<?php
    require_once('../resources/config.php');

    if(!isset($_GET['email']) || !isset($_GET['token'])){
        set_mensaje(display_msj("Datos de validación incorrectos o faltantes", "danger"));
        redirect("register.php");
    } else {
        // echo "todo ok";
        activar_usuario();
    }
?>