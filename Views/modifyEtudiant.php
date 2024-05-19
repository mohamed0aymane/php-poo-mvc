<h2>Modifier Étudiant</h2>
<form action="index.php?action=modify_etudiant&code=<?= $etudiant->getCodeE() ?>" method="POST">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="Nom" value="<?= $etudiant->getNom() ?>">
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="Prenom" value="<?= $etudiant->getPrenom() ?>">
    <label for="note">Note:</label>
    <input type="text" id="note" name="Note" value="<?= $etudiant->getNote() ?>">
    <label for="filiere">Filière:</label>
    <input type="text" id="filiere" name="Filiere" value="<?= $etudiant->getFiliere() ?>">
    <button type="submit">Enregistrer</button>
</form>
<a href="index.php?action=etudiant">Retour à la liste</a>
