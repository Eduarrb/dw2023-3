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
                    // echo display_msj("Registro satisfactorio, Por favor revisa tu bandeja o spam para la activación de tu cuenta. Esto puede tardar unos minutos", "success");
                    set_mensaje(display_msj("Registro satisfactorio, Por favor revisa tu bandeja o spam para la activación de tu cuenta. Esto puede tardar unos minutos", "success"));
                    redirect("register.php");
                } else {
                    set_mensaje(display_msj("Lo sentimos, no pudimos registrar tu cuenta, intentalo más tarde", "danger"));
                    redirect("register.php");
                }
            }
        }
    }

    function registro_usuario($nombres, $apellidos, $email, $pass){
        $user_token = md5($email);
        $user_pass = password_hash($pass, PASSWORD_BCRYPT, array('cost' => 12));
        query("INSERT INTO usuarios (user_nombres, user_apellidos, user_email, user_pass, user_token) VALUES ('{$nombres}', '{$apellidos}', '{$email}', '{$user_pass}', '{$user_token}')");
        $mensaje = "Por favor activa tu cuenta mediante este <a href='http://localhost/dw2023-3/04%20CMS/public/activate.php?email={$email}&token={$user_token}' target='_blank'>LINK</a>";
        send_email($email, 'Activar cuenta', $mensaje);
        return true;
    }

    function activar_usuario(){
        if(isset($_GET['email']) && isset($_GET['token'])){
            $user_email = limpiar_string(trim($_GET['email']));
            $user_token = limpiar_string(trim($_GET['token']));

            $query = query("SELECT user_id FROM usuarios WHERE user_email = '{$user_email}' AND user_token = '{$user_token}'");
            $fila = fetch_assoc($query);
            // print_r($fila);
            $user_id = $fila['user_id'];
            if(mysqli_num_rows($query) == 1){
                $query = query("UPDATE usuarios SET user_status = 1, user_token = '' WHERE user_id = {$user_id}");
                set_mensaje(display_msj("Su cuenta ha sido activada satisfactoriamente. Por favor inicie sesión", "success"));
                redirect("login.php");
            } else {
                set_mensaje(display_msj("Los datos no son validos. Por favor intente otra vez", "danger"));
                redirect("register.php");
            }
        }
    }
?>