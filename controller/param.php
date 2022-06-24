<?php //controller
require './model/ManageProfil.php';

$profil = new ManageProfil();

$inscrit = $create->fetch();


$nav_site = 'nav_site';

$presentation = 'hidden';
$nav_home = 'hidden';
$nav_categ = 'hidden';
$login = 'hidden';

require './view/param.php';
