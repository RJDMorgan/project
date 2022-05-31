<?php // controller

require './model/ManageProfil.php';

$profil = new ManageProfil();

if(isset($_POST['submit']))
{
    $pseudo = $_POST['pseudo']??'';
    
    $mail = $_POST['mail']??'';
    
    $password = md5($_POST['password'])??'';
    
    $city = $_POST['city']??'';
    
    $cp = $_POST['postal_code']??'';
    
    $create = $profil->createProfil($pseudo, $mail, $password, $city, $cp);

};

require './view/login.php';