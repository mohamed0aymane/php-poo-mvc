<?php
$keys = array_keys(get_object_vars($etudiants[0]));
?>
    <hr style="background-color: brown;height:1px">
<table>
    <tr>
        <th>Id</th>
        <?php foreach ($keys as $key): ?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
        <th>Code d'etudiant</th>
        <th>Nom d'etudiant</th>
        <th>Prenom d'etudiant</th>
        <th>Note d'etudiant</th>
        <th>Filiere d'etudiant</th>
        <th>Action</th>
    </tr>
    <?php foreach($etudiants as $index => $e): ?>
    <tr>
        <td><?= $index + 1 ?></td>
        <td><?= $e->getCodeE() ?></td>
        <td><?= $e->getNom() ?></td>
        <td><?= $e->getPrenom() ?></td>
        <td><?= $e->getNote() ?></td>
        <td><?= $e->getFiliere() ?></td>
        <td class="action-buttons">
            <a href="index.php?action=view_etudiant&code=<?= $e->getCodeE() ?>" class="view-btn">details</a>
            <a href="index.php?action=modify_etudiant&code=<?= $e->getCodeE() ?>" class="edit-btn">modifier</a>
            <a href="index.php?action=delete_etudiant&code=<?= $e->getCodeE() ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this student?')">supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="<?= count($keys) + 2 ?>" style="text-align: center;">
            <a href="index.php?action=add_etudiant" class="add-button">+ Ajouter</a>
        </td>
    </tr>
</table>
