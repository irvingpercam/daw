-- Irving Alain Aguilar Pérez - A01703171
-- CREACION DE TABLAS

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Clientes_Banca')
DROP TABLE Clientes_Banca
CREATE TABLE Clientes_Banca
(
  NoCuenta varchar(5) not null,
  Nombre varchar(30) not null,
  Saldo numeric (10,2) not null,
  CONSTRAINT Clientes_Banca_pk PRIMARY KEY (NoCuenta)
)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Tipos_Movimiento')
DROP TABLE Tipos_Movimiento
CREATE TABLE Tipos_Movimiento
(
  ClaveM varchar(2) not null,
  Descripcion varchar(30) not null,
  CONSTRAINT Tipos_Movimiento_pk PRIMARY KEY (ClaveM)
)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Movimientos')
DROP TABLE Movimientos
CREATE TABLE Movimientos
(
  NoCuenta varchar(5) not null,
  ClaveM varchar(2) not null,
  Fecha datetime not null,
  Monto numeric (10,2) not null,
  CONSTRAINT Movimientos_pk PRIMARY KEY (NoCuenta, ClaveM)
)
