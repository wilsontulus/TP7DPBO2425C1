<h3>Book List</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
        <th>Genre</th>
        <th>Stock</th>
    </tr>
    <?php foreach ($book->getAllBooks() as $b):
        $b_genre = $book->getGenreFromId($b['genre_id']);
        $b_genre_name = "Tidak diketahui";
        if (isset($b_genre)) {
                $b_genre_name = $b_genre['name'];
        }
    ?>
    <tr>
        <td><?= $b['id'] ?></td>
        <td><?= $b['title'] ?></td>
        <td><?= $b['author'] ?></td>
        <td><?= $b['isbn'] ?></td>
        <td><?= $b_genre_name ?></td>
        <td><?= $b['stock'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
