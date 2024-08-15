<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css" />
</head>
<style>
    /* style.css */
body {
    font-family: Arial, sans-serif;
    background: url('images/images2.jpg.jpg') no-repeat center center fixed; /* Background image */
    background-size: cover; /* Ensures the image covers the entire background */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: left;
}

h1 {
    color: #333;
    margin-bottom: 20px;
}

.login-form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

button {
    background-color: #ff7e5f;
    color: #fff;
    border: none;
    padding: 15px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #feb47b;
}

</style>
<div class="login-container">
      <center> <h2>Login</h2></center> 
        <form action="index.html" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="off">
            </div>
          <center> <button type="submit" class="login-button">Login</button> </center> 
        </form>
    </div>
</body>
</html>
