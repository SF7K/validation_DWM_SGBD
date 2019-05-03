<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Un truc en plus sur Warcraft</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="/img/warcraftlogo.png" type="image/x-icon">
</head>
<body class="addBody">
    <?php require_once './templates/header.html' ?>
    <main class="addMain flex">
        <form class="addForm" action="./controllers/addOneChara.php" method="POST">
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name" placeholder="Pas de Sephiros ou Cloud...">
            </div>
            <div>
                <label for="race">Race</label>
                <input type="text" name="race" placeholder="Humain/Orc...">
            </div>
            <div>
                <label for="affiliation">Affiliation</label>
                <input type="text" name="affiliation" placeholder="Faction/Clan/Ordre...">
            </div>
            <div>
                <label for="status">Statut</label>
                <input type="text" name="status" placeholder="Mort/Vivant/Inconnu">
            </div>
            <input type="submit" value="Ajouter">
        </form>
    </main>
    
</body>
</html>