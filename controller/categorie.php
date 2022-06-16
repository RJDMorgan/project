<?php //controller

require './model/ManageCategorie.php';
require './model/ManageArticle.php';

$cat = new ManageCategorie();
$art = new ManageArticle();

$affich_categ = $cat->affichCategorie($id);
$info_categ = $affich_categ->fetch();

$list_art = $art->getListArticle($id);

$nav_categ = 'nav_categ';

$presentation = 'hidden';
$nav_home = 'hidden';
$nav[$id] = 'hidden';
$nav_site = 'hidden';
$login = 'hidden';

require './view/categorie.php';