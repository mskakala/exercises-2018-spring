SELECT *
FROM `country`;

SELECT *
FROM `country`
WHERE `Population` > 20000000;

SELECT *
FROM `country`
WHERE `Population` > 20000000
ORDER BY `Population` DESC;

SELECT *
FROM `country`
WHERE `Population` > 20000000
ORDER BY `Population` DESC
LIMIT 10;

INSERT
INTO `users`
(`username`, `email`)
VALUES
('bruce', 'bruce@wayne.com')


INSERT
INTO `region`
(`name`, `slug`)
VALUES
('Eastern Europe', 'eastern-europe');

INSERT
INTO `region`
(`name`, `slug`)
VALUES
('Western Europe', 'western-europe');


INSERT
INTO `region`
(`name`, `slug`)
VALUES
('North America', 'north-america'),
('Central America', 'central-america'),
('South America', 'south-america');

UPDATE `city`
SET `Name` = 'Prague'
WHERE `ID` = 3339;

UPDATE `city`
SET `Population` = 1294513
WHERE `ID` = 3339;

UPDATE `country`
SET `HeadOfState` = 'Donald J. Trump'
WHERE `GovernmentForm` = 'US Territory';

UPDATE `country`
SET `HeadOfState` = 'Donald J. Trump',
WHERE `HeadOfState` = 'George W. Bush';

UPDATE `country`
SET `Population` = 300,
    `GNP` = 13.91
WHERE `Name` = 'United States Minor Outlying Islands';

DELETE
FROM `region`
WHERE `id` = 1
LIMIT 1;

DELETE
FROM `users`
WHERE `id` > 10;