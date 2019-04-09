-- Revisa el contenido de la tabla clientes_banca desde la ventana
-- que inicializaste como la segunda sesión:

SELECT * FROM CLIENTES_BANCA

-- Inserta la siguiente transacción y ejecútala:

BEGIN TRANSACTION PRUEBA2
INSERT INTO CLIENTES_BANCA VALUES('004','Ricardo Rios Maldonado',19000);
INSERT INTO CLIENTES_BANCA VALUES('005','Pablo Ortiz Arana',15000);
INSERT INTO CLIENTES_BANCA VALUES('006','Luis Manuel Alvarado',18000);
COMMIT TRANSACTION PRUEBA2

-- Revisa el contenido de la tabla clientes_banca desde la ventana que
-- inicializaste como la segunda sesión.

SELECT * FROM CLIENTES_BANCA

-- ¿Qué pasa cuando deseas realizar esta consulta?

-- Itenta con la siguiente consulta desde la segunda sesión:

SELECT * FROM CLIENTES_BANCA where NoCuenta='001'

-- Revisa nuevamente el contenido de la tabla clientes_banca desde la ventana
-- que inicializaste como la segunda sesión:

SELECT * FROM CLIENTES_BANCA
