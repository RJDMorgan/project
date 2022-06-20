<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&family=Grechen+Fuemen&family=Jim+Nightshade&family=Long+Cang&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/styles.css" type="text/css">
    <link rel="shortcut icon" href="" type="public/images/jpg">
</head>
<body>
    
    <!--Navigation Site dans la page Membre-->
    <nav class="<?=$nav_site?>"> 
        <a href = "index.php?page=home">Home</a>
        <a class="<?=$nav[1]?>" href = "index.php?page=categorie&id=1">Jeux Vidéos</a>
        <a class="<?=$nav[2]?>" href = "index.php?page=categorie&id=2">Manga/ Anime</a>
        <a class="<?=$nav[3]?>" href = "index.php?page=categorie&id=3">Cinéma</a>
        <a class="<?=$nav[4]?>" href = "index.php?page=categorie&id=4">Séries TV</a>
    </nav>
    
    <header>
            <h1><?=$subtitle?></h1>
    </header>
    
    <a class="<?=$login?>" href = "index.php?page=login">LOG IN</a>
    
    <div class="<?=$presentation?>">
        <p>Bienvenue sur ce site d'articles culturels.<br>Exprimez vos pensées, sentiments, émotions sur vos jeux, manga, anime, films et/ou séries télé.
        N'hésitez pas à vous inscrire et partagez vos textes (articles, poésies, poèmes...).<br>
        En attendant vos inspirations, bon voyage chez les auteur(e)s !!!
        </p>
    </div>
    
    <div class="login"></div>
    
    <!--Navigation page Home-->
    <nav class="<?=$nav_home?>">
        <a class="<?=$nav[1]?>" href = "index.php?page=categorie&id=1">Jeux Vidéos</a>
        <a class="<?=$nav[2]?>" href = "index.php?page=categorie&id=2">Manga/ Anime</a>
        <a class="<?=$nav[3]?>" href = "index.php?page=categorie&id=3">Cinéma</a>
        <a class="<?=$nav[4]?>" href = "index.php?page=categorie&id=4">Séries TV</a>
    </nav>
    
    
    <!--Navigation page categorie-->
    <nav class="<?=$nav_categ?>">
        <a href = "index.php?page=home">Home</a>
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