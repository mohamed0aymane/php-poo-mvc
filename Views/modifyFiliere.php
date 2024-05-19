<h2>Modifier Filière</h2>
<form action="index.php?action=modify_filiere&code=<?= $filiere->getCodeF() ?>" method="POST">
    <label for="intitule">Intitulé:</label>
    <input type="text" id="intitule" name="IntituleF" value="<?= $filiere->getIntituleF() ?>">
    <button type="submit">Enregistrer</button>
</form>
<a href="index.php?action=filiere">Retour à la liste</a>
