<?php require './controllers/getAllChara.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Des perso de Warcraft</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="/img/warcraftlogo.png" type="image/x-icon">
</head>
<body class="charactersBody">
    <?php require_once './templates/header.html' ?>
    <main class="flex charactersMain">
        <div class="divTable">
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Race</th>
                    <th>Afilliation</th>
                    <th>Statut</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                <?php foreach($characters as $character): ?>
                <tr>
                    <td><?= $character['name']?></td>
                    <td><?= $character['race']?></td>
                    <td><?= $character['affiliation']?></td>
                    <td><?= $character['status']?></td>
                    <td>
                        <form action="./updateChara.php" method="POST">
                            <input type="hidden" name="id" value="<?= $character['id'] ?>">
                            <input type="submit" value="↻">
                        </form>
                    </td>
                    <td>
                        <form action="./controllers/deleteOneChara.php" method="POST">
                            <input type="hidden" name="id" value="<?= $character['id'] ?>">
                            <input type="submit" value="X">
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </main>

</body>
</html>