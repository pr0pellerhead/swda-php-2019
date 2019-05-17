SELECT * FROM school.students;

INSERT INTO students (full_name, city) 
VALUES 
('Ned Stark', 1), 
('Cercei Lanister', 2), 
('Tyrion Lanister', 2);

DELETE FROM students WHERE id = 5;

DELETE FROM students WHERE id = 6 OR id = 7;

UPDATE students SET full_name = 'Tyrion Lannister' WHERE id = 4;

UPDATE students SET full_name = 'Cersei Lannister', city = 3 WHERE id = 3;

SELECT * FROM students WHERE city = 1;

SELECT full_name, id FROM students WHERE city = 3;

SELECT * FROM cities;

INSERT INTO cities (city) VALUES ('Winterfell'), ('Kings Landing'), ('Castely Rock');

SELECT students.full_name, cities.city FROM students
JOIN cities ON students.city = cities.id;

SELECT s.id, s.full_name, c.city FROM students s
JOIN cities c ON s.city = c.id;