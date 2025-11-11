<?php
require_once 'config/db.php';

class Book {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    // Getter functions

    public function getAllGenres() {
        $stmt = $this->db->query("SELECT * FROM genres");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getGenreFromId($genre_id) {
        $stmt = $this->db->prepare("SELECT * FROM genres WHERE id = ?");
        $stmt->execute([$genre_id]);
        
        $genre = $stmt->fetch();
        if (isset($genre) && $genre["id"] == $genre_id) {
            return $genre;
        }
    }

    public function getAllBooks() {
        $stmt = $this->db->query("SELECT * FROM books");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBookFromId($book_id) {
        $stmt = $this->db->prepare("SELECT * FROM books WHERE id = ?");
        $stmt->execute([$book_id]);
        
        $result = $stmt->fetch();
        if (isset($result) && $result["id"] == $book_id) {
            return $result;
        }
    }

    // Adder function

    public function addBook($title, $author, $isbn, $genre_id, $stock) {
        $stmt = $this->db->prepare("INSERT INTO books (title, author, isbn, genre_id, stock) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$title, $author, $isbn, $genre_id, $stock]);
    }

    // Updater functions

    public function updateBook($id, $title, $author, $isbn, $genre_id, $stock) {
        $stmt = $this->db->prepare("UPDATE books SET title = ?, author = ?, isbn = ?, genre_id = ?, stock = ? WHERE id = ?");
        return $stmt->execute([$title, $author, $isbn, $genre_id, $stock, $id]);
    }

    public function updateStock($id, $stock) {
        $stmt = $this->db->prepare("UPDATE books SET stock = ? WHERE id = ?");
        return $stmt->execute([$stock, $id]);
    }

    // Deleter function

    public function deleteBook($id) {
        $stmt = $this->db->prepare("DELETE FROM books WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
