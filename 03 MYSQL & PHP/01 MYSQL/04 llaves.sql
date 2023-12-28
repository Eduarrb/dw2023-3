-- ⚡⚡ LLAVES PRIMARIAS Y FORANEAS
ALTER TABLE peliculas CHANGE COLUMN peli_dire_id peli_dire_id INT(10) UNSIGNED

-- ⚡⚡ RESTRICCIONES
-- RESTRICT
    -- Por defecto, impide realizar modificaciones que atenten la integridad referencial de las tablas,
    -- no permite borrar o actualizar los datos
-- CASCADE
    -- Al actualizar o borrar lo datos refrenciados, tambien se actualiza o se borra la tabla
    -- dependiente
-- SET NULL
    -- Se establece campos nulos a la tabla dependiente al momento de actualizar o borrar
-- NO ACTION: no hace nada

ALTER TABLE peliculas
    ADD CONSTRAINT fk_direId FOREIGN KEY (peli_dire_id)
    REFERENCES directores (dire_id)
    ON DELETE RESTRICT ON UPDATE RESTRICT

DELETE FROM directores WHERE dire_id = 8

ALTER TABLE peliculas DROP CONSTRAINT fk_direId

ALTER TABLE peliculas
    ADD CONSTRAINT fk_direId FOREIGN KEY (peli_dire_id)
    REFERENCES directores (dire_id)
    ON DELETE CASCADE ON UPDATE CASCADE