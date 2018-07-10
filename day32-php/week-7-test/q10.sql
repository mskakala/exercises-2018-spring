-- # delivery
-- CREATE TABLE `delivery` (
--   `id` int(11) NOT NULL AUTO_INCREMENT,
--   `order_id` int(11) NULL DEFAULT NULL,
--   `address_id` int(11) NULL DEFAULT NULL,
--   `sent_at` datetime NULL DEFAULT NULL,
--   `delivered_at` datetime NULL DEFAULT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- your SQL here

SELECT *
FROM `delivery`
WHERE `sent_at` IS NOT NULL
    AND `delivered_at` IS NULL
ORDER BY `sent_at` ASC
LIMIT 10;