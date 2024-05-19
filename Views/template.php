<?php include("Publics/haut.php"); ?>
<html>
    <body>
        <table>
            <tr>
                <td class="menu" style="background-color: brown"><?php include("Views/menu.php"); ?></td>
                <td class="content">
                    <h1><?= $title ?></h1>
                    <?= $view ?>
                </td>
            </tr>
        </table>
    </body>
</html>
<?php include("Publics/bas.php"); ?>
