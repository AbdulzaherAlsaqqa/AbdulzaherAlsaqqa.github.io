<title>User List</title>
<h1>User List</h1>
<!-- <?php var_dump($users); ?> -->
<ul>
    <?php foreach ($users as $user) { ?>
        <li><?= $user['username']; ?></li>
        <li><?= $user['password']; ?></li>
        <li><?= $user['role']=== 0 ?"normal":"Admin"; ?></li>
        <li><a href="index.php?action=getUser&action=updateUser&id=<?php echo $user['id']; ?>"><button>Edit</button></a></li>
        <li><a href="index.php?action=getUser&action=deleteUser&id=<?php echo $user['id']; ?>"><button>Delete</button></a></li>
    <?php } ?>
</ul>
<br>
<a href="index.php?action=addUser"><button>Add User</button></a>
