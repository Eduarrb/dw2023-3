CREATE TABLE personajes (
    per_act_id INT NOT NULL,
    per_peli_id INT NOT NULL,
    per_nombre VARCHAR(100) NOT NULL
)

INSERT INTO personajes (per_act_id, per_peli_id, per_nombre) VALUES
    (1, 1, 'Openhaimer'),
    (2, 1, 'Gen. Leslie Groves'),
    (3, 2, 'Neo'),
    (4, 2, 'Trinity'),
    (5, 3, 'Jack'),
    (6, 3, 'Rose'),
    (7, 5, 'Rocky'),
    (8, 5, 'MaryAnn'),
    (9, 7, 'Jack Torrance'),
    (10, 7, 'Wendy Torrance'),
    (11, 9, 'Gandalf'),
    (12, 9, 'Frodo')

-- 1️⃣ 2 TABLAS - WHERE
SELECT
    *
    FROM peliculas, personajes
        WHERE peli_id = per_peli_id

-- NOMBRES DE TABLAS COMO RELACION
SELECT
    peliculas.peli_nombre,
    personajes.per_nombre
    FROM peliculas, personajes
        WHERE peliculas.peli_id = personajes.per_peli_id

-- 2️⃣ ALIAS DE TABLAS
SELECT
    a.peli_nombre,
    b.per_nombre
    FROM peliculas a, personajes b
        WHERE a.peli_id = b.per_peli_id

SELECT
    a.peli_nombre,
    b.per_nombre
    FROM peliculas a, personajes b
        WHERE a.peli_id = b.per_peli_id
        ORDER BY a.peli_nombre

-- 3️⃣ 3 TABLAS
SELECT
    *
    FROM peliculas a, personajes b, actores c
        WHERE a.peli_id = b.per_peli_id
            AND b.per_act_id = c.act_id

CREATE TABLE directores (
    dire_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    dire_nombres VARCHAR(100) NOT NULL,
    dire_apellidos VARCHAR(100) NOT NULL
)

INSERT INTO directores (dire_nombres, dire_apellidos) VALUES
    ('Christopher', 'Nolan'),
    ('Lana', 'Wachowsky'),
    ('James', 'Cameron'),
    ('Stanly', 'Cubric'),
    ('Peter', 'Jackson'),
    ('Ridley', 'Scott')

-- 💥💥 CUIDADO
ALTER TABLE peliculas ADD COLUMN peli_dire_id INT AFTER peli_id

UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 1
UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 4
UPDATE peliculas SET peli_dire_id = 2 WHERE peli_id = 2
UPDATE peliculas SET peli_dire_id = 3 WHERE peli_id = 3
UPDATE peliculas SET peli_dire_id = 4 WHERE peli_id = 7
UPDATE peliculas SET peli_dire_id = 5 WHERE peli_id = 9
UPDATE peliculas SET peli_dire_id = 6 WHERE peli_id = 8

SELECT
    *
    FROM peliculas a, directores b
        WHERE a.peli_dire_id = b.dire_id