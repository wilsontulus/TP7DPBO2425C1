<?php
require_once 'class/Book.php';

$book_id = $_GET['book_id'];
if (isset($book_id)) {
    $bookObject = $book->getBookFromId($book_id);
    if (isset($bookObject)) {
        $book_title = $bookObject['title'];
        $book_author = $bookObject['author'];
        $book_isbn = $bookObject['isbn'];
        $book_stock = $bookObject['stock'];
        $book_genre_id = $bookObject['genre_id'];

        if (isset($book_genre_id)) {
            $book_genre_obj = $book->getGenreFromId($book_genre_id);
            if (isset($book_genre_obj)) {
                $book_genre_name = $book_genre_obj['name'];
            }
        }
    }
}

?>

<h3>Edit Book</h3>
<form method="POST">
    <label>Book ID:</label>
    <input type="text" id="book_id" name="book_id" value="<?= $book_id ?>">
    <label>Title:</label>
    <input type="text" id="book_title" name="book_title" value="<?= $book_title ?>">
    <label>Author:</label>
    <input type="text" id="book_author" name="book_author" value="<?= $book_author ?>">
    <label>ISBN:</label>
    <input type="text" id="book_isbn" name="book_isbn" value="<?= $book_isbn ?>">
    <label>Stock:</label>
    <input type="text" id="book_stock" name="book_stock" value="<?= $book_stock ?>">


    <label>Genre:</label>
    <select name="book_genre_id" id="<?= $book_genre_id ?>">
        <?php foreach ($book->getAllGenres() as $g): ?>
            <option value="<?= $g['id'] ?>" <?php if ($g['id'] == $book_genre_id) { echo "selected"; } ?> ><?= $g['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <a href="?page=books">
        <button type="submit" name="edit_book">Submit</button>
    </a>
</form>