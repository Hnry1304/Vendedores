CREATE TABLE temporal(
    id  INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(10),
    producto VARCHAR(20),
    cantidad INTEGER,
    ganancia INTEGER,
    Periodo VARCHAR(15)
);

CREATE TABLE vendedores(
    id  INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(10),
    producto VARCHAR(20),
    cantidad INTEGER,
    ganancia INTEGER,
    totalGanancia FLOAT,    
    Periodo VARCHAR(15)
);

CREATE TABLE cantidadTotal(
    id  INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(10),
    producto VARCHAR(20),
    cantidad INTEGER,
    Periodo VARCHAR(15)
);

CREATE TABLE gananciaTotal(
    id  INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(10),
    producto VARCHAR(20),
    cantidad INTEGER,
    Periodo VARCHAR(15)
);

CREATE TABLE vendedores(
    id  INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(10),
    producto VARCHAR(20),
    cantidad INTEGER,
    ganancia INTEGER    
);