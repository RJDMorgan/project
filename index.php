<?php

$page = '';

if(isset($_GET['page']))
{
    $page = $_GET['page'];
}

if(isset($_GET['id']))
{
    $id = intval($_GET['id']);
}

switch($page)
{
    case 'login' :
        require './controller/login.php';
        break;
        
    case 'categorie' :
        require './controller/categorie.php';
        break;
        
    case 'article' :
        require './controller/article.php';
        break;
        
    default :
        require './controller/home.php';
}
