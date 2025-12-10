-- 1.1
INSERT INTO `movies`(`id`, `title`, `year`) VALUES 
('80684','Star Wars: Episode V - The Empire Strikes Back','1980'),
('86190','Star Wars: Episode VI - Return of the Jedi','1983'),
('120915','Star Wars: Episode I - The Phantom Menace','1999'),
('121765','Star Wars: Episode II - Attack of the Clones','2002'),
('121766','Star Wars: Episode III - Revenge of the Sith','2005')

-- 1.2
INSERT INTO `people`(`id`, `name`, `birth`) VALUES 
('191','Ewan Gordon McGregor','1971'),
('204','Natalie Portman','1981'),
('159789','Hayden Christensen','1981'),
('184','George Lucas','1944')

-- 1.3
INSERT INTO `stars`(`movie_id`, `person_id`) 
VALUES ('121766','168'), ('121766','184'), ('121766','191')

-- 1.4
