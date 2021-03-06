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
-- Question 1
SELECT prod.name AS Nom, 
       prod.model_year AS Année, 
	prod.price AS prix, 
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

SELECT  products.name, 
        products.model_year, 
        products.price, 
        categories.nameCat, 
        brands.brand_name
FROM products
INNER JOIN categories ON products.category_id = categories.idCat
INNER JOIN brands ON products.brand_id = brands.brand_id
WHERE brands.brand_name = "trek"
AND categories.nameCat = "Electric Bikes"

-- Question 2
-- calcul prix HT, TVA 20%, prix TTC
SELECT prod.price AS PrixHT, 
       prod.price / (100 * 20) AS Montant20prcent, 
       prod.price + (prod.price / (100 * 20)) AS prixTTC
FROM products AS prod


SELECT prod.name AS Nom, 
       prod.model_year AS Année, 
	prod.price AS PrixHT, 
       prod.price / (100 * 20) AS Montant20prcent, 
       prod.price + (prod.price / (100 * 20)) AS prixTTC,   
       cat.nameCat AS typeVélo,  
       brands.brand_name AS Marque
FROM products AS prod, categories AS cat, brands
WHERE cat.idCat = 5
AND brands.brand_id = 2

-- prix ttc (deux chiffres après la virgule)
SELECT prod.name AS Nom, 
       prod.model_year AS Année, 
	prod.price AS PrixHT, 
       prod.price / (100 * 20) AS Montant20prcent, 
       ROUND(prod.price + (prod.price / (100 * 20)), 2) AS prixTTC,   
       cat.nameCat AS typeVélo,  
       brands.brand_name AS Marque
FROM products AS prod, categories AS cat, brands
WHERE cat.idCat = 5
AND brands.brand_id = 2

-- Question 3
SELECT prod.name AS Nom, 
       prod.model_year AS Année, 
	prod.price AS PrixHT
FROM products AS prod
WHERE prod.price > 500
AND prod.price < 1500

SELECT prod.name AS Nom, 
       prod.model_year AS Année, 
	prod.price AS PrixHT
FROM products AS prod
WHERE prod.price BETWEEN 500 AND 1500

-- Question 4 
SELECT prod.name AS Nom, 
       prod.model_year AS Année, 
	prod.price AS PrixHT, 
       brands.brand_name AS Marque
FROM products AS prod, brands
WHERE brands.brand_name LIKE 'H%'

SELECT  products.name,
        products.model_year,
        products.price,
        brands.brand_name
 FROM  products
 INNER JOIN brands ON products.brand_id = brands.brand_id
 WHERE brands.brand_name LIKE 'H%'

-- Question 5
SELECT prod.name AS Nom, 
       prod.model_year AS Année, 
	prod.price AS PrixHT
FROM products AS prod
WHERE prod.name LIKE '%lce%'

-- Question 6
DELETE FROM products
WHERE products.brand_id = (SELECT brands.brand_id FROM brands WHERE brands.brand_name = "Trek");

-- Question 7
DELETE FROM products
WHERE products.category_id = (SELECT categories.category_id FROM categories WHERE categories.nameCat = 'Mountain Bikes')

-- Question 8
UPDATE products
SET products.price = '1499'
WHERE products.id = 9

-- Question 9
INSERT INTO categories (categories.nameCat)
VALUES ('Roller skates')

-- Question 10
INSERT INTO products (products.name, products.brand_id, products.category_id, products.model_year, products.price)
VALUES ('roller skates cool', (SELECT brands.brand_id FROM brands WHERE brands.brand_name = 'Haro'), (SELECT categories.idCat FROM categories WHERE categories.nameCat = 'Roller skates'), '2020', 258)