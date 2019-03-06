BULK INSERT a1703171.[Proyectos]
   FROM 'e:\wwwroot\a1703171\proyectos.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )