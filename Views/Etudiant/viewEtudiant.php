<h2>View Etudiant</h2>
<hr style="background-color: brown;height:1px">
<p>Code: <?= $etudiant->getCodeE() ?></p>
<p>Nom: <?= $etudiant->getNom() ?></p>
<p>Prénom: <?= $etudiant->getPrenom() ?></p>
<p>Note: <?= $etudiant->getNote() ?></p>
<p>Filière: <?= $etudiant->getFiliere() ?></p>
<a href="index.php?action=etudiant">Back to list</a>
