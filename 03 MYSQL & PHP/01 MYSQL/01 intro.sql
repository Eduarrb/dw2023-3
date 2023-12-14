-- CONSULTAS O QUERIES

show databases

SHOW DATABASES

CREATE DATABASE netflix

USE netflix

CREATE TABLE personas (
    per_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    per_nombres VARCHAR(50) NOT NULL,
    per_apellidos VARCHAR(50) NOT NULL,
    per_dni CHAR(8) NOT NULL,
    per_fechanac DATETIME NOT NULL,
    per_img TEXT
)

DESC personas

SHOW TABLES

--- ☣️☣️ NO HACERLO EN PRODUCCION
DROP TABLE personas

-- 💥💥 PRIMERO HACER PRUEBAS ANTES DE HACERLO EN PRODUCCION
ALTER TABLE personas ADD COLUMN per_genero VARCHAR(15)

ALTER TABLE personas DROP COLUMN per_genero

ALTER TABLE personas ADD COLUMN per_genero VARCHAR(15) NOT NULL AFTER per_dni

INSERT INTO personas (per_nombres, per_apellidos, per_dni, per_genero, per_fechanac) VALUES
    ('Enrique', 'Coz', '11111111', 'masculino', '1990-10-10')

SELECT * FROM personas

INSERT INTO personas (per_nombres, per_apellidos, per_dni, per_genero, per_fechanac) VALUES
    ('Malena', 'Ruiz', '22222222', "femenino", "2002-12-12 10:30:30"),
    ('Pedro', 'Hinostroza', '33333333', "masculino", "2012-02-02 02:35:30"),
    ('Sofia', 'Gonzales', '33333333', "femenino", "2005-02-02 02:35:30")
    

-- ☣️☣️ NO HACER EN PRODUCCIÓN Y TENER PRESENTE LA LEY DATOS
DELETE FROM personas WHERE per_id = 4
ALTER TABLE personas CHANGE COLUMN per_dni per_dni CHAR(8) UNIQUE

INSERT INTO personas (per_nombres, per_apellidos, per_dni, per_genero, per_fechanac) VALUES
    ('Sofia', 'Gonzales', '44444444', "femenino", "2005-02-02 02:35:30")

DELETE FROM personas -- ☣️☣️

TRUNCATE personas -- ☣️☣️

DROP TABLE personas

CREATE TABLE peliculas (
    peli_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    peli_nombre VARCHAR(50) NOT NULL,
    peli_genero VARCHAR(50) NOT NULL,
    peli_fechaEstreno DATE NOT NULL,
    peli_restricciones VARCHAR(5) NOT NULL
)

INSERT INTO peliculas (peli_nombre, peli_genero, peli_fechaEstreno, peli_restricciones) VALUES
    ('Openhaimer', 'drama', '2023-07-21', 'PG-13')

INSERT INTO peliculas (peli_nombre, peli_genero, peli_fechaEstreno, peli_restricciones) VALUES
    ('Matrix', 'Ciencia Ficción', '1999-12-24', 'PG-13'),
    ('Titanic', 'Aventura', '1998-01-23', 'PG-16'),
    ('Interstellar', 'ciencia ficcion', '2014-11-06', 'PG'),
    ('Rocky', 'Drama', '1985-08-08', 'PG'),
    ('La lista de Shindler', 'Drama', '1993-12-12', 'PG-16'),
    ('El Resplandor', 'Suspenso', '1980-05-05', 'PG-13'),
    ('Alien El Octavo Pasajero', 'Terror - Ciencia Ficcion', '1980-01-24', 'PG-16')

INSERT INTO peliculas (peli_nombre, peli_genero, peli_fechaEstreno, peli_restricciones) VALUES
    ('El señor de los anillos: La comunidad del anillo', 'Ciencia ficción', '2004-11-11', 'PG')

-- 1️⃣ WHERE
SELECT * FROM peliculas WHERE peli_id = 6
SELECT * FROM peliculas WHERE peli_nombre = 'interstellar'
SELECT * FROM peliculas WHERE peli_restricciones = 'pg'
SELECT * FROM peliculas WHERE peli_nombre = 'el'
SELECT * FROM peliculas WHERE peli_genero = 'Ciencia Ficción'

-- 2️⃣ ORDER BY
SELECT * FROM peliculas ORDER BY peli_id DESC
SELECT * FROM peliculas ORDER BY peli_nombre
SELECT * FROM peliculas ORDER BY peli_fechaEstreno

SELECT * FROM peliculas WHERE peli_genero = 'ciencia ficcion' ORDER BY peli_nombre DESC

INSERT INTO peliculas (peli_nombre, peli_genero, peli_fechaEstreno, peli_restricciones) VALUES
    ('007: Golden Eye', 'Acción', '1995-12-24', 'PG-13')

SELECT * FROM peliculas ORDER BY peli_id DESC

CREATE TABLE actores (
    act_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    act_nombres VARCHAR(100) NOT NULL,
    act_apellidos VARCHAR(100) NOT NULL
)

INSERT INTO actores (act_nombres, act_apellidos) VALUES
    ('Kilian', 'Murphy'),
    ('Matt', 'Daemon'),
    ('Keanu', 'Reeves'),
    ('Carrie-Anne', 'Moss'),
    ('Leonardo', 'Dicaprio'),
    ('Kate', 'Winslet'),
    ('Silvester', 'Stallone'),
    ('Talia', 'Shire'),
    ('Jack', 'Nicolson'),
    ('Shelly', 'Duvall'),
    ('Ian', 'Mackellen'),
    ('Elijah', 'Wood')

-- 3️⃣ CONCAT
SELECT act_nombres, act_apellidos FROM actores
SELECT CONCAT(act_nombres, act_apellidos) FROM actores
SELECT CONCAT(act_nombres, " ", act_apellidos) FROM actores

-- 4️⃣ ALIAS DE CAMPOS
SELECT CONCAT(act_nombres, " ", act_apellidos) AS actor FROM actores
SELECT CONCAT(act_nombres, " ", act_apellidos) AS actor_de_reparto FROM actores
SELECT CONCAT(act_nombres, " ", act_apellidos) AS "actor de reparto" FROM actores

-- 5️⃣ OBTENER CARACTERES POR SEPARDO - SUBSTRING
SELECT SUBSTRING(act_nombres, 1, 5) FROM actores

-- EJERCICIO: kmurphy@continental.edu.pe
SELECT SUBSTRING(act_nombres, 1, 1) FROM actores
SELECT CONCAT(SUBSTRING(act_nombres, 1, 1), act_apellidos, "@peliculas.com") AS correo FROM actores
SELECT LOWER(CONCAT(SUBSTRING(act_nombres, 1, 1), act_apellidos, "@peliculas.com")) AS correo FROM ACTORES
SELECT UPPER(CONCAT(SUBSTRING(act_nombres, 1, 1), act_apellidos, "@peliculas.com")) AS correo FROM ACTORES

-- 6️⃣ COMODINES
SELECT * FROM peliculas WHERE peli_nombre LIKE 'el%'
SELECT * FROM peliculas WHERE peli_nombre LIKE '%r'
SELECT * FROM peliculas WHERE peli_nombre LIKE '%r%'
