<?php // controller

require './model/ManageProfil.php';

$profil = new ManageProfil();

if(isset($_POST['submit']))
{
    $pseudo = htmlspecialchars($_POST['pseudo'])??'';
    
    $mail = htmlspecialchars($_POST['mail'])??'';
    
    $password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_BCRYPT))??'';
    
    $city = htmlspecialchars($_POST['city'])??'';
    
    $cp = htmlspecialchars($_POST['postal_code'])??'';
    
    $create = $profil->createProfil($pseudo, $mail, $password, $city, $cp);

};

$nav_categ = 'hidden';
$nav_site = 'hidden';
$login = 'hidden';

require './view/login.php';