<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <style>
    body {
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
}

.login-container {
  width: 300px;
  margin: 0 auto;
  margin-top: 100px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #666;
}

input[type="text"],
input[type="password"] {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
  font-size: 16px;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 3px;
  font-size: 16px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0069d9;
}
.login-options {
  display: flex;
  justify-content: space-between;
  margin-top: 10px;
}

.login-options a {
  color: #555;
  text-decoration: none;
}

.login-options a:hover {
  color: #333;
  text-decoration: underline;
}

</style>
  <div class="login-container">
    <form>
      <h2>Admin Login</h2>
      <div class="form-group">
        <input type="text" id="username" name="username" placeholder="Username">
      </div>
      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Password">
      </div>
      <button type="submit">Log in</button>
      <div class="login-options">
        <a href="Restore_password.php">Lost your password?</a>
        <a href="#">Update security</a>
      </div>
    </form>
  </div>


</body>
</html>
<?php

$valid_passwords = array ("mario" => "carbonell");
  $valid_users = array_keys($valid_passwords);

  $user = $_SERVER['PHP_AUTH_USER'];
  $pass = $_SERVER['PHP_AUTO_PW'];

  $validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

  if (!$validated) {
    header('WWW-Authenticate: Basic realm = "My realm"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Not authorized");
  }

  echo "<p>Welcome $user.</p>";
  echo "<p>Congrats, you are in the system.</p>";

  ?>