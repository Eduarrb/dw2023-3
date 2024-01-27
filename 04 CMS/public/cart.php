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

            <div id="wallet_container"></div>
        </div>
    </section>

    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago('');
        const bricksBuilder = mp.bricks();

        mp.bricks().create("wallet", "wallet_container", {
            initialization: {
                preferenceId: "<?php echo $validarItems[1]; ?>",
                redirectMode: "modal"
            }
        });

    </script>

    <?php include(VIEW_FRONT . DS . "footer.php"); ?>
