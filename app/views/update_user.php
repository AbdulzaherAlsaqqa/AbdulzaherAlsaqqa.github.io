<?php
$user_id = $_GET['id'];
// $user = new UserModel($db); // إنشاء كائن من الفئة Post
$userData = $this->model->getUser($user_id);
var_dump($userData);
?>

<title>Update User</title>
<h2>Update User</h2>
<form action="index.php?action=updateUser&&id=<?php echo $user_id;?>" method="post">
<label for="username">Username:</label>
<input type="text" name="username" value=<?php echo $userData['username'];?>>
<br>
<label for="password">Password:</label>
<input type="password" name="password" value="<?php echo $userData['password'];?>">
<br>
<label for="type">Account Type:</label>
<select id="type" name="role" required>
  <?php if(($userData['role'])==0){ ?>
  <option value="normal" selected>Normal</option>
  <option value="admin" >Admin</option>
  <?php } else { ?>
  <option value="normal" >Normal</option>
  <option value="admin" selected>Admin</option>
  <?php } ?>
</select>
<br>
<button type="submit">Update User</button>
</form>
