<h2>Modifier Département</h2>
<form action="index.php?action=modify_department&code=<?= $departement->getCodeD() ?>" method="POST">
    <label for="nom">Nom du département:</label>
    <input type="text" id="nom" name="Nom_du_departement" value="<?= $departement->getNom() ?>">
    <button type="submit">Enregistrer</button>
</form>
<a href="index.php?action=departement">Retour à la liste</a>
