<h2>Modifier Filière</h2>
<hr style="background-color: brown;height:1px">
<form action="index.php?action=modify_filiere&code=<?= $filiere->getCodeF() ?>" method="POST">
    <label for="intitule">Intitulé:</label> <br><br>
    <input type="text" id="intitule" name="IntituleF" value="<?= $filiere->getIntituleF() ?>">
    <button type="submit" style=" background-color:green; color:white;">Enregistrer</button><br><br>
</form>
<a href="index.php?action=filiere">Retour à la liste</a>
