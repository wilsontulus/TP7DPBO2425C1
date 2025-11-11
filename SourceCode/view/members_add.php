<?php
require_once 'class/Member.php';

?>

<h3>Add Member</h3>
<form method="POST">
    <label>Name:</label>
    <input type="text" id="member_name" name="member_name">
    <label>Email:</label>
    <input type="text" id="member_email" name="member_email">
    <label>Phone Number:</label>
    <input type="text" id="member_phone" name="member_phone">

    <a href="?page=members">
        <button type="submit" name="add_member">Submit</button>
    </a>
</form>