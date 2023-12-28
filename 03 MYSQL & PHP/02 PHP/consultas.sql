ALTER TABLE peliculas ADD COLUMN peli_img TEXT AFTER peli_nombre

UPDATE peliculas SET peli_img = "https://www.futuro.cl/wp-content/uploads/2022/07/oppenheimer-poster-latino.jpg" WHERE peli_id = 1

SELECT 
    a.peli_img,
    a.peli_nombre,
    CONCAT(b.dire_nombres, " ", b.dire_apellidos) AS director,
    a.peli_restricciones
    FROM peliculas a INNER JOIN directores b ON a.peli_dire_id = b.dire_id