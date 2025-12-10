-- 1.1
SELECT name
FROM songs

-- 1.2
SELECT name
FROM songs
ORDER BY tempo ASC

-- 1.3
SELECT name
FROM songs
ORDER BY duration_ms DESC
LIMIT 5

-- 1.4
SELECT name
FROM songs
WHERE danceability > 0.75 AND energy > 0.75 AND valence > 0.75

-- 1.5
SELECT AVG(energy)
FROM songs

-- 1.6
SELECT name
FROM songs
WHERE name LIKE '%feat.%'

-- 2.1
SELECT title
FROM movies
WHERE year = 2014

-- 2.2
SELECT birth
FROM people
WHERE name = 'Emma Stone'

-- 2.3
SELECT title
FROM movies
WHERE year >= 2018

-- 2.4
SELECT COUNT(*)
FROM ratings
WHERE rating = 8.4