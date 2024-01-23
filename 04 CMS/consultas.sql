CREATE DATABASE jobaria;

USE jobaria;

CREATE TABLE usuarios (
    user_id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_nombres VARCHAR(100) NOT NULL,
    user_apellidos VARCHAR(100) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_img TEXT,
    user_pass VARCHAR(255) NOT NULL,
    user_token TEXT,
    user_status TINYINT(1) DEFAULT 0 COMMENT 'status 0: usuario no activo, status 1: usuario activo',
    user_rol VARCHAR(50) NOT NULL DEFAULT 'suscriptor'
)

INSERT INTO usuarios (user_nombres, user_apellidos, user_email, user_pass) VALUES ('John', 'Smith', 'jsmith@correo.com', '123')

CREATE TABLE productos (
    prod_id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    prod_nombre VARCHAR(100) NOT NULL,
    prod_descri TEXT NOT NULL,
    prod_precio DECIMAL(10,2) NOT NULL,
    prod_canti INT NOT NULL,
    prod_img TEXT NOT NULL
)

CREATE TABLE comentarios (
    com_id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    com_user_id INT(10) UNSIGNED NOT NULL,
    com_prod_id INT(10) UNSIGNED NOT NULL,
    com_mensaje TEXT NOT NULL,
    com_puntaje INT NOT NULL,
    com_fecha DATE NOT NULL,
    com_status TINYINT(1) DEFAULT 0 NOT NULL
)

DROP TABLE comentarios

ALTER TABLE comentarios
    ADD CONSTRAINT fk_userId FOREIGN KEY (com_user_id)
    REFERENCES usuarios (user_id)
    ON DELETE RESTRICT ON UPDATE CASCADE

ALTER TABLE comentarios
    ADD CONSTRAINT fk_prdoId FOREIGN KEY (com_prod_id)
    REFERENCES productos (prod_id)
    ON DELETE RESTRICT ON UPDATE CASCADE

SELECT a.com_id, CONCAT(b.user_nombres, " ", b.user_apellidos) AS usuario, c.prod_id, c.prod_nombre, a.com_mensaje, a.com_puntaje, a.com_fecha FROM comentarios a INNER JOIN usuarios b ON a.com_user_id = b.user_id INNER JOIN productos c ON a.com_prod_id = c.prod_id


SELECT a.prod_id, a.prod_nombre, a.prod_precio, a.prod_img, a.prod_descri, a.prod_canti, COUNT(a.prod_id) AS total_com, SUM(b.com_puntaje) AS total_puntaje FROM productos a INNER JOIN comentarios b ON a.prod_id = b.com_prod_id WHERE prod_id = 2

CREATE TABLE carrito (
    cart_id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cart_user_id INT(10) UNSIGNED NOT NULL,
    cart_prod_id INT(10) UNSIGNED NOT NULL,
    cart_canti INT NOT NULL
)

ALTER TABLE carrito
    ADD CONSTRAINT fk_userCartId FOREIGN KEY (cart_user_id)
    REFERENCES usuarios (user_id)
    ON DELETE RESTRICT ON UPDATE CASCADE

ALTER TABLE carrito
    ADD CONSTRAINT fk_prodCartId FOREIGN KEY (cart_prod_id)
    REFERENCES productos (prod_id)
    ON DELETE RESTRICT ON UPDATE CASCADE