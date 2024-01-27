<?php
    function post_pedido(){
        if(!isset($_GET['collection_id']) || !isset($_GET['collection_status']) || !isset($_GET['preference_id'])){
            set_mensaje(display_landMensaje("Datos invalidos", "danger"));
            redirect("cart.php");
        } else {
            $ped_pref_id = limpiar_string(trim($_GET['preference_id']));
            $ped_pay_id = limpiar_string(trim($_GET['collection_id']));
            $ped_user_id = $_SESSION['user_id'];
            $ped_status = limpiar_string(trim($_GET['collection_status']));

            query("INSERT INTO pedidos (ped_pref_id, ped_pay_id, ped_user_id, ped_status, ped_fecha) VALUES ('{$ped_pref_id}', {$ped_pay_id}, {$ped_user_id}, '{$ped_status}', NOW())");
            set_mensaje(display_landMensaje("Pedido satisfactorio", "success"));
            redirect("cart.php");
        }
    }

?>