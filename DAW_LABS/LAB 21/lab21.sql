IF EXISTS (SELECT name FROM sysobjects
            WHERE name = 'creaMaterial' AND type = 'P')
  DROP PROCEDURE creaMaterial
GO

CREATE PROCEDURE creaMaterial
    @uclave NUMERIC(5,0),
    @udescripcion VARCHAR(50),
    @ucosto NUMERIC (8,2),
    @uimpuesto NUMERIC (6,2)
AS
    INSERT INTO Materiales VALUES(@uclave, @udescripcion, @ucosto, @uimpuesto)
GO

-- ¿Qué hace el primer bloque del código (bloque del IF)?
  -- Este bloque revisa si ya hay un procedure existente, en caso de que exista, lo elimina.
-- ¿Para qué sirve la instrucción GO?
  -- Sirve para ejecutar el procedure que se creo anteriormente
-- ¿Explica que recibe como parámetro este Procedimiento y qué tabla modifica?
  -- Está recibiendo como parámetro los campos de la tabla, con sus respectivos tipos de datos.

EXECUTE creaMaterial 5000,'Martillos Acme',250,15

-------------------------------------------------

SELECT * FROM Materiales

-------------------------------------------------

IF EXISTS (SELECT name FROM sysobjects
            WHERE name = 'modificaMaterial' AND type = 'P')
  DROP PROCEDURE modificaMaterial
GO

CREATE PROCEDURE modificaMaterial
    @uclave NUMERIC(5,0),
    @udescripcion VARCHAR(50),
    @ucosto NUMERIC (8,2),
    @uimpuesto NUMERIC (6,2)
AS
    UPDATE Materiales SET descripcion = @udescripcion, costo = @ucosto, porcentajeimpuesto = @uimpuesto
    WHERE clave = @uclave
GO

EXECUTE modificaMaterial 5000,'Martillos de Thor',250,15

-------------------------------------------------

SELECT * FROM Materiales

-------------------------------------------------

IF EXISTS (SELECT name FROM sysobjects
            WHERE name = 'eliminaMaterial' AND type = 'P')
  DROP PROCEDURE eliminaMaterial
GO

CREATE PROCEDURE eliminaMaterial
    @uclave NUMERIC(5,0)

AS
    DELETE FROM Materiales WHERE clave = @uclave
GO

EXECUTE eliminaMaterial 5000

-------------------------------------------------

SELECT * FROM Materiales

-------------------------------------------------

IF EXISTS (SELECT name FROM sysobjects
	WHERE name = 'queryMaterial' AND type = 'P')
	DROP PROCEDURE queryMaterial

GO

CREATE PROCEDURE queryMaterial
	@udescripcion VARCHAR(50),
	@ucosto NUMERIC(8,2)

AS

	SELECT * FROM Materiales WHERE descripcion
	LIKE '%'+@udescripcion+'%' AND costo > @ucosto

GO

EXECUTE queryMaterial 'Lad',20

-------------------------------------------------

-- PROYECTO

-------------------------------------------------

IF EXISTS (SELECT name FROM sysobjects
	          WHERE name = 'creaProyecto' AND type = 'P')
	DROP PROCEDURE creaProyecto
GO

 CREATE PROCEDURE creaProyecto
	@unumero NUMERIC(5,0),
	@udenominacion VARCHAR(50)

AS

	INSERT INTO Proyectos VALUES(@unumero, @udenominacion)

GO

EXECUTE creaProyecto 5020,'Proyecto ABAK'

-------------------------------------------------

SELECT * FROM Proyectos

-------------------------------------------------

IF EXISTS (SELECT name FROM sysobjects
	          WHERE name = 'modificaProyecto' AND type = 'P')
	DROP PROCEDURE modificaProyecto

GO

 CREATE PROCEDURE modificaProyecto
	@unumero NUMERIC(5,0),
	@udenominacion VARCHAR(50)

AS

	UPDATE Proyectos SET numero=@unumero, denominacion=@udenominacion
	WHERE numero = @unumero

GO

EXECUTE modificaProyecto 5020,'Pikachu systems'

-------------------------------------------------------

IF EXISTS (SELECT name FROM sysobjects
	          WHERE name = 'eliminaProyecto' AND type = 'P')
	DROP PROCEDURE eliminaProyecto

GO

 CREATE PROCEDURE eliminaProyecto
	@unumero NUMERIC(5,0)

AS
	DELETE FROM Proyectos WHERE numero = @unumero

GO

EXECUTE eliminaProyecto 5020

-------------------------------------------------------

IF EXISTS (SELECT name FROM sysobjects
	          WHERE name = 'queryProyecto' AND type = 'P')
	DROP PROCEDURE queryProyecto

GO

CREATE PROCEDURE queryProyecto
	@unumero NUMERIC(5,0)

AS

	SELECT * FROM Proyectos
	WHERE numero > @unumero

GO

EXECUTE queryProyecto 5017

-----------------------------------------------------
SELECT * FROM Proyectos