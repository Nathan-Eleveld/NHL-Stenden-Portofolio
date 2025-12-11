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
