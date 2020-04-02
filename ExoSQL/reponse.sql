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