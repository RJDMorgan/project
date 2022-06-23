<?php
require_once 'config/config.php';
require_once 'model/Manage.php';
$global = new Manage();

// Récupération des paramètres
$page = $_GET['page']?? '';
$id = $_GET['id']?? 0;

$nav_categ = '';
$nav = array('','','','','');

// Routeur
require $global->router($page);