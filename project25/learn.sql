CREATE TABLE Books (
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255),
	author VARCHAR(255),
	descriptions TEXT,
	genre VARCHAR(50)
);

CREATE TABLE Authors(
	id INT AUTO_INCREMENT PRIMARY KEY,
	namee VARCHAR(100),
	biography TEXT
);

CREATE TABLE Books_Authors(
	book_id INT NOT NULL,
	author_id INT NOT NULL,
	PRIMARY KEY (book_id,author_id),
	FOREIGN KEY (book_id) REFERENCES Books(id),
	FOREIGN KEY (author_id) REFERENCES Authors(id)
);

insert into Books (id, title, author, descriptions, genre) values (1, 'You Don''t Know Jack', 'Rosette Castrillo', 'erat curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer', 'Drama');
insert into Books (id, title, author, descriptions, genre) values (2, 'Lascars', 'Leda Coultas', 'phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie', 'Animation|Comedy');
insert into Books (id, title, author, descriptions, genre) values (3, 'Batman Begins', 'Nolly Dobbins', 'integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci', 'Action|Crime|IMAX');
insert into Books (id, title, author, descriptions, genre) values (4, 'Happy Here and Now', 'Christyna Bramelt', 'sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis', 'Drama');
insert into Books (id, title, author, descriptions, genre) values (5, 'Changing Times (Les temps qui changent)', 'Gerladina Haire', 'lobortis sapien sapien non mi integer ac neque duis bibendum morbi non', 'Drama|Romance');
insert into Books (id, title, author, descriptions, genre) values (6, 'Jean Renoir: Part One - From La Belle Époque to World War II', 'Auberon Lightollers', 'amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien', 'Documentary');
insert into Books (id, title, author, descriptions, genre) values (7, 'The New Babylon', 'Evita Cominoli', 'vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi', 'Drama');
insert into Books (id, title, author, descriptions, genre) values (8, 'Bright Victory', 'Carline Drance', 'pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue', 'Drama');
insert into Books (id, title, author, descriptions, genre) values (9, 'Popular Music (Populärmusik från Vittula)', 'Reed Beechcraft', 'quisque ut erat curabitur gravida nisi at nibh in hac', 'Comedy|Drama');
insert into Books (id, title, author, descriptions, genre) values (10, 'Coming Home (Gui lai)', 'Alasteir McMackin', 'primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra', 'Drama');
insert into Books (id, title, author, descriptions, genre) values (11, 'Sex and Breakfast', 'Anatola Calf', 'mauris ullamcorper purus sit amet nulla quisque arcu libero rutrum ac lobortis vel', 'Comedy|Drama|Romance');
insert into Books (id, title, author, descriptions, genre) values (12, 'Billy Blazes, Esq.', 'Joyan Fearn', 'faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis', 'Comedy|Western');
insert into Books (id, title, author, descriptions, genre) values (13, 'Pride and Prejudice', 'Felice Jewers', 'leo odio condimentum id luctus nec molestie sed justo pellentesque', 'Drama|Romance');
insert into Books (id, title, author, descriptions, genre) values (14, 'Icon', 'Samara Perris', 'facilisi cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque', 'Action|Adventure|Crime|Drama|Thriller');
insert into Books (id, title, author, descriptions, genre) values (15, 'The Biggest Bundle of Them All', 'Lelah Edens', 'volutpat dui maecenas tristique est et tempus semper est quam', 'Comedy|Crime');

INSERT INTO Authors (namee, biography)
VALUES
  ('Rosette Castrillo', 'A brief biography about Rosette Castrillo, the author of You Don''t Know Jack.'),
  ('Leda Coultas', 'A brief biography about Leda Coultas, the author of Lascars.'),
  ('Nolly Dobbins', 'A brief biography about Nolly Dobbins, the author of Batman Begins.'),
  ('Christyna Bramelt', 'A brief biography about Christyna Bramelt, the author of Happy Here and Now.'),
  ('Gerladina Haire', 'A brief biography about Gerladina Haire, the author of Changing Times (Les temps qui changent).'),
  ('Auberon Lightollers', 'A brief biography about Auberon Lightollers, the author of Jean Renoir: Part One - From La Belle Époque to World War II.'),
  ('Evita Cominoli', 'A brief biography about Evita Cominoli, the author of The New Babylon.'),
  ('Carline Drance', 'A brief biography about Carline Drance, the author of Bright Victory.'),
  ('Reed Beechcraft', 'A brief biography about Reed Beechcraft, the author of Popular Music (Populärmusik från Vittula).'),
  ('Alasteir McMackin', 'A brief biography about Alasteir McMackin, the author of Coming Home (Gui lai).'),
  ('Anatola Calf', 'A brief biography about Anatola Calf, the author of Sex and Breakfast.'),
  ('Joyan Fearn', 'A brief biography about Joyan Fearn, the author of Billy Blazes, Esq.'),
  ('Felice Jewers', 'A brief biography about Felice Jewers, the author of Pride and Prejudice.'),
  ('Samara Perris', 'A brief biography about Samara Perris, the author of Icon.'),
  ('Lelah Edens', 'A brief biography about Lelah Edens, the author of The Biggest Bundle of Them All.');
  
INSERT INTO books_authors (book_id,author_id) VALUES 
(1,1),
(2,2),
(3,3),
(4,4),
(5,5),
(6,6),
(7,7),
(8,8),
(9,9),
(10,10),
(11,11),
(12,12),
(13,13),
(14,14),
(15,15);

SELECT title,author FROM books;

SELECT * FROM Books WHERE author="Rosette Castrillo";

SELECT title FROM books WHERE genre="Drama";

SELECT COUNT(*) AS NUMBER_BOOKS
FROM books
WHERE author = 'Rosette Castrillo';

SELECT * FROM Books WHERE title LIKE "%Know Jack%";

	

