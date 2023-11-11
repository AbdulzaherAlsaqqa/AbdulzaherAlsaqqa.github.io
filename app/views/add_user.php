<title>Add User</title>
<h2>Add User</h2>
<form action="index.php?action=addUser" method="post">
<label for="username">Username:</label>
<input type="text" name="username" placeholder="enter username" required>
<br>
<br>
<label for="password">Password:</label>
<input type="password" name="password" placeholder="enter your password" required>
<br>
<br>
<label for="type">Account Type:</label>
<select id="type" name="role" required>
  <option value="normal">Normal</option>
  <option value="admin">Admin</option>
</select>
<br>
<br>
<button type="submit">Add User</button>
</form>
