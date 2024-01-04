<?php include "db.php"; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pelicomic</title>
</head>
<body>
    <h1 class="text-center pt-5 pb-5 bg-primary text-white">Bienvenido(a) a Pelicomic</h1>
    <section class="container">
        <div class="row">
            <a href="./" class="btn btn-success">HOME</a>
        </div>
        <div class="row justify-content-center">
            <h4 class="text-center col-md-12">
                Ingresa los datos de la película
            </h4>
            <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM peliculas WHERE peli_id = {$id}";
                $query_res = mysqli_query($conexion, $query);
                $fila = mysqli_fetch_assoc($query_res);
                // print_r($fila);
            ?>
            <form class="col-md-6 mt-4 pb-5" method="post">
                <div class="form-group">
                    <label for="peli_nombre">Nombre Pelicula</label>
                    <input type="text" class="form-control" name="peli_nombre" id="peli_nombre" required value="<?php echo $fila['peli_nombre']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_genero">Género</label>
                    <input type="text" class="form-control" name="peli_genero" id="peli_genero" value="<?php echo $fila['peli_genero']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_fechaEstreno">Fecha de estreno</label>
                    <input type="date" class="form-control" name="peli_fechaEstreno" id="peli_fechaEstreno" value="<?php echo $fila['peli_fechaEstreno']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_restricciones">Restricciones</label>
                    <input type="text" class="form-control" name="peli_restricciones" id="peli_restricciones" value="<?php echo $fila['peli_restricciones']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_img">URL img</label>
                    <input type="text" class="form-control" name="peli_img" id="peli_img" value="<?php echo $fila['peli_img']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_dire_id">Director</label>
                    <select name="peli_dire_id" id="peli_dire_id" class="form-control" required>
                        <option value="" disabled selected>- Selecciona un director -</option>
                        <?php
                            $query = "SELECT dire_id, CONCAT(dire_nombres, ' ', dire_apellidos) AS director FROM directores";
                            $query_res = mysqli_query($conexion, $query);
                            while($fila_dire = mysqli_fetch_assoc($query_res)){
                                $dire_id = $fila_dire['dire_id'];
                                if($dire_id == $fila['peli_dire_id']){
                                    ?>
                                        <option value="<?php echo $fila_dire['dire_id']; ?>" selected>
                                            <?php echo $fila_dire['director']; ?>
                                        </option>
                                <?php } else {
                                    ?>
                                        <option value="<?php echo $fila_dire['dire_id']; ?>">
                                            <?php echo $fila_dire['director']; ?>
                                        </option>
                                <?php }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Editar" class="btn btn-primary" name="editar">
                </div>
            </form>
            <?php
                if(isset($_POST['editar'])){
                    $peli_nombre = $_POST['peli_nombre'];
                    $peli_genero = $_POST['peli_genero'];
                    $peli_fechaEstreno = $_POST['peli_fechaEstreno'];
                    $peli_restricciones = $_POST['peli_restricciones'];
                    $peli_img = $_POST['peli_img'];
                    $peli_dire_id = $_POST['peli_dire_id'];

                    $queryUpdate = "UPDATE peliculas SET peli_nombre = '{$peli_nombre}', peli_genero = '{$peli_genero}', peli_fechaEstreno = '{$peli_fechaEstreno}', peli_restricciones = '{$peli_restricciones}', peli_img = '{$peli_img}', peli_dire_id = {$peli_dire_id} WHERE peli_id = {$id}";
                    mysqli_query($conexion, $queryUpdate);
                    header("Location: ./");
                }
            ?>
        </div>
    </section>
</body>