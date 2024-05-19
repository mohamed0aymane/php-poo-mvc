<h2>Modifier Étudiant</h2>
<form action="index.php?action=modify_etudiant&code=<?= $etudiant->getCodeE() ?>" method="POST">
    <label for="nom">Nom:  </label><br>
    <input type="text" id="nom" name="Nom" value="<?= $etudiant->getNom() ?>"><br><br>
    <label for="prenom">Prénom: </label><br>
    <input type="text" id="prenom" name="Prenom" value="<?= $etudiant->getPrenom() ?>"><br><br>
    <label for="note">Note:</label><br>
    <input type="text" id="note" name="Note" value="<?= $etudiant->getNote() ?>"><br><br>
    <label for="filiere">Filière:</label><br>
    <input type="text" id="filiere" name="Filiere" value="<?= $etudiant->getFiliere() ?>"><br><br>
    <button type="submit" style=" background-color:green; color:white;">Enregistrer</button><br><br>
</form>
<a href="index.php?action=etudiant">Retour à la liste</a>
