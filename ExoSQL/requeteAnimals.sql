
-- Select avec alias
SELECT jv.nom AS NOM, jv.ID, jv.prix AS PrixHT, jv.commentaires
FROM jeux_video AS jv


SELECT jv.ID, jv.nom AS Nom, jv.nbre_joueurs_max AS NbJourMax
FROM jeux_video AS jv
WHERE jv.nbre_joueurs_max < 8
AND jv.nbre_joueurs_max > 2
AND jv.nom LIKE '%Dead%'


SELECT * -- ad.idadresse , ad.adresse, ad.code_postal, prop.nom_proprio AS Nom, prop.prenom_proprio AS Prénom
FROM adresse AS ad, proprios AS prop, animals AS anim, race AS r
WHERE ad.idadresse = prop.adresse_idadresse
AND anim.Proprios_idProprios = prop.idProprios
AND anim.race_idrace = r.idrace


SELECT 	prop.nom_proprio AS Nom, 
        prop.prenom_proprio AS Prénom,
        ad.code_postal AS CP,
        ad.ville,
        anim.nom_animal AS NomAnimal,
        anim.date_naissance,
        r.nom_race
FROM adresse AS ad, proprios AS prop, animals AS anim, race AS r
WHERE ad.idadresse = prop.adresse_idadresse
AND anim.Proprios_idProprios = prop.idProprios
AND anim.race_idrace = r.idrace


SELECT 	prop.nom_proprio AS Nom, 
        prop.prenom_proprio AS Prénom,
        ad.code_postal AS CP,
        ad.ville,
        anim.nom_animal AS NomAnimal,
        anim.date_naissance,
        r.nom_race
        
FROM adresse AS ad, proprios AS prop, animals AS anim, race AS r
WHERE ad.idadresse = prop.adresse_idadresse
AND anim.Proprios_idProprios = prop.idProprios
AND anim.race_idrace = r.idrace
AND r.nom_race = "Croisé"



SELECT 	prop.nom_proprio AS Nom, 
        prop.prenom_proprio AS Prénom,
        ad.code_postal AS CP,
        ad.ville,
        anim.nom_animal AS NomAnimal,
        DATE_FORMAT(anim.date_naissance, "%Y") AS Année,
        r.nom_race
        
FROM adresse AS ad, proprios AS prop, animals AS anim, race AS r
WHERE ad.idadresse = prop.adresse_idadresse
AND anim.Proprios_idProprios = prop.idProprios
AND anim.race_idrace = r.idrace





SELECT 	prop.nom_proprio AS Nom, 
        prop.prenom_proprio AS Prénom,
        ad.code_postal AS CP,
        ad.ville,
        anim.nom_animal AS NomAnimal,
        DATE_FORMAT(anim.date_naissance, "%Y") AS Année,
        r.nom_race
        
FROM adresse AS ad, proprios AS prop, animals AS anim, race AS r
WHERE ad.idadresse = prop.adresse_idadresse
AND anim.Proprios_idProprios = prop.idProprios
AND anim.race_idrace = r.idrace
AND anim.date_naissance > NOW()



SELECT 	prop.nom_proprio AS Nom, 
        prop.prenom_proprio AS Prénom,
        ad.code_postal AS CP,
        ad.ville,
        anim.nom_animal AS NomAnimal,
        DATE_FORMAT(anim.date_naissance, "%Y") AS Année,
        r.nom_race

FROM adresse AS ad, proprios AS prop, animals AS anim, race AS r
WHERE ad.idadresse = prop.adresse_idadresse
AND anim.Proprios_idProprios = prop.idProprios
AND anim.race_idrace = r.idrace
AND DATE_FORMAT(NOW(), 'YYYY') < 2020



SELECT 	prop.nom_proprio AS Nom, 
        prop.prenom_proprio AS Prénom,
        ad.code_postal AS CP,
        ad.ville,
        anim.nom_animal AS NomAnimal,
        DATE_FORMAT(anim.date_naissance, "%Y") AS Annee,
        r.nom_race,
        TIMESTAMPDIFF(year, anim.date_naissance, NOW()) AS Diff
FROM adresse AS ad, proprios AS prop, animals AS anim, race AS r
WHERE ad.idadresse = prop.adresse_idadresse
AND anim.Proprios_idProprios = prop.idProprios
AND anim.race_idrace = r.idrace
AND DATE_FORMAT(anim.date_naissance, '%Y') > NOW()



SELECT 	prop.nom_proprio AS Nom, 
        prop.prenom_proprio AS Prénom,
        ad.code_postal AS CP,
        ad.ville,
        anim.nom_animal AS NomAnimal,
        DATE_FORMAT(anim.date_naissance, "%Y") AS Annee,
        r.nom_race,
        TIMESTAMPDIFF(year, anim.date_naissance, NOW()) AS Diff
FROM adresse AS ad, proprios AS prop, animals AS anim, race AS r
WHERE ad.idadresse = prop.adresse_idadresse
AND anim.Proprios_idProprios = prop.idProprios
AND anim.race_idrace = r.idrace
AND DATE_FORMAT(anim.date_naissance, '%Y') < "2001"




SELECT 	prop.nom_proprio AS Nom, 
        prop.prenom_proprio AS Prénom,
        ad.code_postal AS CP,
        ad.ville,
        anim.nom_animal AS NomAnimal,
        DATE_FORMAT(anim.date_naissance, "%Y") AS Annee,
        r.nom_race,
        TIMESTAMPDIFF(year, anim.date_naissance, NOW()) AS Diff
FROM adresse AS ad, proprios AS prop, animals AS anim, race AS r
WHERE ad.idadresse = prop.adresse_idadresse
AND anim.Proprios_idProprios = prop.idProprios
AND anim.race_idrace = r.idrace



SELECT  proprios.nom_proprio AS Nom, 
        proprios.prenom_proprio AS Prénom,
        adresse.code_postal AS CP,
        adresse.ville,
        animals.nom_animal AS NomAnimal,
        DATE_FORMAT(animals.date_naissance, "%Y") AS Annee,
        race.nom_race,
        TIMESTAMPDIFF(year, animals.date_naissance, NOW()) AS Diff
FROM adresse
INNER JOIN proprios ON proprios.adresse_idadresse = adresse.idadresse
INNER JOIN animals ON animals.Proprios_idProprios = proprios.idProprios
INNER JOIN race ON race.idrace = animals.race_idrace



SELECT 	
		proprios.nom_proprio AS Nom, 
        proprios.prenom_proprio AS Prénom,
        adresse.code_postal AS CP,
        adresse.ville
FROM adresse 
RIGHT JOIN proprios ON proprios.adresse_idadresse = adresse.idadresse  


