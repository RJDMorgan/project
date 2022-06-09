<?php //controller

require './model/ManageArticle.php';

$list_article = new ManageArticle();
$article = new ManageArticle();

$view_list = $list_article->getListArticle($id);
$text_article = $article->getArticle($id);

$nav_site = 'nav_site';
$nav_categ = 'hidden';
$login = 'hidden';

// appel de la vue
require './view/article.php';