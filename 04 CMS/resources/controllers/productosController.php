<?php
    function post_productosAgregar(){
        $errores = [];
        $min = 5;
        if(isset($_POST['guardar'])){
            $prod_nombre = limpiar_string(trim($_POST['prod_nombre']));
            $prod_descri = limpiar_string(trim($_POST['prod_descri']));
            $prod_precio = limpiar_string(trim($_POST['prod_precio']));
            $prod_canti = limpiar_string(trim($_POST['prod_canti']));
            $prod_img = $_FILES['prod_img']['name'];
            $prod_img_temp = $_FILES['prod_img']['tmp_name'];

            if(strlen($prod_nombre) < $min){
                $errores['nombre'] = "El campo nombre debe tener mas de {$min} caracteres";
            }
            if(strlen($prod_descri) < $min){
                $errores['descri'] = "El campo descripcion debe tener minimo {$min} caracteres";
            }
            if($prod_precio <= 0){
                $errores['precio'] = "El precio debe ser mayor que 0";
            }
            if($prod_canti <= 0){
                $errores['canti'] = "La cantidad debe ser mayor que 0";
            }
            if(!empty($errores)){
                return $errores;
            }

            $prod_img = md5(uniqid()) . "." . explode(".", $prod_img)[1];

            move_uploaded_file($prod_img_temp, "../img/{$prod_img}");
            query("INSERT INTO productos (prod_nombre, prod_descri, prod_precio, prod_canti, prod_img) VALUES ('{$prod_nombre}', '{$prod_descri}', {$prod_precio}, {$prod_canti}, '{$prod_img}')");
            set_mensaje(display_msj("El producto fue agregado correctamente", "success"));
            redirect("index.php?productos");
        }
    }

    function get_productos(){
        $query = query("SELECT * FROM productos");
        while($fila = fetch_assoc($query)){
            $producto = <<<DELIMITADOR
                <tr>
                    <td>{$fila['prod_nombre']}</td>
                    <td><img src="../img/{$fila['prod_img']}" alt="{$fila['prod_nombre']}" width="100px"></td>
                    <td>{$fila['prod_descri']}</td>
                    <td>{$fila['prod_precio']}</td>
                    <td>{$fila['prod_canti']}</td>
                    <td>
                        <a href="index.php?productos_edit&id={$fila['prod_id']}" class="btn btn-small btn-warning">editar</a>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-small btn-danger delete_link" rel="{$fila['prod_id']}" titulo="Eliminar Producto" tabla="productos" accion="delete">borrar</a>
                    </td>
                </tr>
DELIMITADOR;
            echo $producto;
        }
    }

    function get_productoEdit(){
        if(!isset($_GET['productos_edit']) || !isset($_GET['id'])){
            redirect('index.php?productos');
        } else {
            $id = limpiar_string(trim($_GET['id']));
            $producto = query("SELECT * FROM productos WHERE prod_id = {$id}");
            if(contar_filas($producto) == 0){
                set_mensaje(display_msj("El producto no existe", "danger"));
                redirect("index.php?productos");
            }
            return fetch_assoc($producto);
        }
    }

    function post_productoEdit($id, $imgAnterior){
        if(isset($_POST['editar'])){
            $prod_nombre = limpiar_string(trim($_POST['prod_nombre']));
            $prod_descri = limpiar_string(trim($_POST['prod_descri']));
            $prod_precio = limpiar_string(trim($_POST['prod_precio']));
            $prod_canti = limpiar_string(trim($_POST['prod_canti']));
            $prod_img = $_FILES['prod_img']['name'];
            $prod_img_temp = $_FILES['prod_img']['tmp_name'];

            if(!empty($prod_img)){
                $prod_img_nueva = md5(uniqid()) . "." . explode(".", $prod_img)[1];
                move_uploaded_file($prod_img_temp, "../img/{$prod_img_nueva}");
                $imagenAnteriorLocation = "../img/{$imgAnterior}";
                unlink($imagenAnteriorLocation);
            } else {
                $prod_img_nueva = $imgAnterior;
            }

            query("UPDATE productos SET prod_nombre = '{$prod_nombre}', prod_descri = '{$prod_descri}', prod_precio = {$prod_precio}, prod_canti = {$prod_canti}, prod_img = '{$prod_img_nueva}' WHERE prod_id = {$id}");
            set_mensaje(display_msj("Producto actualizado correctamente", "success"));
            redirect("index.php?productos");
        }
    }

    function post_productoDelete(){
        if(isset($_GET['delete'])){
            $id = limpiar_string(trim($_GET['delete']));
            query("DELETE FROM productos WHERE prod_id = {$id}");
            set_mensaje(display_msj("Producto eliminado correctamente!", "success"));
            redirect("index.php?productos");
        }
    }
?>