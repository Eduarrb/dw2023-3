<?php
    function validar_user_reg(){
        $min = 3;
        $max = 10;
        $errores = [];

        if(isset($_POST['registrar'])){
            $user_nombres = limpiar_string(trim($_POST['user_nombres']));
            $user_apellidos = limpiar_string(trim($_POST['user_apellidos']));
            $user_email = limpiar_string(trim($_POST['user_email']));
            $user_pass = limpiar_string(trim($_POST['user_pass']));
            $user_passConfirm = limpiar_string(trim($_POST['user_passConfirm']));

            if(strlen($user_nombres) < $min){
                $errores[] = "Tus nombres no deben ser menos de {$min} caracteres";
            }
            if(strlen($user_nombres) > $max){
                $errores[] = "Tus nombres no deben tener mas de {$max} caracteres";
            }
            if(strlen($user_apellidos) < $min){
                $errores[] = "Tus apellidos no deben ser menos de {$min} caracteres";
            }
            if(strlen($user_apellidos) > $max){
                $errores[] = "Tus apellidos no deben tener mas de {$max} caracteres";
            }
            if(email_existe($user_email)){
                $errores[] = "El correo ingresado ya existe, intente con otro correo";
            }
            if($user_pass != $user_passConfirm){
                $errores[] = "Las contraseñas deben ser iguales";
            }
            // print_r($errores);
            if(!empty($errores)){
                foreach($errores as $error){
                    echo display_msj($error, "danger");
                }
            } else {
                if(registro_usuario($user_nombres, $user_apellidos, $user_email, $user_pass)){
                    echo display_msj("Registro satisfactorio, Por favor revisa tu bandeja o spam para la activación de tu cuenta. Esto puede tardar unos minutos", "success");
                } else {
                    echo display_msj("Lo sentimos, no pudimos registrar tu cuenta, intentalo más tarde", "danger");
                }
            }

        }
    }

    function registro_usuario($nombres, $apellidos, $email, $pass){
        return false;
    }

?>