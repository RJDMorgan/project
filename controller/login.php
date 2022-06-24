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
    
    header('location:param.php');

};

if(isset($_POST['connexion'])) // appeler la function connectprofil ou pas...
{
    $pseudo = htmlspecialchars($_POST['pseudo'])??'';
    
    $password = htmlspecialchars(password_verify($_POST['password'], PASSWORD_BCRYPT))??'';
    
    if($_POST['pseudo']=='pseudo' && password_verify($_POST['password']))
    {
        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['password'] = password_verify($_POST['password']);
        $_SESSION['ident'] = true;
        header('location:profil.php');
    }
    
    if(!isset($_SESSION['ident']) || !$_SESSION['ident'])
    {
        require 'login.php';
        exit;
    }

};


$nav_site = 'nav_site';

$presentation = 'hidden';
$nav_home = 'hidden';
$nav_categ = 'hidden';
$login = 'hidden';

require './view/login.php';