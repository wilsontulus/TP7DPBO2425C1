<h3>Member List</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    <?php foreach ($member->getAllMembers() as $m): ?>
    <tr>
        <td><?= $m['id'] ?></td>
        <td><?= $m['name'] ?></td>
        <td><?= $m['email'] ?></td>
        <td><?= $m['phone'] ?></td>
        
        <td>
            <a href="?page=members_edit&member_id=<?= $m['id'] ?>">Edit</a>
            <a href="?page=members&delete_member=<?= $m['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
    
<a href="?page=members_add">
    <button>Add Member</button>
</a>