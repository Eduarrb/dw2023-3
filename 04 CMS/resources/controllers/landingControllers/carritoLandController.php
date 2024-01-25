<?php
    function post_carritoAdd(){
        if(isset($_POST['carritoAdd'])){
            validarSesion();
            $prod_id = limpiar_string(trim($_POST['prod_id']));
            $prod_canti = limpiar_string(trim($_POST['prod_canti']));
            $query = query("SELECT * FROM carrito WHERE cart_user_id = {$_SESSION['user_id']} AND cart_prod_id = {$prod_id}");
            echo contar_filas($query);
            if(contar_filas($query) == 1){
                set_mensaje(display_landMensaje("El producto ya esta agregado en tu carrito", "danger"));
                return redirect("producto.php?id={$prod_id}");
            }
            query("INSERT INTO carrito (cart_user_id, cart_prod_id, cart_canti) VALUES ({$_SESSION['user_id']}, {$prod_id}, {$prod_canti})");
            set_mensaje(display_landMensaje("Producto agregado correctamente al carrito", "success"));
            redirect("producto.php?id={$prod_id}");
        }
    }

    function validarCarrito(){
        $query = query("SELECT COUNT(a.cart_canti) AS canti, SUM(b.prod_precio) AS total FROM carrito a INNER JOIN productos b  ON a.cart_prod_id = b.prod_id WHERE a.cart_user_id = {$_SESSION['user_id']}");
        if(contar_filas($query) >= 1){
            return fetch_assoc($query);
        }
    }

    function get_mostrarItemsCarrito(){
        validarSesion();
        $query = query("SELECT * FROM carrito a INNER JOIN productos b ON a.cart_prod_id = b.prod_id WHERE a.cart_user_id = {$_SESSION['user_id']}");
        if(contar_filas($query) >= 1){
            while($fila = fetch_assoc($query)){
                $sub_total = $fila['prod_precio'] * $fila['cart_canti'];
                $item = <<<DELIMITADOR
                    <tr>
                        <td>
                            <img src="img/{$fila['prod_img']}" alt="">
                        </td>
                        <td>{$fila['prod_nombre']}</td>
                        <td>S/ {$fila['prod_precio']}</td>
                        <td>{$fila['cart_canti']}</td>
                        <td>S/ {$sub_total}</td>
                        <td>
                            <a href="#" class="btn btn-warning">
                                <i class="fa-solid fa-minus"></i>
                            </a>
                            <a href="#" class="btn btn-success">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                            <a href="#" class="btn btn-danger">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
DELIMITADOR;
                echo $item;
            }
        } else {
            $item = <<<DELIMITADOR
                <tr>
                    <td colspan="6" style="padding: 10px 0; color: #e74c3c">
                        NO TIENE ELEMENTOS AGREGADOS EN SU CARRITO
                    </td>
                </tr>
DELIMITADOR;
            echo $item;
        }
    }
?>