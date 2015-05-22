SELECT `Name`
        
FROM test.Country

WHERE 
	(Continent='South America' AND SurfaceArea<13000)
OR 
	(Continent='Asia' AND SurfaceArea<13000);