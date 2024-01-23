<?php
    function getProductosLand(){
        $query = query("SELECT * FROM productos");
        if(contar_filas($query) != 0){
            while($fila = fetch_assoc($query)){
                $producto = <<<DELIMITADOR
                    <div class="productos__container__box__item">
                        <div class="productos__container__box__item__top">
                            <span>New</span>
                        </div>
                        <img src="img/{$fila['prod_img']}" alt="{$fila['prod_nombre']}">
                        <h2>{$fila['prod_nombre']}</h2>
                        <div class="productos__container__box__item__stars">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="productos__container__box__item__precio">
                            <span class="productos__container__box__item__precio--oferta">S/ {$fila['prod_precio']}</span>
                        </div>
                        <a href="producto.php?id={$fila['prod_id']}" class="productos__container__box__item--btn">ver</a>
                    </div>
DELIMITADOR;
                echo $producto;
            }
        } else {
            echo <<<DELIMITADOR
                <div class="productos__container__box__item">
                    <h2>Aún no se han actulizado los productos</h2>
                </div>
DELIMITADOR;
        }
    }

    function getProductoLand(){
        if(!isset($_GET['id'])){
            redirect("./");
        } else {
            $id = limpiar_string(trim($_GET['id']));
            $query = query("SELECT a.prod_id, a.prod_nombre, a.prod_precio, a.prod_img, a.prod_descri, a.prod_canti, COUNT(a.prod_id) AS total_com, SUM(b.com_puntaje) AS total_puntaje FROM productos a INNER JOIN comentarios b ON a.prod_id = b.com_prod_id WHERE prod_id = {$id}");
            if(contar_filas($query) == 0){
                redirect("./");
            } else {
                return fetch_assoc($query);
            }
        }
    }

?>