<?php //controller

require './model/ManageProfil.php';

$profil = new ManageProfil();





$nav_site = 'nav_site';

$presentation = 'hidden';
$nav_home = 'hidden';
$nav_categ = 'hidden';
$login = 'hidden';

require './view/profil.php';