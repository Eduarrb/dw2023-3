<?php
    function post_productosAgregar(){
        $errores = [];
        $min = 5;
        if(isset($_POST['guardar'])){
            $prod_nombre = limpiar_string(trim($_POST['prod_nombre']));
            $prod_descri = limpiar_string(trim($_POST['prod_descri']));
            $prod_precio = limpiar_string(trim($_POST['prod_precio']));
            $prod_canti = limpiar_string(trim($_POST['prod_canti']));

            if(strlen($prod_nombre) < $min){
                $errores['nombre'] = "El campo nombre debe tener mas de {$min} caracteres";
            }
            if(strlen($prod_descri) < $min){
                $errores['descri'] = "El campo descripcion debe tener minimo {$min} caracteres";
            }
            if(!empty($errores)){
                return $errores;
            }
        }
    }

?>