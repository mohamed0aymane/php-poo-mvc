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
        <input type="text" id="username" name="username" required> -admin- 
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required> -admin- 
        <button type="submit">Login</button>
    </form>
</body>
</html>