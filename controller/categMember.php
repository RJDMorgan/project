<?php //controller

require './model/ManageCategorie.php';
require './model/ManageArticle.php';

$cat_member = new ManageCategorie();
$list_art_member = new ManageArticle();

$cat_id = $_GET['categ']??null;
if(isset($cat_id))
{
    $list_art_perso = $list_art_member->getArtMember($id,$cat_id);
};

$nav_site = 'nav_site';

$nav_categ = 'hidden';
$login = 'hidden';

require './view/categMember.php';