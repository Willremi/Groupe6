SELECT prod.name AS Nom, 
       DATE_FORMAT(prod.created, '%Y') AS annéeProduit, 
       prod.price AS Prix
FROM products AS prod