<?php require_once("../resources/config.php"); ?>

<?php include(VIEW_FRONT . DS . "head.php"); ?>
    
    <?php include(VIEW_FRONT . DS . "nav.php"); ?>

    <section class="cart">
        <div class="cart__container container">
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
                    <?php get_mostrarItemsCarrito(); ?>
                    <tr>
                        <td colspan="3"></td>
                        <td style="padding: 10px 0;"><strong>Total:</strong></td>
                        <td>S/ 1253.93</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <form action="" class="mt-2 text-right">
                <input type="submit" value="Checkout" class="btn btn-secondary">
            </form>
        </div>
    </section>

    <?php include(VIEW_FRONT . DS . "footer.php"); ?>
