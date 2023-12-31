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
