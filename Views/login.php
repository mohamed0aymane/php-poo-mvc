<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (isset($error) && $error): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
    <form action="index.php?action=login" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required> <br><br>
        <label for="password">Password :</label>
        <input type="password" id="password" name="password" required> <br><br>
        <button type="submit" style="background-color: green; color:white">Login</button>
    </form>
</body>
</html>
