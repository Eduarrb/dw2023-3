<?php require_once("../resources/config.php"); ?>

<?php include(VIEW_FRONT . DS . "head.php"); ?>
    
    <?php include(VIEW_FRONT . DS . "nav.php"); ?>

    <section class="cart">
        <div class="cart__container container">
            <?php mostrar_msj(); ?>
            <table class="cart__container__table">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Sub Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $validarItems = get_mostrarItemsCarrito(); ?>
                </tbody>
            </table>
            <?php 
                carritoAdd(); 
                carritoRemove();
                carritoDelete();
            ?>
            <?php 
                if($validarItems){
                    ?>
                        <form action="" class="mt-2 text-right">
                            <input type="submit" value="Checkout" class="btn btn-secondary">
                        </form>
                <?php }
            ?>
        </div>
    </section>

    <?php include(VIEW_FRONT . DS . "footer.php"); ?>
