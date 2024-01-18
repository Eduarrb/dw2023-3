<?php
    function limpiar_string($str){
        global $conexion;
        return mysqli_real_escape_string($conexion, $str);
    }

    function display_msj($msj, $tipo){
        $msj = <<<DELIMITADOR
            <div class="alert alert-{$tipo} alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> {$msj}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
DELIMITADOR;
        return $msj;
    }

    function display_landMensaje($msj, $tipo){
        $msj = <<<DELIMITADOR
            <div class="{$tipo} mt-1">
                $msj
            </div>
DELIMITADOR;
        return $msj;
    }

    function query($consulta){
        global $conexion;
        return mysqli_query($conexion, $consulta);
    }

    function fetch_assoc($query){
        return mysqli_fetch_assoc($query);
    }

    function email_existe($email){
        $query = query("SELECT * FROM usuarios WHERE user_email = '{$email}'");
        if(mysqli_num_rows($query) >= 1){
            return true;
        }
        return false;
    }

    function contar_filas($query){
        return mysqli_num_rows($query);
    }

    function redirect($location){
        header("Location: {$location}");
    }

    function set_mensaje($msj){
        if(!empty($msj)){
            $_SESSION['mensaje'] = $msj;
        } else {
            $msj = '';
        }
    }

    function mostrar_msj(){
        if(isset($_SESSION['mensaje'])){
            echo $_SESSION['mensaje'];
            unset($_SESSION['mensaje']);
        }
    }
?>