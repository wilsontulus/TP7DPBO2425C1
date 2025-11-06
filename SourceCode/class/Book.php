<?php
require_once 'config/db.php';

class Book {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function getGenreFromId($genre_id) {
        $stmt = $this->db->prepare("SELECT * FROM genres WHERE id = ?");
        $stmt->execute([$genre_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $genre):
            if ($genre["id"] == $genre_id) {
                return $genre;
            }
        endforeach;
    }

    public function getAllBooks() {
        $stmt = $this->db->query("SELECT * FROM books");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateStock($id, $stock) {
        $stmt = $this->db->prepare("UPDATE books SET stock = ? WHERE id = ?");
        return $stmt->execute([$stock, $id]);
    }
}
?>
