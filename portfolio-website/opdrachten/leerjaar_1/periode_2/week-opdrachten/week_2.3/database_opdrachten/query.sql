-- 1.1
SELECT name
FROM songs
WHERE artist_id IN (
	SELECT id
    FROM artists
    WHERE name LIKE "Post Malone"
)

-- 1.2
SELECT AVG(energy)
FROM songs
WHERE artist_id IN (
	SELECT id
    FROM artists
    WHERE name LIKE "Drake"
);

-- 2.1
SELECT title, year
FROM movies
WHERE title LIKE "%Harry Potter%"
ORDER BY year ASC;

-- 2.2
SELECT AVG(rating)
FROM ratings
WHERE movie_id IN (
	SELECT movie_id
    FROM movies
    WHERE year = 2012
);

-- 2.3
SELECT title, rating
FROM ratings, movies
where ratings.movie_id = movies.id
AND movies.year = 2019
ORDER BY rating DESC, title;

-- 2.4
SELECT name 
FROM people
WHERE id IN(
	SELECT person_id
    FROM stars
    WHERE movie_id = 145487
);

-- 2.5
SELECT name
FROM people
WHERE id IN(
    SELECT person_id
    FROM stars
    WHERE movie_id IN(
        	SELECT id
        	FROM movies
        	WHERE year = 2004
        )
)
ORDER BY birth ASC

-- 2.6
SELECT name
FROM people
WHERE id IN(
    SELECT person_id
    FROM directors
    WHERE movie_id IN(
    	SELECT movie_id
        FROM ratings
        WHERE rating >= 8.0
    )
);

-- 2.7
