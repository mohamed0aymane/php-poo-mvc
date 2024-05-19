
<h2>Ajouter Étudiant</h2>
<hr style="background-color: brown;height:1px">
<form action="index.php?action=add_etudiant" method="POST">
    <label for="codeE">Code:</label><br>
    <input type="text" id="codeE" name="CodeE"><br><br>
    <label for="nom">Nom:</label><br>
    <input type="text" id="nom" name="Nom"><br><br>
    <label for="prenom">Prénom:</label><br>
    <input type="text" id="prenom" name="Prenom"><br><br>
    <label for="note">Note:</label><br>
    <input type="text" id="note" name="Note"><br><br>
    <label for="filiere">Filière:</label><br>
    <input type="text" id="filiere" name="Filiere"><br><br>
    <button type="submit" style="background-color: green; color:white;">Ajouter</button><br><br>
</form>
<a href="index.php?action=etudiant">Retour à la liste</a>
