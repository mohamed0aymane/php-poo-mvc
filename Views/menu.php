<nav>
    <a href="index.php?action=index">Home</a>
    <a href="index.php?action=etudiant">Etudiants</a>
    <a href="index.php?action=filiere">Filières</a>
    <a href="index.php?action=departement">Départements</a>
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        <a href="index.php?action=logout">Logout</a>
    <?php else: ?>
        <a href="index.php?action=login">Login</a>
    <?php endif; ?>
</nav>
