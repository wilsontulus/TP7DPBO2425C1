<?php
require_once 'class/Member.php';

$member_id = $_GET['member_id'];
if (isset($member_id)) {
    $memberObject = $member->getMemberById($member_id);
    if (isset($memberObject)) {
        $member_name = $memberObject['name'];
        $member_email = $memberObject['email'];
        $member_phone = $memberObject['phone'];
    }
}

?>

<h3>Edit Member</h3>
<form method="POST">
    <label>Member ID:</label>
    <input type="text" id="member_id" name="member_id" value="<?= $member_id ?>">
    <label>Name:</label>
    <input type="text" id="member_name" name="member_name" value="<?= $member_name ?>">
    <label>Email:</label>
    <input type="text" id="member_email" name="member_email" value="<?= $member_email ?>">
    <label>Phone:</label>
    <input type="text" id="member_phone" name="member_phone" value="<?= $member_phone ?>">
    <a href="?page=members">
        <button type="submit" name="edit_member">Submit</button>
    </a>
</form>