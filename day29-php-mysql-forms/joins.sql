SELECT *
FROM `city`
LEFT JOIN `country`
    ON `city`.`CountryCode` = `country`.`Code`
WHERE `city`.`Population` > 5000000;

SELECT `city`.*,
    `country`.`Name`, 
    `country`.`SurfaceArea`
FROM `city`
LEFT JOIN `country`
    ON `city`.`CountryCode` = `country`.`Code`
WHERE `city`.`Population` > 5000000;


SELECT `countrylanguage`.*,
    `country`.`Name`
FROM `countrylanguage`
LEFT JOIN `country`
    ON `countrylanguage`.`CountryCode` = `country`.`Code`
WHERE `countrylanguage`.`Language` = 'English';