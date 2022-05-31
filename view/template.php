<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="./public/css/styles.css" type="text/css">
</head>
<body>
    
    <header>
        <a href = "index.php?page=home" class="accueil">
            <h1><?=$title?></h1>
        </a>
        <a href = "index.php?page=login" class="login">
            <h2>LOG IN</h2>
        </a>
    </header>
    
    
    <div class = "conteneur">
        <a href = "index.php?page=categorie&id=1">JEUX VIDEOS</a>
        <a href = "index.php?page=categorie&id=2">MANGA</a>
    </div>
    
    <div class = "conteneur">
        <a href = "index.php?page=categorie&id=3">CINEMA</a>
        <a href = "index.php?page=categorie&id=4">SERIES TV</a>
    </div>
    
    <main>
        <?=$content?>
    </main>
        
    <footer>
        Copyright ! 
    </footer>
</body>
</html>