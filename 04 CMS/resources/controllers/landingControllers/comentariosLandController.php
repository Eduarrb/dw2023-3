<?php 
    function post_guardarComentario($prod_id){
        if(isset($_POST['comEnviar'])){
            if(!isset($_SESSION['user_rol'])){
                set_mensaje(display_landMensaje("Debes iniciar sesión para poder realizar un comentario", "danger"));
                redirect("producto.php?id={$prod_id}");
            } else {
                $com_mensaje = limpiar_string(trim($_POST['com_mensaje']));
                $com_puntaje = limpiar_string(trim($_POST['com_puntaje']));
                query("INSERT INTO comentarios (com_user_id, com_prod_id, com_mensaje, com_puntaje, com_fecha) VALUES ({$_SESSION['user_id']}, {$prod_id}, '{$com_mensaje}', {$com_puntaje}, NOW())");
                set_mensaje(display_landMensaje("Comentario realizado, espere a que el administrador lo valide", "success"));
                redirect("producto.php?id={$prod_id}");
            }
        }
    }

?>