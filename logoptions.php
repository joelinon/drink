<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Options</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Login or Register</h1>
    </header>
    <h2>Login</h2>
    <form action="_login.php" method="POST">
        <label for="user">Username</label>
        <input type="text" name="user" id="user" required>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" required>
        <input type="submit" name="btn_login" value="Login">
    </form>
    
    <h2>Register</h2>
    <p><a class ="addDrink"href="register.php">If you don't have an account, register here</a>.</p>
</body>
</html>
<style>
    body{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1em;
    }
    header{
        margin-top: 2em;
    }
    h2{
        margin-top: 2em;
    }
 </style>