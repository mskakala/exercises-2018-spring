SELECT *
FROM `paragraphs`
WHERE `id` = 1337;

EXPLAIN
SELECT *
FROM `paragraphs`
WHERE `id` = 1337;

SELECT *
FROM `words`
WHERE `word` = 'kissed';

EXPLAIN
SELECT *
FROM `words`
WHERE `word` = 'kissed';

EXPLAIN
SELECT *
FROM `paragraphs`
WHERE `text` LIKE '%Edmond Dantès%';
-- 41


SELECT *,
    MATCH (`text`) AGAINST ('Edmond Dantès')
FROM `paragraphs`
WHERE MATCH (`text`) AGAINST ('Edmond Dantès');
-- 788

SELECT *,
    MATCH (`text`) AGAINST ('Edmond Dantès')
FROM `paragraphs`
WHERE MATCH (`text`) AGAINST ('"Edmond Dantès"');
-- 41

SELECT *,
    MATCH (`text`) AGAINST ('Edmond Dantès')
FROM `paragraphs`
WHERE MATCH (`text`) AGAINST ('+Edmond +Dantès' IN BOOLEAN MODE);
-- 90




