-- Cours
-- INSERT INTO table (nom_colonne_1, nom_colonne_2, ...
-- VALUES ('valeur 1', 'valeur 2', ...)

INSERT INTO products (products.name, products.brand_id, products.category_id, products.model_year, products.price)
VALUES ('Iphone 11', (SELECT brands.brand_id FROM brands WHERE brands.brand_name = 'Iphone'), (SELECT categories.idCat FROM categories WHERE categories.nameCat = 'Appel'), '2021', 1234)


-- UPDATE table
-- SET colonne_1 = 'valeur 1', colonne_2 = 'valeur 2', colonne_3 = 'valeur 3'
-- WHERE condition

UPDATE brands
SET brands.brand_name = 'IPHONE'
WHERE brands.brand_id = 10

UPDATE products
SET products.name = 'IPHONE', products.model_year = '2020', products.price = '2121'
WHERE products.id = 15

-- DELETE FROM table
-- WHERE condition

DELETE FROM products
WHERE products.id = 15