<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link rel="stylesheet" href="./public/css/styles.css" type="text/css">
</head>
<body>
    
    <nav class="<?=$nav_site?>">
        <a class="<?=$nav[1]?>" href = "index.php?page=categorie&id=1">Jeux Vidéos</a>
        <a class="<?=$nav[2]?>" href = "index.php?page=categorie&id=2">Manga/ Anime</a>
        <a class="<?=$nav[3]?>" href = "index.php?page=categorie&id=3">Cinéma</a>
        <a class="<?=$nav[4]?>" href = "index.php?page=categorie&id=4">Séries TV</a>
    </nav>
    
    <header>
        <a href = "index.php?page=home">
            <h1><?=$subtitle?></h1>
        </a>
    </header>
    
    <a class="<?=$login?>" href = "index.php?page=login">LOG IN</a>
    
    <nav class="<?=$nav_categ?>">
        <a class="<?=$nav[1]?>" href = "index.php?page=categorie&id=1">Jeux Vidéos</a>
        <a class="<?=$nav[2]?>" href = "index.php?page=categorie&id=2">Manga/ Anime</a>
        <a class="<?=$nav[3]?>" href = "index.php?page=categorie&id=3">Cinéma</a>
        <a class="<?=$nav[4]?>" href = "index.php?page=categorie&id=4">Séries TV</a>
    </nav>
    
    <?=$content?>
        
        
    <footer>
        Copyright and Company !!! 
    </footer>
</body>
</html>