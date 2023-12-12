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