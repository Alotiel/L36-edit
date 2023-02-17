<!DOCTYPE html>
<html>
  <head>
    <title>Restore password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <style>
        * {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #f7f7f7;
}

.reset-password-page {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.form {
  background-color: #fff;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}

form.reset-password-form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

h2 {
  margin: 0 0 10px;
  font-size: 28px;
  color: #333;
}

p {
  margin: 0 0 10px;
  font-size: 16px;
  color: #333;
}

input[type="email"] {
  width: 100%;
  margin-bottom: 20px;
  padding: 10px;
  border: none;
  border-radius: 5px;
}

button {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #0066cc;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

button:hover {
  background-color: #0059b3;
}
</style>
    <div class="reset-password-page">
      <div class="form">
        <h2>Restore password</h2>
        <form class="reset-password-form">
          <p>Create a new one password</p>
          <input type="email" placeholder="Adresa de e-mail"/>
          <button>Confirm</button>
        </form>
      </div>
    </div>
  </body>
</html>