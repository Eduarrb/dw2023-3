<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Agregar Productos</h1>
</div>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body">
                <?php 
                    mostrar_msj(); 
                    $errores = post_productosAgregar();
                ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="prod_nombre">Nombre:</label>
                        <input type="text" id="prod_nombre" class="form-control" name="prod_nombre">
                        <div class="text-danger">
                            <?php echo !empty($errores['nombre']) ? $errores['nombre'] : ""; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prod_descri">Descripción:</label>
                        <textarea name="prod_descri" id="prod_descri" cols="30" rows="3" class="form-control"></textarea>
                        <div class="text-danger">
                            <?php echo !empty($errores['descri']) ? $errores['descri'] : ""; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prod_precio">Precio:</label>
                        <input type="number" id="prod_precio" class="form-control" name="prod_precio" step="any">
                        <div class="text-danger">
                            <?php echo !empty($errores['precio']) ? $errores['precio'] : ""; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prod_canti">Cantidad:</label>
                        <input type="number" id="prod_canti" class="form-control" name="prod_canti">
                        <div class="text-danger">
                            <?php echo !empty($errores['canti']) ? $errores['canti'] : ""; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prod_img">Imagen:</label>
                        <input type="file" name="prod_img" id="prod_img" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Guardar" name="guardar" class="btn btn-success mt-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>