CREATE DATABASE proyecto_login;

USE proyecto_login;

CREATE TABLE tbl_usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre_usuario VARCHAR(50) NOT NULL,
    psswd_usuario VARCHAR(20) NOT NULL,
    id_cargo INT NOT NULL
);

CREATE TABLE tbl_cargo (
    id_cargo INT PRIMARY KEY AUTO_INCREMENT,
    nombre_cargo VARCHAR(30) NOT NULL
);

ALTER TABLE tbl_usuarios ADD CONSTRAINT fk_id_cargo FOREIGN KEY (id_cargo) REFERENCES tbl_cargo(id_cargo);

INSERT INTO tbl_cargo (id_cargo, nombre_cargo) VALUES (1,'Profesor');
INSERT INTO tbl_usuarios (nombre_usuario, psswd_usuario, id_cargo) VALUES ('hugo', 'admin123', 1);

SELECT u.nombre_usuario, u.psswd_usuario, c.nombre_cargo 
FROM tbl_usuarios AS u 
INNER JOIN tbl_cargo AS c 
ON u.id_cargo = c.id_cargo;