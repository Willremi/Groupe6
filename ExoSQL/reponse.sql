-- requêtes SQL étape par étape du products.sql du github

SELECT prod.name AS Nom, 
       DATE_FORMAT(prod.created, '%Y') AS annéeProduit, 
       prod.price AS Prix
FROM products AS prod

SELECT prod.name AS Nom, 
       DATE_FORMAT(prod.created, '%Y') AS annéeProduit, 
       prod.price AS Prix
FROM products AS prod
WHERE prod.category_id = 1

SELECT prod.name AS Nom, 
       DATE_FORMAT(prod.created, '%Y') AS annéeProduit, 
       prod.price AS Prix, 
       cat.name, 
       cat.id
FROM products AS prod, categories AS cat
WHERE cat.id = 1

SELECT prod.name AS Nom, 
       DATE_FORMAT(prod.created, '%Y') AS annéeProduit, 
       prod.price AS Prix, 
       cat.name, 
       cat.id
FROM products AS prod, categories AS cat
WHERE cat.id = 2
AND prod.name LIKE '%smart%'


-- requêtes SQL de l'exercice TravailSurSQL.docx
SELECT prod.name AS Nom, 
       prod.model_year AS Année, 
	   prod.price, 
       cat.idCat, 
       cat.nameCat AS typeVélo, 
       brands.brand_id, 
       brands.brand_name AS Marque
FROM products AS prod, categories AS cat, brands
WHERE cat.nameCat = 'Electric Bikes'
AND brands.brand_name = 'Haro'

SELECT prod.name AS Nom, 
       prod.model_year AS Année, 
	   prod.price,  
       cat.nameCat AS typeVélo,  
       brands.brand_name AS Marque
FROM products AS prod, categories AS cat, brands
WHERE cat.idCat = 5
AND brands.brand_id = 2