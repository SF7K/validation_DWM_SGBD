<?php require_once './controllers/getOneChara.php'?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Te trompe pas Jean-Mi !</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="/img/warcraftlogo.png" type="image/x-icon">
</head>
<body class="updateBody">
    <?php require_once './templates/header.html' ?>
    <main class="updateMain flex">
        <form class="updateForm flex" action="./controllers/updateOneChara.php" method="POST">
            <input type="hidden" name="id" value="<?= $character['id'] ?>">
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name" value="<?= $character['name'] ?>">
            </div>
            <div>
                <label for="race">Race</label>
                <input type="text" name="race" value="<?= $character['race'] ?>">
            </div>
            <div>
                <label for="affiliation">Affiliation</label>
                <input type="text" name="affiliation" value="<?= $character['affiliation'] ?>">
            </div>
            <div>
                <label for="status">Statut</label>
                <input type="text" name="status" value="<?= $character['status'] ?>">
            </div>
            <input class="button" type="submit" value="Modifier">
        </form>
    </main>
    
</body>
</html>