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
        <div class="row p-4">
            <a href="subir.php" class="btn btn-success">Subir Peliculas</a>
            <a href="#" class="btn btn-info ml-2">Directores</a>
        </div>

        <div class="row">
            <!-- 
                CRUD 
                C -> CREATE
                R -> READ
                U -> UPDATE
                D -> DELETE
            -->

            <?php

                $nombre = 'Jaimito';
                $apellido = 'Caceres';
                $num1 = 29;
                // echo $num1;
                // echo $nombre;
                // echo $apellido;
                // $string = "['num', 456]";
                // echo $string;
                $array1 = ['num', 456, $nombre, 0];
                // echo $array1;
                // print_r($array1);

                function saludar($nombres){
                    echo "Hola {$nombres}";
                }
                // saludar('Jaimito');
            ?>
        </div>

        <div class="row">
            <?php
                $query = "SELECT a.peli_id, a.peli_img, a.peli_nombre, CONCAT(b.dire_nombres, ' ', b.dire_apellidos) AS director, a.peli_restricciones FROM peliculas a INNER JOIN directores b ON a.peli_dire_id = b.dire_id";
                $query_res = mysqli_query($conexion, $query);

                // ⚡⚡ ARRAYS ASOCIATIVOS ⚡⚡
                $array2 = ['Joshi', true, 12];
                $arrayAso = ["peli_nombre" => "Openhimer", "director" => "Christopher Nolan", "rt" => "PG-13"];
                while($fila = mysqli_fetch_assoc($query_res)){
                    ?>
                        <div class="col-md-3 item mb-3">
                            <img src="<?php echo $fila['peli_img']; ?>" alt="<?php echo $fila['peli_nombre']; ?>" width="100%">
                            <h4 class="text-info">
                                <?php echo $fila['peli_nombre']; ?>
                            </h4>
                            <div>
                                <strong>Director: </strong> <?php echo $fila['director']; ?>
                            </div>
                            <div>
                                <strong>Rating: </strong> <?php echo $fila['peli_restricciones']; ?>
                            </div>
                            <div>
                                <a href="edit.php?id=<?php echo $fila['peli_id']; ?>" class="btn btn-success">editar</a>
                                <a href="delete.php?id=<?php echo $fila['peli_id']; ?>" class="btn btn-danger">borrar</a>
                            </div>
                        </div>
                <?php }
            ?>
            <!-- <div class="col-md-3 item">
                <img src="https://www.futuro.cl/wp-content/uploads/2022/07/oppenheimer-poster-latino.jpg" alt="Oppenhimer" width="100%">
                <h4 class="text-info">Oppenhimer</h4>
                <div>
                    <strong>Director: </strong> Cristopher Nolan
                </div>
                <div>
                    <strong>Rating: </strong> PG-13
                </div>
                <div>
                    <a href="#" class="btn btn-success">editar</a>
                    <a href="#" class="btn btn-danger">borrar</a>
                </div>
            </div> -->
        </div>
    </section>
</body>
</html>