<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            background-color: palegreen;
            /* background-color: cyan; */
        }
    </style>
</head>
<title>User List</title>
<h1>User List</h1>
<!-- <?php var_dump($users); ?> -->
<table><tr><th>User Name</th><th>Password</th><th>Role</th><th>Edit</th><th>Delete</th></tr>
<?php foreach ($users as $user) { ?>
        <tr>
            <td><?= $user['username']; ?></td>
            <td><?= $user['password']; ?></td>
            <td><?= $user['role']=== 0 ?"normal":"Admin"; ?></td>
            <td><a href="index.php?action=getUser&action=updateUser&id=<?php echo $user['id']; ?>"><button>Edit</button></a></td>
            <td><a href="index.php?action=getUser&action=deleteUser&id=<?php echo $user['id']; ?>"><button>Delete</button></a></td>
        </tr>
    <?php }?> 
    </table>
<!-- <ul>
        <li><?= $user['username']; ?></li>
        <li><?= $user['password']; ?></li>
        <li><?= $user['role']=== 0 ?"normal":"Admin"; ?></li>
        <li><a href="index.php?action=getUser&action=updateUser&id=<?php echo $user['id']; ?>"><button>Edit</button></a></li>
        <li><a href="index.php?action=getUser&action=deleteUser&id=<?php echo $user['id']; ?>"><button>Delete</button></a></li>

</ul> -->
<br>
<a href="index.php?action=addUser"><button>Add User</button></a>
