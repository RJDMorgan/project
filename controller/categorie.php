<?php //controller

require './model/ManageCategorie.php';
require './model/ManageArticle.php';

$cat = new ManageCategorie();
$art = new ManageArticle();

$affich_categ = $cat->affichCategorie($id);
$info_categ = $affich_categ->fetch();
$list_art = $art->getListArticle($id);


require './view/categorie.php';