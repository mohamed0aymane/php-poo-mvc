
<?php
$keys = array_keys(get_object_vars($departements[0]));
?> 
<hr style="background-color: brown;height:1px">
<table>
    <thead>
    <tr>
        <th>Id</th>
        <?php foreach ($keys as $key): ?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
        <th>Code department</th>
        <th>Nom department</th>
        <th>Action</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach($departements as $index => $d): ?>
    <tr>
        <td><?= $index + 1 ?></td>
        <td><?= $d->getCodeD() ?></td>
        <td><?= $d->getNom() ?></td>
        <td class="action-buttons">
            <a href="index.php?action=view_department&code=<?= $d->getCodeD() ?>" class="view-btn">details</a>
            <a href="index.php?action=modify_department&code=<?= $d->getCodeD() ?>" class="edit-btn">modifier</a>
            <a href="index.php?action=delete_department&code=<?= $d->getCodeD() ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this department?')">supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="<?= count($keys) + 2 ?>" style="text-align: center;">
            <a href="index.php?action=add_department" class="add-button" align='center'>+ Ajouter</a>
        </td>
    </tr>
    </tbody>
</table>
