<?php
    require_once('../../resources/config.php');

    try {
        $prod_id = limpiar_string(trim($_GET['prod_id']));
        $query = query("SELECT CONCAT(b.user_nombres, ' ', b.user_apellidos) AS usuario, b.user_img, a.com_mensaje, a.com_puntaje, a.com_fecha FROM comentarios a INNER JOIN usuarios b ON a.com_user_id = b.user_id WHERE a.com_status = 1 AND a.com_prod_id = {$prod_id}");
        $res = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $jsonRes = json_encode($res);
        echo $jsonRes;
    } catch (Exception $error) {
        error_log($e->getMessage());
        echo json_encode($e->getMessage());
    }
?>