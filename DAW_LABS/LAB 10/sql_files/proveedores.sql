BULK INSERT a1703171.[Proveedores]
   FROM 'e:\wwwroot\a1703171\proveedores.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )