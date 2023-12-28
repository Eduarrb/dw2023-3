<?php include "db.php"; ?>
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
            <form class="col-md-6 mt-4 pb-5" method="post">
                <div class="form-group">
                    <label for="peli_nombre">Nombre Pelicula</label>
                    <input type="text" class="form-control" name="peli_nombre" id="peli_nombre">
                </div>
                <div class="form-group">
                    <label for="peli_genero">Género</label>
                    <input type="text" class="form-control" name="peli_genero" id="peli_genero">
                </div>
                <div class="form-group">
                    <label for="peli_fechaEstreno">Fecha de estreno</label>
                    <input type="date" class="form-control" name="peli_fechaEstreno" id="peli_fechaEstreno">
                </div>
                <div class="form-group">
                    <label for="peli_restricciones">Restricciones</label>
                    <input type="text" class="form-control" name="peli_restricciones" id="peli_restricciones">
                </div>
                <div class="form-group">
                    <label for="peli_img">URL img</label>
                    <input type="text" class="form-control" name="peli_img" id="peli_img">
                </div>
                <div class="form-group">
                    <label for="peli_dire_id">Director</label>
                    <select name="peli_dire_id" id="peli_dire_id" class="form-control">
                        <option value="" disabled selected>- Selecciona un director -</option>
                        <option value="1">Lana washoski</option>
                        <option value="1">Lana washoski</option>
                        <option value="1">Lana washoski</option>
                        <option value="1">Lana washoski</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Guardar" class="btn btn-primary" name="guardar">
                </div>
            </form>
        </div>
    </section>
</body>