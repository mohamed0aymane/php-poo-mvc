<nav>
    <a href="index.php?action=index">Home</a>
    <hr style="background-color: white; height:1px;">
    <a href="index.php?action=etudiant">Etudiants</a>
    <hr style="background-color: white; height:1px;">
    <a href="index.php?action=filiere">Filières</a>
    <hr style="background-color: white; height:1px;">
    <a href="index.php?action=departement">Départements</a>
    <hr style="background-color: white; height:1px;">
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        <a href="index.php?action=logout">Logout</a>
        <hr style="background-color: white; height:1px;">
    <?php else: ?>
        <a href="index.php?action=login">Login</a>
        <hr style="background-color: white; height:1px;">
    <?php endif; ?>
</nav>
