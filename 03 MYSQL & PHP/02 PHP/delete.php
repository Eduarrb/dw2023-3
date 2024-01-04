<?php include "db.php"; ?>
<?php ob_start(); ?>

<?php
    $id = $_GET['id'];
    // echo $id;
    $query = "DELETE FROM peliculas WHERE peli_id = {$id}";
    mysqli_query($conexion, $query);
    header("Location: ./");
?>