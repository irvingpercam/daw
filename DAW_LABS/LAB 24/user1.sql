--Comprobando la propiedad de aislamiento en una BD.

-- Inserta la siguiente transacción y ejecútala:

BEGIN TRANSACTION PRUEBA1
INSERT INTO CLIENTES_BANCA VALUES('001', 'Manuel Rios Maldonado', 9000);
INSERT INTO CLIENTES_BANCA VALUES('002', 'Pablo Perez Ortiz', 5000);
INSERT INTO CLIENTES_BANCA VALUES('003', 'Luis Flores Alvarado', 8000);
COMMIT TRANSACTION PRUEBA1


SELECT * FROM CLIENTES_BANCA

BEGIN TRANSACTION PRUEBA2
INSERT INTO CLIENTES_BANCA VALUES('004','Ricardo Rios Maldonado',19000;
INSERT INTO CLIENTES_BANCA VALUES('005','Pablo Ortiz Arana',15000);
INSERT INTO CLIENTES_BANCA VALUES('006','Luis Manuel Alvarado',18000);

-- Revisa el contenido de la tabla clientes_banca desde la ventana que
-- inicializaste como la primera sesión con la siguiente consulta:

SELECT * FROM CLIENTES_BANCA

-- Por último regresa a la ventana que mantiene activa tu primer sesión,
-- agrega el siguiente comando a la pantalla y ejecútalo:

ROLLBACK TRANSACTION PRUEBA2

-- Comprobando la propiedad de Atomicidad en una BD

-- Inserta la siguiente transacción y ejecútala:

BEGIN TRANSACTION PRUEBA3
INSERT INTO TIPOS_MOVIMIENTO VALUES('A','Retiro Cajero Automatico');
INSERT INTO TIPOS_MOVIMIENTO VALUES('B','Deposito Ventanilla');
COMMIT TRANSACTION PRUEBA3

-- Inserta la siguiente transacción y ejecútala:

BEGIN TRANSACTION PRUEBA4
INSERT INTO MOVIMIENTOS VALUES('001','A',GETDATE(),500);
UPDATE CLIENTES_BANCA SET SALDO = SALDO -500
WHERE NoCuenta='001'
COMMIT TRANSACTION PRUEBA4

-- Posteriormente revisa si las tablas de clientes_banca y movimientos
-- sufrieron algún cambio, es decir, si dio de alta el registro que se
-- describe en la transacción y su actualización.

SELECT * FROM Clientes_Banca
SELECT * FROM Movimientos

-- Manejando Fallas en una Transacción

-- Captura y ejecuta la siguiente transacción:

BEGIN TRANSACTION PRUEBA5
INSERT INTO CLIENTES_BANCA VALUES('005','Rosa Ruiz Maldonado',9000);
INSERT INTO CLIENTES_BANCA VALUES('006','Luis Camino Ortiz',5000);
INSERT INTO CLIENTES_BANCA VALUES('001','Oscar Perez Alvarado',8000);

IF @@ERROR = 0
COMMIT TRANSACTION PRUEBA5
ELSE
BEGIN
PRINT 'A transaction needs to be rolled back'
ROLLBACK TRANSACTION PRUEBA5
END

SELECT * FROM CLIENTES_BANCA
SELECT * FROM Tipos_Movimiento
SELECT * FROM Movimientos