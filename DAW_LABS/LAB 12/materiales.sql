BULK INSERT a1703171.[Materiales]
   FROM 'e:\wwwroot\a1703171\materiales.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )