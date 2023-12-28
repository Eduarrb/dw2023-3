-- ⚡⚡ JOINS ⚡⚡

SELECT *
    FROM actores a, personajes b
        WHERE a.act_id = b.per_act_id

---------------------------------------
-- 2 TABLAS
SELECT *
    FROM actores a 
        INNER JOIN personajes b
            ON a.act_id = b.per_act_id

INSERT INTO actores (act_nombres, act_apellidos) VALUES
    ("Salma", "Hayek"),
    ("Brad", "Pitt"),
    ("Robert", "De Niro")

INSERT INTO personajes (per_nombre) VALUES
    ("Spiderman"),
    ('CApitan America'),
    ('Simba')


SELECT *
    FROM actores act
        LEFT JOIN personajes per
            ON act.act_id = per.per_act_id

SELECT *
    FROM actores act
        RIGHT JOIN personajes per
            ON act.act_id = per.per_act_id

-- 3 TABLAS
SELECT *
    FROM peliculas a
        RIGHT JOIN personajes b ON a.peli_id = b.per_peli_id
        LEFT JOIN actores c ON b.per_act_id = c.act_id       

-- 4 tablas
SELECT *
    FROM peliculas a
        LEFT JOIN personajes b ON a.peli_id = b.per_peli_id
        RIGHT JOIN actores c ON b.per_act_id = c.act_id     
        RIGHT JOIN directores d ON a.peli_dire_id = d.dire_id