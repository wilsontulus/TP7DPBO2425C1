<?php
require_once 'class/Book.php';

?>

<h3>Add Book</h3>
<form method="POST">
    <label>Title:</label>
    <input type="text" id="book_title" name="book_title">
    <label>Author:</label>
    <input type="text" id="book_author" name="book_author">
    <label>ISBN:</label>
    <input type="text" id="book_isbn" name="book_isbn">
    <label>Stock:</label>
    <input type="text" id="book_stock" name="book_stock">


    <label>Genre:</label>
    <select name="book_genre_id" id="<?= $book_genre_id ?>">
        <?php foreach ($book->getAllGenres() as $g): ?>
            <option value="<?= $g['id'] ?>" ><?= $g['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <a href="?page=books">
        <button type="submit" name="add_book">Submit</button>
    </a>
</form>