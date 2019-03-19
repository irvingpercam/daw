-- CONSULTA 1

SELECT M.descripcion, SUM(E.Cantidad) as 'Total entregado', SUM(E.Cantidad)*M.Costo as 'Importe'
FROM Entregan E, Materiales M
WHERE E.Clave = M.Clave AND E.Fecha BETWEEN '1997-01-01' AND '1997-12-31'
GROUP BY M.Descripcion, M.Costo
ORDER BY 'Importe' ASC;

-- CONSULTA 2

SELECT P.RazonSocial, COUNT(P.RFC) as 'No entregas', SUM(E.Cantidad)*M.Costo as 'Importe'
FROM Proveedores P, Entregan E, Materiales M
WHERE P.RFC = E.RFC AND M.Clave = E.Clave
GROUP BY P.RazonSocial, M.Costo
ORDER BY 'Importe' ASC;

-- CONSULTA 3

SELECT M.Clave, M.Descripcion,SUM(E.Cantidad) as 'Total entregado'
, MIN(E.Cantidad) as 'Minimo entregado', MAX(E.Cantidad) as 'Maximo entregado'
, SUM(E.Cantidad)*M.Costo as 'Importe'
FROM Materiales M, Entregan E
WHERE M.Clave = E.Clave
GROUP BY M.Clave, M.Descripcion, M.Costo
HAVING AVG(E.Cantidad) > 400

-- CONSULTA 4

SELECT P.RazonSocial, AVG(E.Cantidad) as 'Cantidad promedio entregada', M.Clave, M.Descripcion
FROM Proveedores P, Materiales M, Entregan E
WHERE P.RFC = E.RFC AND E.Clave = M.Clave
GROUP BY P.RazonSocial, M.Clave, M.Descripcion
HAVING AVG(E.Cantidad) >= 500;

-- CONSULTA 5

SELECT P.RazonSocial, AVG(E.Cantidad) as 'Cantidad promedio entregada', M.Clave, M.Descripcion
FROM Proveedores P, Materiales M, Entregan E
WHERE P.RFC = E.RFC AND E.Clave = M.Clave
GROUP BY P.RazonSocial, M.Clave, M.Descripcion
HAVING AVG(E.Cantidad) < 370 OR AVG(E.Cantidad) > 450
ORDER BY 'Cantidad promedio entregada' ASC;

-- INSERTS

INSERT INTO Materiales VALUES (5000, 'Varilla 1/2', 909); 
INSERT INTO Materiales VALUES (5010, 'Varilla 1/3', 400); 
INSERT INTO Materiales VALUES (5020, 'Varilla 1/3', 420); 
INSERT INTO Materiales VALUES (5030, 'Varilla 1/3', 666); 
INSERT INTO Materiales VALUES (5040, 'Varilla 1/3', 347); 

-- CONSULTA 6

SELECT Clave, Descripcion
FROM Materiales
WHERE Clave not in
(
SELECT Clave
FROM Entregan
)

-- CONSULTA 7

SELECT Pr.RazonSocial
FROM Proveedores Pr, Proyectos P, Entregan E
WHERE Pr.RFC = E.RFC AND E.Numero = P.Numero
 AND P.Denominacion LIKE 'Vamos México'
INTERSECT   
SELECT Pr.RazonSocial
FROM Proveedores Pr, Proyectos P, Entregan E
WHERE Pr.RFC = E.RFC AND E.Numero = P.Numero
AND P.Denominacion LIKE 'Queretaro Limpio'

-- CONSULTA 8

SELECT M.Descripcion
FROM Materiales M, Proyectos P, Entregan E
WHERE M.Clave = E.Clave AND E.Numero = P.Numero AND M.Clave not in
(
SELECT E.Clave
FROM Entregan E, Proyectos P
WHERE E.Numero = P.Numero AND P.Denominacion LIKE 'CIT Yucatán'
)

-- CONSULTA 9

SELECT P.RazonSocial, AVG(E.Cantidad)
FROM Proveedores P, Entregan E
WHERE P.RFC = E.RFC
GROUP BY P.RazonSocial
HAVING AVG(E.Cantidad) >
(SELECT P.RazonSocial, AVG(E.Cantidad)
FROM Proveedores P, Entregan E
WHERE P.RFC = E.RFC AND E.RFC LIKE 'VAGO780901'
GROUP BY P.RazonSocial)

-- CONSULTA 10

SELECT DISTINCT P.RFC, P.RazonSocial
FROM Proveedores P, Entregan E, Proyectos Pr
WHERE P.RFC=E.RFC AND Pr.Numero = E.Numero AND Pr.Denominacion LIKE 'Infonavit Durango' AND P.RFC in
(SELECT DISTINCT P.RFC, SUM(E.Cantidad)
FROM Proveedores P, Entregan E
WHERE P.RFC=E.RFC AND Fecha BETWEEN '2000-01-01' AND '2000-12-31'
GROUP BY P.RFC
HAVING SUM(E.Cantidad) >
(SELECT DISTINCT P.RFC, SUM(E.Cantidad)
FROM Proveedores P, Entregan E
WHERE P.RFC=E.RFC AND Fecha BETWEEN '2001-01-01' AND '2001-12-31'
GROUP BY P.RFC)