CREATE DATABASE library_db;
USE library_db;

CREATE TABLE genres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(100) NOT NULL,
    isbn VARCHAR(13) UNIQUE,
    genre_id INT,
    stock INT NOT NULL DEFAULT 0,
    FOREIGN KEY (genre_id) REFERENCES genres(id)
);

CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    phone VARCHAR(15)
);

CREATE TABLE loans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT NOT NULL,
    member_id INT NOT NULL,
    loan_date DATE NOT NULL,
    return_date DATE,
    FOREIGN KEY (book_id) REFERENCES books(id),
    FOREIGN KEY (member_id) REFERENCES members(id)
);

INSERT INTO genres (name) VALUES
('Fiksi'),
('Non-fiksi'),
('Sejarah'),
('Fabel'),
('Filosofi'),
('Pengembangan Diri'),
('Komedi'),
('Misteri'),
('Aksi / Petualangan'),
('Horror'),
('Spiritual / Agama'),
('Antropologi');

INSERT INTO books (title, author, isbn, genre_id, stock) VALUES
('Sebuah Seni untuk Bersikap Bodo Amat', 'Mark Manson', '9786020633071', 6, 5),
('Atomic Habits', 'James Clear', '9780735211292', 6, 3),
('The Power of Habit', 'Charles Duhigg', '9780812981605', 5, 4),
('7 Habits of Highly Effective People', 'Stephen R. Covey', '9780743269513', 6, 2);

INSERT INTO members (name, email, phone) VALUES
('Putra Donatur Kampus', 'putradonatur@umail.com', '08123456789'),
('Nanang Resing Acip', 'nanangresing@umail.com', '08234567890');
