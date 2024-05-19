<?php
$keys = array_keys(get_object_vars($filieres[0]));
?>

<table>
    <tr>
        <th>#</th>
        <?php foreach ($keys as $key): ?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
        <th>Code filier</th>
        <th>Intitule filier</th>
        <th>Action</th>
    </tr>
    <?php foreach($filieres as $index => $f): ?>
    <tr>
        <td><?= $index + 1 ?></td>
        <td><?= $f->getCodeF() ?></td>
        <td><?= $f->getIntituleF() ?></td>
        <td class="action-buttons">
            <a href="index.php?action=view_filiere&code=<?= $f->getCodeF() ?>" class="view-btn">details</a>
            <a href="index.php?action=modify_filiere&code=<?= $f->getCodeF() ?>" class="edit-btn">modifier</a>
            <a href="index.php?action=delete_filiere&code=<?= $f->getCodeF() ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this filière?')">supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="<?= count($keys) + 2 ?>" style="text-align: center;">
            <a href="index.php?action=add_filiere" class="add-button">+ Ajouter</a>
        </td>
    </tr>
</table>
