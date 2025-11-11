<?php
require_once 'class/Book.php';
require_once 'class/Member.php';
require_once 'class/Loan.php';

$book = new Book();
$member = new Member();
$loan = new Loan();

if (isset($_POST['borrow'])) {
    $loan->borrowBook($_POST['book_id'], $_POST['member_id']);
}

if (isset($_GET['return'])) {
    $loan->returnBook($_GET['return']);
}

if (isset($_POST['add_book'])) {
    $book->addBook($_POST['book_title'], $_POST['book_author'], $_POST['book_isbn'], $_POST['book_genre_id'], $_POST['book_stock']);
}

if (isset($_POST['add_member'])) {
    $member->addMember($_POST['member_name'], $_POST['member_email'], $_POST['member_phone']);
}

if (isset($_POST['edit_book'])) {
    $book->updateBook($_POST['book_id'], $_POST['book_title'], $_POST['book_author'], $_POST['book_isbn'], $_POST['book_genre_id'], $_POST['book_stock']);
}

if (isset($_POST['edit_member'])) {
    $member->updateMember($_POST['member_id'], $_POST['member_name'], $_POST['member_email'], $_POST['member_phone']);
}

if (isset($_GET['delete_book'])) {
    $book->deleteBook($_GET['delete_book']);
}

if (isset($_GET['delete_member'])) {
    $member->deleteMember($_GET['delete_member']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'view/header.php'; ?>
    <main>
        <h2>Welcome to Library System</h2>
        <nav>
            <a href="?page=books">Books</a> |
            <a href="?page=members">Members</a> |
            <a href="?page=loans">Loans</a>
        </nav>

        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page == 'books') include 'view/books.php';
            elseif ($page == 'members') include 'view/members.php';
            elseif ($page == 'loans') include 'view/loans.php';

            
            elseif ($page == 'books_add') include 'view/books_add.php';
            elseif ($page == 'members_add') include 'view/members_add.php';
            
            elseif ($page == 'books_edit') include 'view/books_edit.php';
            elseif ($page == 'members_edit') include 'view/members_edit.php';
        }
        ?>
    </main>
    <?php include 'view/footer.php'; ?>
</body>
</html>