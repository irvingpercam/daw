SET DATEFORMAT dmy
BULK INSERT a1703171.[Entregan]
   FROM 'e:\wwwroot\a1703171\entregan.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )