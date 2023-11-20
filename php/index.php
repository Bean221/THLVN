<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="container">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <input type="text" name="loginUsername" placeholder="Username" required>
        <input type="password" name="loginPassword" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <hr>

    <h2>Register</h2>
    <form action="register.php" method="post">
        <input type="text" name="registerUsername" placeholder="Username" required>
        <input type="password" name="registerPassword" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>

    <hr>

    <h2>Change Password</h2>
    <form action="changePassword.php" method="post">
        <input type="text" name="changePasswordUsername" placeholder="Username" required>
        <input type="password" name="oldPassword" placeholder="Old Password" required>
        <input type="password" name="newPassword" placeholder="New Password" required>
        <button type="submit">Change Password</button>
    </form>
</div>

</body>
</html>