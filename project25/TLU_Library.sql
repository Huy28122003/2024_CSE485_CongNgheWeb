CREATE TABLE Books (
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255),
	author VARCHAR(250),
	DESCRIPTION TEXT,
	genre VARCHAR(50)
);
CREATE TABLE Authors (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(255) NOT NULL,
 biography TEXT
);
CREATE TABLE Books_Authors (
 book_id INT NOT NULL,
 author_id INT NOT NULL,
 PRIMARY KEY (book_id, author_id),
 FOREIGN KEY (book_id) REFERENCES Books(id),
 FOREIGN KEY (author_id) REFERENCES Authors(id)
);
INSERT INTO Books (title, author, description, genre) VALUES
("The Lord of the Rings", "J.R.R. Tolkien", "An epic fantasy adventure...",
"Fantasy"),
("Pride and Prejudice", "Jane Austen", "A classic novel of love and society...",
"Romance"),
("The Hitchhiker's Guide to the Galaxy", "Douglas Adams", "A humorous science
fiction comedy...", "Science Fiction");
INSERT INTO Authors (name, biography) VALUES
("J.R.R. Tolkien", "English writer and philologist..."),
("Jane Austen", "English novelist known for social commentary..."),
("Douglas Adams", "English writer, humorist, and dramatist...");
INSERT INTO Books_Authors (book_id, author_id) VALUES
(1, 1),
(2, 2),
(3, 3);

SELECT Books.title, Authors.name
FROM Books JOIN Books_Authors ON Books.id = Books_Authors.book_id
JOIN Authors ON Books_Authors.author_id = Authors.id;

SELECT * FROM Books WHERE author = "J.R.R. Tolkien";

SELECT * FROM Books WHERE genre = "Science Fiction";

SELECT Authors.name, COUNT(*) AS book_count
FROM Books_Authors JOIN Authors ON Books_Authors.author_id = Authors.id
GROUP BY Authors.id;

SELECT * FROM Books WHERE title LIKE "%Lord of the Rings%";
SELECT * FROM Books
WHERE title LIKE '%keyword%'
OR author LIKE '%keyword%'
OR genre LIKE '%keyword%';

SELECT * FROM Books
WHERE YEAR(publication_date) >= 2020 AND YEAR(publication_date) <= 2023;

SELECT Books.title, Authors.name, Authors.biography
FROM Books JOIN Books_Authors ON Books.id = Books_Authors.book_id
JOIN Authors ON Books_Authors.author_id = Authors.id;

SELECT * SELECT
genre, COUNT(*) AS book_count
FROM Books
GROUP BY genre;

SELECT Books.title, AVG(Reviews.rating) AS avg_rating, COUNT(Reviews.rating) AS
rating_count
FROM Books LEFT JOIN Reviews ON Books.id = Reviews.book_id
GROUP BY Books.id;

SELECT * FROM Books
WHERE page_count > (SELECT AVG(page_count) FROM Books);

SELECT * FROM Books
ORDER BY publication_date DESC;

SELECT * FROM Books
LIMIT 10 OFFSET 20; // Retrieve 10 books starting from the 21st record

SELECT * FROM Books
WHERE genre = "Science Fiction" AND publication_date >= '2020-01-01';


SELECT title, author,
CASE WHEN page_count > 500 THEN 'Long'
 WHEN page_count <= 200 THEN 'Short'
 ELSE 'Medium' END AS length_category
FROM Books;