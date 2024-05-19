<h2>Ajouter Étudiant</h2>
<form action="index.php?action=add_etudiant" method="POST">
    <label for="codeE">Code:</label>
    <input type="text" id="codeE" name="CodeE">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="Nom">
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="Prenom">
    <label for="note">Note:</label>
    <input type="text" id="note" name="Note">
    <label for="filiere">Filière:</label>
    <input type="text" id="filiere" name="Filiere">
    <button type="submit">Ajouter</button>
</form>
<a href="index.php?action=etudiant">Retour à la liste</a>
