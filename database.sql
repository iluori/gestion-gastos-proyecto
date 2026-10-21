CREATE DATABASE gestion_gastos;

USE gestion_gastos;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE expense (
    id INT AUTO_INCREMENT PRIMARY KEY,
    amount DECIMAL(10,2) NOT NULL,
    description VARCHAR(255),
    fecha DATE NOT NULL,
    id_user INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES user(id)
);