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
        if(isset($_SESSION['user_id'])){
            $query = query("SELECT COUNT(a.cart_canti) AS canti, SUM(b.prod_precio) AS total FROM carrito a INNER JOIN productos b  ON a.cart_prod_id = b.prod_id WHERE a.cart_user_id = {$_SESSION['user_id']}");
            if(contar_filas($query) >= 1){
                return fetch_assoc($query);
            }
        } else {
            return ["canti" => 0, "total" => 0];
        }
    }

    require_once 'vendor/autoload.php';
    use MercadoPago\MercadoPagoConfig;
    use MercadoPago\Client\Preference\PreferenceClient;
    MercadoPagoConfig::setAccessToken("");
    $client = new PreferenceClient();

    function get_mostrarItemsCarrito(){
        validarSesion();
        $query = query("SELECT * FROM carrito a INNER JOIN productos b ON a.cart_prod_id = b.prod_id WHERE a.cart_user_id = {$_SESSION['user_id']}");
        if(contar_filas($query) >= 1){
            $total = 0;
            while($fila = fetch_assoc($query)){
                $sub_total = $fila['prod_precio'] * $fila['cart_canti'];
                $total += $sub_total;
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
                            <a href="cart.php?remove={$fila['cart_id']}" class="btn btn-warning">
                                <i class="fa-solid fa-minus"></i>
                            </a>
                            <a href="cart.php?add={$fila['cart_id']}" class="btn btn-success">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                            <a href="cart.php?delete={$fila['cart_id']}" class="btn btn-danger">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
DELIMITADOR;
                echo $item;
            }
            $trTotal = <<<DELIMITADOR
                <tr>
                    <td colspan="3"></td>
                    <td style="padding: 10px 0;"><strong>Total:</strong></td>
                    <td>S/ {$total}</td>
                    <td></td>
                </tr>
DELIMITADOR;
            echo $trTotal;

            global $client, $preference;
            $preference = $client->create([
                "items"=> array(
                  array(
                    "title" => "Mi producto",
                    "quantity" => 1,
                    "unit_price" => 20
                  )
                ),
                "back_urls" => array(
                    "success" => "http://localhost/dw2023-3/04%20CMS/public/success.php",
                    "failure" => "http://localhost/dw2023-3/04%20CMS/public/failure.php",
                    "pending" => "http://localhost/dw2023-3/04%20CMS/public/pending.php"
                ),
                "auto_return" => "approved"
              ]);

            return [$total, $preference->id];
        } else {
            $item = <<<DELIMITADOR
                <tr>
                    <td colspan="6" style="padding: 10px 0; color: #e74c3c">
                        NO TIENE ELEMENTOS AGREGADOS EN SU CARRITO
                    </td>
                </tr>
DELIMITADOR;
            echo $item;
            return false;
        }
    }

    function carritoAdd(){
        if(isset($_GET['add'])){
            $cart_id = limpiar_string(trim($_GET['add']));
            $query = query("SELECT b.prod_canti, a.cart_canti FROM carrito a INNER JOIN productos b ON a.cart_prod_id = b.prod_id WHERE a.cart_id = {$cart_id}");
            $fila = fetch_assoc($query);
            $prod_stock = $fila['prod_canti'];
            $cart_canti = $fila['cart_canti'];

            if($cart_canti < $prod_stock){
                query("UPDATE carrito SET cart_canti = cart_canti + 1 WHERE cart_id = {$cart_id}");
                return redirect("cart.php");
            } else {
                set_mensaje(display_landMensaje("No puedes agregar mas de {$prod_stock} items del producto al carrito", "danger"));
                return redirect("cart.php");
            }
        }
    }

    function carritoRemove(){
        if(isset($_GET['remove'])){
            $cart_id = limpiar_string(trim($_GET['remove']));
            $query = query("SELECT cart_canti FROM carrito WHERE cart_id = {$cart_id}");
            $fila = fetch_assoc($query);
            $cart_canti = $fila['cart_canti'];
            if($cart_canti > 1) {
                query("UPDATE carrito SET cart_canti = cart_canti - 1 WHERE cart_id = {$cart_id}");
                return redirect("cart.php");
            } else {
                set_mensaje(display_landMensaje("El item no puede ser menor a 1, en tal caso eliminalo del carrito", "danger"));
                return redirect("cart.php");
            }
        }
    }

    function carritoDelete(){
        if(isset($_GET['delete'])){
            $cart_id = limpiar_string(trim($_GET['delete']));
            query("DELETE FROM carrito WHERE cart_id = {$cart_id}");
            set_mensaje(display_landMensaje("El item fue retirado del carrito", "success"));
            return redirect("cart.php");
        }
    }
?>